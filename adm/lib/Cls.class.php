<?php
/*
 * @author: maweiguo
 * 
 * @table: admin
 * 	字段				字段说明			数据类型				备注
 * @id				自增长ID			smallint	
 * @name			用户名			varchar(60)	
 * @password		密码				varchar(120)	
 * @type			用户级别			tinyint				超级管理员|普通管理员
 * @islock			用户是否锁定		tinyint	
 * @lastloginip		上次登录IP		varchar(60)	
 * @lastlogintime	上次登录时间		datetime	
 * @thisloginip		本次登录IP		varchar(60)	
 * @thislogintime	本次登录时间		datetime	
 * @loginquantity	登录次数			smallint	
 * 
 */

chdir(dirname(__FILE__));
require_once '../../configs/path.inc.php';
require_once 'configs/function.php';
require_once 'include/ExPDO.class.php';

// Admin User CRUD class
class Classes {
	private $uid = null;
	private $username = null;
	private $password = null;
	private $password2 = null;
	private $status = null;
	private $email = null;
	private $pdo = null;
	private $table = null;
	private $id = null;
	
	private $url = null;
	
	function User($id, $uid, $username, $password, $password2, $status, $email){
		$this->table = $GLOBALS['table']['user']; 
		$this->pdo = new ExPDO();

		$this->id = $id;
		$this->uid = $uid;
		$this->username = $username;
		$this->password = $password;
		$this->password2 = $password2;
		$this->status = $status;
		$this->email = $email;
		
		$this->url = $GLOBALS['config']['adminroot']."/user/userpage.php";
	//	alert($this->username, $this->url);
	}
	
	function doAction($action){
		switch ($action)
		{
			case 'add':
				$this->add();
				break;
			case 'delete':
				$this->delete();
				break;
			case 'edit':
				$this->update();
				break;
			case 'pwd':
				$this->updatePwd();
				break;
			case 'list':
			default:
				$this->show();
				break;
		}
	}
	
	private function checkUser(){
		if ($this->username == null)
			return false;
		
		return true;
	}

	private function checkPassword(){
		if ($this->password == null)
			return false;
		
		return true;
	}
	
	private function add(){
		$url_add = $this->url.'?page=add';
//		echo $url_add;
		if (!$this->checkUser()
		||!$this->checkPassword()){
			alert("管理员添加失败,用户名和密码不能为空!", $url_add);
		//alert($this->username, $url_add);
			return;
		}
		
		$table = $this->table;
		$pdo = $this->pdo;
//*/
		$sql = "SELECT * from $table WHERE uid = '$this->uid'";
//		alert($sql, $url_add);
		if ($pdo->rowCountSql($sql) > 0){
			alert("用户名已存在!", $url_add);
			return;
		}
//*/
		
		$password = md5($this->password);
		$sql = "INSERT INTO $table (uid, name, pwd, status, email) VALUES('$this->uid', '$this->username', '$this->password', 0, '$this->email')";
//		alert($sql, $url_add);

		if ($pdo->exec($sql) > 0) {
			$res['status'] = 'true';
			$res['msg'] = "添加成功!";
			$res['id'] = $id;
			//			alert("管理员添加成功!", $url_list);
		} else {
			//			alert("管理员添加失败!", $url_list);
			$res['status'] = 'false';
			$res['msg'] = "添加失败: ";
			$res['sql'] = $sql;
			$res['error'] = $pdo->errorInfo();
		}
		
		return json_encode($res);
	}
	
	private function delete(){
		$url_list = $this->url.'?page=list';
		if ($this->id == null) {
			alert("管理员删除失败!", $url_list);
			return;
		}
		if ($this->id == 1) {
			alert("管理员删除失败!", $url_list);
			return;
		}
		
		$table = $this->table;
		$pdo = $this->pdo;
		$id = $this->id;
		$sql = "DELETE FROM $table WHERE id=$id";
//		alert($sql, $url_list);

		$res = null;
		if ($pdo->exec($sql) > 0) {
			$res['status'] = 'true';
			$res['msg'] = "删除成功!";
			$res['id'] = $id;
			//			alert("管理员删除成功!", $url_list);
		} else {
			//			alert("管理员删除失败!", $url_list);
			$res['status'] = 'false';
			$res['msg'] = "删除失败: ";
			$res['sql'] = $sql;
			$res['error'] = $pdo->errorInfo();
		}
		
//		echo json_encode(array('success'=>true));
		return json_encode($res);
	}
	
	private function update(){
		$url_pass = $this->url.'?page=pwd';
	
		$table = $this->table;
		$pdo = $this->pdo;
		$name = $this->username;
		$pwd = $this->password;
		$email = $this->email;
		$uid = $this->uid;
	
		$pwd = md5($this->password);
		$sql = "UPDATE $table SET pwd = '$pwd', name='$name', email='$email' WHERE uid = '$uid'";
//		alert($sql, $url_pass);
	
		if ($pdo->exec($sql) < 1) {
			//trace($pdo->errorInfo());
			alert($pdo->errorInfo()[2], $url_pass);
			//alert("账户修改失败!", $url_pass);
		}
	
		alert("账户修改成功!", $url_pass);
	}
	
	private function updatePwd(){
		$url_pass = $this->url.'?page=pwd';
		if ($this->username == null
		|| $this->password == null
		|| $this->password2 == null){
//			trace($this->username);
//			trace($this->password);
//			trace($this->oldpassword);
//			alert($this->password2, $url_pass);
			alert("密码修改失败1!", $url_pass);
			return;
		}
		
		$table = $this->table;
		$pdo = $this->pdo;
		$username = $this->username;
		$oldpassword = $this->password2;
		
		$sql = "SELECT pwd FROM $table WHERE name = '$username'";
	//	alert($sql, $url_pass);
		$stmt = $pdo->query($sql);
		$dbpass = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);

		if ($dbpass[0] != md5($oldpassword)) {
//			trace($pdo->errorInfo());
			alert("密码修改失败2!", $url_pass);
			return;
		}
		
		$password = md5($this->password);
		$sql = "UPDATE $table SET password = '$password' WHERE username = '$username'";
		
		if ($pdo->exec($sql) < 1) {
//			trace($pdo->errorInfo());
			alert("密码修改失败!", $url_pass);
		}

		alert("密码修改成功!", $url_pass);
		
		
	}
	
	private function show(){
		$table = $this->table;
		$sql = null;
		if ($this->id == null){
			$sql = "SELECT id, uid, name, status, email FROM $table";
		}else {
			$sql = "SELECT uid, name, status, email FROM $table WHERE id=$this->id";
		}
	//	trace($sql);
	//	alert($sql);
		$pdo = new ExPDO();
		$stmt = $pdo->query($sql);
		$users = $stmt->fetchAll();
	//	trace($users);
		
		echo json_encode($users);
	}
	
	function getUser($id){
		if ($id == null)
			return null;
		
		$table = $this->table;
		$sql = "SELECT uid, name, status, email FROM $table WHERE id=$this->id";

		//	trace($sql);
		$pdo = new ExPDO();
		$stmt = $pdo->query($sql);
		$users = $stmt->fetchAll();
		
		return $users[0];
	}
}
