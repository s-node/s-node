<?php

	$query = XT::Query("
		INSERT INTO
			" . XT::getTable('faq') . " (
			questioner,
			questioner_mail,
			title,
			description,
			date,
			lang
		)
		VALUES(
			'" . XT::getValue('name') . "',
			'" . XT::getValue('email') . "',
			'" . XT::getValue('title') . "',
			'" . XT::getValue('message') . "',
			'". $now ."',
           	'" . XT::getActiveLang() . "'
		)
	");
	
	$result = XT::query("SELECT MAX(id) as maxid FROM " . XT::getTable('faq'),__FILE__,__LINE__);
	$row = $result->FetchRow();
		
	XT::query("INSERT INTO " . XT::getTable('faq2cat') . " (faq_id,node_id) 
	           VALUES (
	           " . $row['maxid'] . ",
	           2
	           )",__FILE__,__LINE__);
	
	// Set Values for Notify Action
	
	XT::setValue('name',XT::getValue('name'));
	XT::setValue('email',XT::getValue('email'));
	XT::setValue('title',XT::getValue('title'));
	XT::setValue('message',XT::getValue('message'));
		
	// Notify Admins that a new Question was entered
	XT::call('notify');
	
?>