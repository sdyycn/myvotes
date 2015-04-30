<?php
/*
 * @author: maweiguo
 * @date 2015/04/30
 */

chdir(dirname(__FILE__));
require_once '../../configs/path.inc.php';
//require_once ADMIN_FOLDER.'/check.php';
require_once 'include/ExPage.class.php';

$page = new AdminPage('siteinfo.html');
$page->run();
