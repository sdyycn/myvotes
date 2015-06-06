<?php
/*
 * @author: maweiguo
 * 
 */

chdir(dirname(__FILE__));
require_once '../../configs/path.inc.php';
if ($config['debug'] == 'false')
	require_once ADMIN_FOLDER.'/check.php';

require_once 'include/ExPage.class.php';
require_once ADMIN_FOLDER.'/lib/Cls.class.php';
require_once ADMIN_FOLDER.'/cls/ClsListPage.class.php';
require_once ADMIN_FOLDER.'/cls/ClsAddPage.class.php';
require_once ADMIN_FOLDER.'/cls/ClsEditPage.class.php';


// UserPage Controller
class ClsPage extends AdminPage{
	function __construct(){
		parent::__construct();
	}

	function display(){
		$page = null;
		switch ($this->page)
		{
			case 'add':
				$page = new ClsAddPage;
				break;
			case 'edit':
				$page = new ClsEditPage;
				break;
			case 'list':
			default:
				$page = new ClsListPage;
				break;
		}
		$page->display();
	}

	function doAction(){
		$id = null;
		if (isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
		}
		$mid = null;
		if (isset($_REQUEST['mid'])){
			$mid = $_REQUEST['mid'];
		}
		$name = null;
		if (isset($_REQUEST['name'])){
			$name = $_REQUEST['name'];
		}
		$type = null;
		if (isset($_REQUEST['type'])){
			$type = $_REQUEST['type'];
		}
		$privilege = null;
		if (isset($_REQUEST['privilege'])){
			$privilege = $_REQUEST['privilege'];
		}
		
		$status = null;
		if (isset($_REQUEST['status'])){
			$status = $_REQUEST['status'];
		}
		
		$dir = null;
		if (isset($_REQUEST['dir'])){
			$dir = $_REQUEST['dir'];
		}
		
		$pid = null;
		if (isset($_REQUEST['pid'])){
			$pid = $_REQUEST['pid'];
		}
		
		$directory = null;
		if (isset($_REQUEST['directory'])){
			$directory = $_REQUEST['directory'];
		}
		
		$description = null;
		if (isset($_REQUEST['description'])){
			$description = $_REQUEST['description'];
		}
		
		$cls = new Cls($id, $mid, $name, $type, $privilege, $status, $dir, $pid, $directory, $description);	// another example: all the same db operation in AdminUser class.
		$cls->doAction($this->action);
	}
}

$page = new ClsPage;
$page->run();
