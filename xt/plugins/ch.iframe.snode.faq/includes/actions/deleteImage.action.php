<?php

XT::query("UPDATE " . XT::getTable("faq") . " SET image = '',image_version = '', image_zoom = '' WHERE id = " . XT::getValue("id") . "",__FILE__,__LINE__);

XT::setAdminModule("edit");

?>