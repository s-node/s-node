<?php
if(XT::getSessionValue('open') <= 1){
    $GLOBALS['preplugin_content'] .= '<script language="JavaScript"><!--
    alert(\'' . $GLOBALS['lang']->msg('Please choose a category first') . '\');
    //-->
    </script>';
} else {
    if(XT::getValue('alwaysactive') != 1) {
        XT::setValue('alwaysactive',0);
    }
    
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
    
    $result = XT::query("SELECT (MAX(position)+1) as maxpos FROM " . XT::getTable('faq2cat'),__FILE__,__LINE__);
    $row = $result->FetchRow();
    $max_pos = $row['maxpos'];
    
    if(XT::getSessionValue('open') > 0){
        XT::query("INSERT INTO " . XT::getTable('faq2cat') . " (faq_id,node_id,position) 
            VALUES (
            " . $max_id . ",
            " . XT::getSessionValue('open') . ",
            " . $max_pos . "
        )",__FILE__,__LINE__);
    }
    
    XT::setSessionValue('newid', $max_id);
    XT::setValue("id", $max_id);
    XT::setAdminModule("edit");

}

?>