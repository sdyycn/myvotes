<?php
/*
 * @author: maweiguo
* @date: 2015/5/5
* @file: VoteListPage.class.php
*
*/

chdir(dirname(__FILE__));
require_once '../../configs/path.inc.php';
require_once 'include/ExPage.class.php';
require_once 'include/Logs.class.php';
require_once 'include/ExPDO.class.php';

class VoteListPage extends AdminPage{
	function __construct(){
		parent::__construct('vote_list');
	}

	function display(){
		// fix the page data here
/*		$table = $GLOBALS['table']['ejob_admin'];
		$sql = "SELECT id, username as name, CASE WHEN usertype = 1 THEN '超级管理员' ELSE '普通管理员' END as type FROM $table";
		$pdo = new JobsPDO();
		$stmt = $pdo->query($sql);
		$users = $stmt->fetchAll();
*/
		$votes = null;
		$this->smarty->assign('votes', $votes);
		$this->smarty->assign('adminroot', $this->adminroot.'/votes');
		parent::display();
	}
};

class VoteCreatePage extends AdminPage{
	function __construct(){
		parent::__construct('vote_create');
	}

	function display(){
		$this->smarty->assign('adminroot', $this->adminroot.'/votes');
		parent::display();
	}
};

