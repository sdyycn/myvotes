<?php
/*
 * @author: maweiguo
* @date: 2015/06/03
* @file: AdminAddPage.class.php
*
*/

chdir(dirname(__FILE__));
require_once '../../configs/path.inc.php';
require_once 'include/ExPage.class.php';
require_once 'include/Logs.class.php';

class AdminAddPage extends AdminPage{
	function __construct(){
		parent::__construct('admin_add');
	}

	function display(){
		// fix the page data here
		//		$this->smarty->assign('username', $_SESSION['username']);
		$this->smarty->assign('adminroot', $this->adminroot.'/user');
		parent::display();
	}
};
