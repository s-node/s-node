<?php

// Address to be notified
$i = 1;
foreach ($GLOBALS['plugin']->getConfig("answeraddresses") as $key){
	$mailaddresses[$i] = $key;
	$i++;
}
// First mail in this array will always be notified on a new question
$notifymail = $mailaddresses[1];

print_r($mailaddresses);

$mailcontent = array();
$mailcontent['questioner'] = XT::getValue('name');
$mailcontent['questioner_mail'] = XT::getValue('email');
$mailcontent['question_title'] = XT::getValue('title');
$mailcontent['description'] = XT::getValue('message');

XT::assign("xt" . XT::getBaseID() . "_MAILCONTENT",$mailcontent);


// Send Mail to Questioner
require_once(CLASS_DIR . "/phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->IsHTML(true);
$mail->Encoding = '7bit';
$mail->SetLanguage(XT::getLang(),CLASS_DIR . "/phpmailer/language/");
$mail->SMTPAuth = $GLOBALS['cfg']->get('smtp','SMTPAuth');
if($GLOBALS['cfg']->get('smtp','SMTPAuth')){
	$mail->Username = $GLOBALS['cfg']->get('smtp','Username');
	$mail->Password = $GLOBALS['cfg']->get('smtp','Password');
}
$mail->Host = $GLOBALS['cfg']->get('smtp','Host');
$mail->From = XT::getValue('email');
$mail->FromName = XT::getValue('name');
$mail->AddAddress($notifymail);
$mail->Subject = XT::translate('New Question');
$mail->Body  = $GLOBALS['tpl']->fetch($GLOBALS['plugin']->tpl_location . 'mail/notify_'.XT::getActiveLang().'.tpl');
$mail->WordWrap = 50;

if($mail->Send())
{
	header('Location: /index.php?TPL='.XT::getValue('confirmation_tpl'));
}
else
{	
$mail->ErrorInfo;
}

?>