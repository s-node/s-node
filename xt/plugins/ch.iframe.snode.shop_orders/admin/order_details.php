<?php

// Bestellung holen
$result = XT::query("
    SELECT
        *
    FROM
        " . $GLOBALS['plugin']->getTable("shop_orders") . "
    WHERE
        id=" . XT::getValue('id') . "
    ORDER BY
        id DESC
    LIMIT
        " . XT::getAdminNavigatorLimit() . "
",__FILE__,__LINE__);

$data = array();
while($row = $result->FetchRow()){
    $data['order'] = $row;
}

// Bestelldetails holen
$result = XT::query("select od.*, ad.title, prod.price as realprice from " . XT::getTable('order_details') . " as od
LEFT JOIN
" . XT::getTable('articles_details') . " as ad ON (ad.id = od.product_id AND ad.lang = '" . XT::getPluginLang() . "')
LEFT JOIN
" . XT::getTable('prices') . " as prod ON (prod.article_id = od.product_id)
WHERE od.order_id=" . XT::getValue('id'),__FILE__,__LINE__);

while($row = $result->FetchRow()){
    $data['order_details'][] = $row;
    $data['total'] += ($row['realprice'] * $row['quantity']);
}
$data['total'] += $data['order']['transport'];

    // Adresse holen und assignen
    $result = XT::query("SELECT * FROM " . XT::getTable('customers_persons') . " WHERE id=" . $data['order']['shipping_addr'] ,__FILE__,__LINE__);
    $address['shipping'] = XT::getQueryData($result);

    $result = XT::query("SELECT * FROM " . XT::getTable('customers_persons') . " WHERE id=" . $data['order']['billing_addr'] ,__FILE__,__LINE__);
    $address['billing'] = XT::getQueryData($result);

    XT::assign("USERNAME",$_SESSION['user']['name']);
    XT::assign("ADDRESS",$address);


XT::assign("DATA", $data);

$content = XT::build("order_details.tpl");
?>