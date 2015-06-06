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
class Cls {
	private $mid = null;
	private $name = null;
	private $type = null;
	private $privilege = null;
	private $pid = null;
	private $status = null;
	private $directory = null;
	private $description = null;
	
	private $pdo = null;
	private $table = null;
	private $id = null;
	
	private $url = null;
	
	function Cls($id, $mid, $name, $type, $privilege, $status, $directory, $pid, $directory, $description){
		$this->table = $GLOBALS['table']['cls']; 
		$this->pdo = new ExPDO();

		$this->id = $id;
		$this->mid = $mid;
		$this->name = $name;
		$this->type = $type;
		$this->privilege = $privilege;
		$this->status = $status;
		$this->pid = $pid;
		$this->description = $description;
		$this->directory = $directory;
		
		$this->url = $GLOBALS['config']['adminroot']."/cls/cls.php";
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
			case 'list':
			default:
				$this->show();
				break;
		}
	}
	
	private function add(){
		$url_add = $this->url.'?page=list';

		$table = $this->table;
		$pdo = $this->pdo;
//*/
		$sql = "SELECT * from $table WHERE mid = '$this->mid'";
//		alert($sql, $url_add);
		if ($pdo->rowCountSql($sql) > 0){
			alert("此菜单ID已存在!", $url_add);
			return;
		}
//*/
		$sql = "INSERT INTO $table (mid, name, type, status, privilege, pid, directory, description)";
		$sql .= " VALUES('$this->mid', '$this->name', $this->type, $this->status, $this->privilege, $this->pid, '$this->directory', '$this->description')";
		
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
		echo $res['msg'];
	//	return json_encode($res);
	}
	
	private function delete(){
		$url_list = $this->url.'?page=list';
		if ($this->id == null) {
			alert("请选择要删除栏目!", $url_list);
			return;
		}
		if ($this->id == 1) {
			alert("不能删除顶级栏目!", $url_list);
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
		echo $res['msg'];
		//return json_encode($res);
	}
	
	private function update(){
		$url_pass = $this->url.'?page=list';
	
		$table = $this->table;
		$pdo = $this->pdo;

		$sql = "UPDATE $table SET";
		$sql .= " mid='$this->mid', name='$this->name', status=$this->status, privilege=$this->privilege,";
		$sql .= " type=$this->type, pid=$this->pid, directory='$this->directory', description='$this->description'"; 
		$sql .= " WHERE id = $this->id";
	//	alert($sql, $url_pass);
	
		if ($pdo->exec($sql) < 1) {
			//trace($pdo->errorInfo());
			alert($pdo->errorInfo()[2], $url_pass);
			//alert("账户修改失败!", $url_pass);
		}
		echo "菜单修改成功!";
	
	//	alert("账户修改成功!", $url_pass);
	}

	private function show(){
		$table = $this->table;
		$sql = null;
		if ($this->id == null){
			$sql = "SELECT id, name, mid, status, privilege, type, pid as _parentId, directory, description FROM $table";
	//	$sql = "SELECT id, name, pid as _parentId FROM $table";
		}else {
			$sql = "SELECT id, name, mid, status, privilege, type, directory, description FROM $table WHERE id=$this->id";
		}
	//	trace($sql);
	//	alert($sql, $this->url);
		$pdo = new ExPDO();
		$stmt = $pdo->query($sql);
	//	alert($pdo->errorInfo()[2], $url_pass);
		$cls = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$t;
		$i=0;
		foreach($cls as $a){
			$t[$i]['id'] = (int)$a['id'];
			$t[$i]['name'] = $a['name'];
			$t[$i]['mid'] = $a['mid'];
			$t[$i]['status'] = (int)$a['status'];
			$t[$i]['privilege'] = (int)$a['privilege'];
			$t[$i]['type'] = (int)$a['type'];
			$t[$i]['description'] = $a['description'];
			$t[$i]['directory'] = $a['directory'];
			$t[$i++]['_parentId'] = (int)$a['_parentId'];	// treegrid需要
		}
		$str['total'] = $pdo->rowCount($stmt);
		$str['rows'] = $t;

		echo json_encode($str);
	}
}
