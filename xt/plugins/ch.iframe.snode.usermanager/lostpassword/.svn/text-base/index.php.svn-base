<?php

if($GLOBALS['plugin']->getValue('email')){

    // Get id for this user
    $result = XT::query("
        SELECT
            usr.id,
            usr.username,
            usr.id as user_id
        FROM
            " . $GLOBALS['plugin']->getTable('user') . " as usr
        WHERE
            usr.email = '" . $GLOBALS['plugin']->getValue('email') . "'
    ",__FILE__,__LINE__,0);

    $data = array();
    while($row = $result->FetchRow()){
        $data[] = $row;
    }

    $pass = random_password(5);

    if(sizeof($data) > 0){
        foreach ($data as $user) {
            if($user['username'] != 'admin'){
                $newpass = md5($pass . $GLOBALS['cfg']->get("system", "magic"));
                XT::query("
                    UPDATE
                        " . $GLOBALS['plugin']->getTable('user') . "
                    SET
                        password = '" . $newpass . "'
                    WHERE
                        id = '" . $user['user_id'] . "'
                    ",__FILE__,__LINE__);
                $updatedusers[] = $user['username'];
            }
        }
        XT::assign("EMAIL", $GLOBALS['plugin']->getValue('email'));
        XT::assign("PASSWORD", $pass);
        XT::assign("USERNAME", $data[0]['username']);
        XT::assign("updatedusers",$updatedusers);

        require_once(CLASS_DIR . 'mail.class.php');
        $mail = new XT_Mail($GLOBALS['cfg']->get("system","email") ,$GLOBALS['cfg']->get("system",'name'),$GLOBALS['cfg']->get("system",'email') );
        $mail->addReceiver($GLOBALS['plugin']->getValue('email'),'');
        $mail->setSubject($GLOBALS['cfg']->get("system",'name') . " " . $GLOBALS['lang']->msg("Your password") . '');
        $mail->setHTML(false);
        $mail->setBody(XT::build("mail.tpl"));
        $mail->send();

        $content = XT::build("ok.tpl");

    } else {

        XT::assign("EMAIL", $GLOBALS['plugin']->getValue('email'));
        $content = XT::build("failed.tpl");
    }
} else {

    $content = XT::build("default.tpl");
}

function random_password( $len = 10 )
{
    $salt = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvXxYyZz0123456789';
    $salt_max = strlen( $salt ) - 1 ;
    $pass = '' ;
    for( $i=0; $i < $len; $i++ ) {
        $pass .= substr( $salt, mt_rand(0, $salt_max), 1 ) ;
    }
    return $pass ;
}

?>