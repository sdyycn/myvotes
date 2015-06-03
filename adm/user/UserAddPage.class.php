<?php
/*
 * @author: maweiguo
 * @date: 2013/7/9
 * @file: UserAdd.class.php
 * 
 */

chdir(dirname(__FILE__));
require_once '../../configs/path.inc.php';
require_once 'include/ExPage.class.php';
require_once 'include/Logs.class.php';
require_once 'include/ExPDO.class.php';

class UserAddPage extends AdminPage{
	private $uid = null;
	private $pwd = null;
	private $username = null;
	private $email = null;
	
	function __construct(){
		parent::__construct('user_add');
	}
	
	function display(){
		// fix the page data here
//		$this->smarty->assign('username', $_SESSION['username']);
		$this->smarty->assign('adminroot', $this->adminroot.'/user');
		parent::display();
	}
	
	private function form_check_useradd(){
		$url_add = $this->adminroot.'/user/userpage.php?page=add';
	
		if (!empty($_REQUEST['uid'])){
			$this->uid = $_REQUEST['uid'];
		} else {
			alert('用户名不能为空', $url_add);
			return false;
		}
		
		if (!empty($_REQUEST['password'])){
			$this->pwd = $_REQUEST['password'];
		} else {
			alert('密码不能为空', $url_add);
			return false;
		}
		
		if (!empty($_REQUEST['username'])){
			$this->username = $_REQUEST['username'];
		} else {
			alert('请输入用户姓名', $url_add);
			return false;
		}
		
		if (!empty($_REQUEST['email'])){
			$this->email = $_REQUEST['email'];
		} else {
			alert('请输入EMAIL', $url_add);
			return false;
		}
		
		return true;
	}
	function doAction(){
		$url_add = $this->adminroot.'/user/userpage.php?page=add';
		if (!$this->form_check_useradd()){
			return;
		}
		
		$table = $GLOBALS['table']['admin'];
		$pdo = new ExPDO;
		$sql = "SELECT * FROM $table  WHERE  uid = '$this->uid'";
		if ($pdo->rowCountSql($sql) > 0){
			alert("用户名已存在!", $url_add);
			return;
		}
		
		$password = md5($this->pwd);
		$sql = "INSERT INTO $table (uid, name, type, pwd, email, status) VALUES('$this->uid', '$this->username', 0, '$password', '$this->email', 1)";

		if ($pdo->exec($sql) < 1) {
			trace($pdo->errorInfo());
			alert("管理员添加失败!", $url_add);
		}

		alert("管理员添加成功!", $url_add);
	}
};
