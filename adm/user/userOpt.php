<?php
/*
 * @author: maweiguo
 * @date: 2015/5/18
 * @file: userOpt.php
 *
 */

chdir(dirname(__FILE__));
require_once '../../configs/path.inc.php';
require_once 'include/ExPage.class.php';
require_once 'include/Logs.class.php';
require_once 'include/ExPDO.class.php';

class UserOpt extends AdminPage{
	var $table = null;
	
	function __construct(){
		$this->table = $GLOBALS['table']['admin'];
		parent::__construct();
	}
	
	function doAction(){
		switch ($this->action) {
		case 'save':
//			Save();
			break;
		case 'destroy':
//			Destroy();
			break;
		case 'update':
//			Update();
			break;
		case 'list':
		default:
			$this->Show();
			break;
		}
	}
	
	function Show(){
		$sql = "SELECT id, uid, name, status, email FROM $this->table";
		$pdo = new ExPDO();
		$stmt = $pdo->query($sql);
		$users = $stmt->fetchAll();
	//	trace($users);
		
		echo json_encode($users);
	}
	
	function Save(){
		$name = $_REQUEST['name'];
		$gid = $_REQUEST['gid'];
		$status = $_REQUEST['status'];
		$email = $_REQUEST['email'];
			
		$sql = "INSERT INTO $this->table(name, gid, status, email) values('$name','$gid','$status','$email')";
		$pdo = new ExPDO();
		$pdo->exec($sql);
		
		echo json_encode();
	}
	
	function Update(){
		$id = intval($_REQUEST['id']);
		$name = $_REQUEST['name'];
		$gid = $_REQUEST['gid'];
		$status = $_REQUEST['status'];
		$email = $_REQUEST['email'];
			
		$sql = "UPDATE $this->table set name='$name', gid='$gid', status='$status', email='$email' WHERE id=$id";
		$pdo = new ExPDO();
		$stmt = $pdo->query($sql);
		$users = $stmt->fetchAll();
		echo json_encode($users);
	}
	
	function Destroy(){
		$id = intval($_REQUEST['id']);
		$sql = "DELETE FROM $table WHERE id=$id";
		echo json_encode(array('success'=>true));
	}
}

$page = new UserOpt();
$page->run();

