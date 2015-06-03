<?php
/*
 * @author: maweiguo
 * @date: 2015/06/03
**/

chdir(dirname(__FILE__));
require_once '../../configs/path.inc.php';
if ($config['debug'] == 'false')
	require_once ADMIN_FOLDER.'/check.php';

require_once 'include/ExPage.class.php';
require_once ADMIN_FOLDER.'/lib/User.class.php';
require_once ADMIN_FOLDER.'/user/UserListPage.class.php';
require_once ADMIN_FOLDER.'/user/UserAddPage.class.php';
require_once ADMIN_FOLDER.'/user/UserPasswordPage.class.php';


// UserPage Controller
class UserPage extends AdminPage{
	function __construct(){
		parent::__construct();
	}

	function display(){
		$page = null;
		switch ($this->page)
		{
			case 'add':
				$page = new UserAddPage;
				break;
			case 'pwd':
				$page = new UserPasswordPage;
				break;
			case 'edit':
				$page = new UserEditPage;
				break;
			case 'list':
			default:
				$page = new UserListPage;
				break;
		}
		$page->display();
	}

	function doAction(){
		$id = null;
		if (isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
		}
		$uid = null;
		if (isset($_REQUEST['uid'])){
			$uid = $_REQUEST['uid'];
		}
		$username = null;
		if (isset($_REQUEST['name'])){
			$username = $_REQUEST['name'];
		}
		$password = null;
		if (isset($_REQUEST['password'])){
			$password = $_REQUEST['password'];
		}
		$password2 = null;
		if (isset($_REQUEST['password2'])){
			$password2 = $_REQUEST['password2'];
		}

		$status = null;
		if (isset($_REQUEST['status'])){
			$status = $_REQUEST['status'];
		}

		$email = null;
		if (isset($_REQUEST['email'])){
			$email = $_REQUEST['email'];
		}

		$user = new User($id, $uid, $username, $password, $password2, $status, $email);	// another example: all the same db operation in AdminUser class.
		$user->doAction($this->action);
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
}

$page = new UserPage;
$page->run();
