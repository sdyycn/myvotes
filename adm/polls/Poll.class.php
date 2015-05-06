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

class PollListPage extends AdminPage{
	function __construct(){
		parent::__construct('poll_list');
	}

	function display(){
		$this->smarty->assign('adminroot', $this->adminroot.'/votes');
		parent::display();
	}
};

class PollCreatePage extends AdminPage{
	function __construct(){
		parent::__construct('poll_create');
	}

	function display(){
		$this->smarty->assign('adminroot', $this->adminroot.'/votes');
		parent::display();
	}
};

