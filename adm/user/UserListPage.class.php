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
require_once 'include/ExPDO.class.php';
require_once 'AdminOpt.class.php';

class UserListPage extends AdminPage{
	function __construct(){
		parent::__construct('user_list');
	}
	
	function display(){
		// fix the page data here
//		$table = $GLOBALS['table']['admin'];
//		$sql = "SELECT id, name, CASE WHEN gid = 0 THEN '超级管理员' ELSE '普通管理员' END, status FROM $table";
//		$sql = "SELECT id, uid, name, email, status FROM $table";
//		$pdo = new ExPDO();
//		$stmt = $pdo->query($sql);
//		$users = $stmt->fetchAll();
		
//		trace($users);
		$a = new AdminOpt();
		$this->smarty->assign('users', json_encode($a->getUsers()));
		$this->smarty->assign('adminroot', $this->adminroot.'/user');
		parent::display();
	}
};
