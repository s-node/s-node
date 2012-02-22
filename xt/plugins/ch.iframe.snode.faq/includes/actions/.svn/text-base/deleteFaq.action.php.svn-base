<?php

XT::query("DELETE FROM " . XT::getTable("faq") . " WHERE id = " . XT::getValue("id") . "",__FILE__,__LINE__);
XT::query("DELETE FROM " . XT::getTable("faq2cat") . " WHERE faq_id = " . XT::getValue("id") . "",__FILE__,__LINE__);

XT::loadClass("searchindex.class.php","ch.iframe.snode.search");
$search = new XT_SearchIndex(XT::getValue('id'),XT::getContentType("FAQ Article"),0);
$search->setLang(XT::getActiveLang());
$search->delete();

XT::setAdminModule("overview");

?>