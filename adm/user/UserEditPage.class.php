<?php
/*
 * @author: maweiguo
 * @date: 2013/7/9
 * @file: UserList.class.php
 * 
 */

chdir(dirname(__FILE__));
require_once '../../configs/path.inc.php';
require_once 'include/ExPage.class.php';
require_once 'include/Logs.class.php';

class UserListPage extends AdminPage{
	function __construct(){
		parent::__construct('user_list');
	}
	
	function display(){
		$this->smarty->assign('adminroot', $this->adminroot.'/user');
		parent::display();
	}
};
