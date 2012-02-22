<?php

// Add a new FAQ entry
XT::query("INSERT INTO " . XT::getTable('faq') . " (date,c_user,lang) 
           VALUES (
           " . time() . ",
           " . XT::getUserID() . ",
           '" . XT::getActiveLang() . "'
           )",__FILE__,__LINE__);

$result = XT::query("SELECT MAX(id) as maxid FROM " . XT::getTable('faq'),__FILE__,__LINE__);
$row = $result->FetchRow();
$max_id = $row['maxid'];

$result = XT::query("SELECT IF(MAX(position) > 0,(MAX(position)+1),1) as maxpos FROM " . XT::getTable('faq2cat'),__FILE__,__LINE__);
$row = $result->FetchRow();
$max_pos = $row['maxpos'];


XT::query("INSERT INTO " . XT::getTable('faq2cat') . " (faq_id,node_id,position) 
           VALUES (
           " . $max_id . ",
           2,
           " . $max_pos . "
           )",__FILE__,__LINE__);

XT::setValue("id", $max_id);
XT::setAdminModule("edit");

?>