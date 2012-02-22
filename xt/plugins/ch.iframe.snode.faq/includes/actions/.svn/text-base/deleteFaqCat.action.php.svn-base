<?php

XT::query("DELETE FROM " . XT::getTable("faq") . " WHERE id = " . XT::getValue("id") . "",__FILE__,__LINE__);
XT::query("DELETE FROM " . XT::getTable("faq2cat") . " WHERE faq_id = " . XT::getValue("id") . "",__FILE__,__LINE__);

XT::setAdminModule("categories");

?>