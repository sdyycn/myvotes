<?php
/*
 * @author: maweiguo
 * @date: 2015/04/30
 */

chdir(dirname(__FILE__));
require_once '../../configs/path.inc.php';
if ($config['debug'] == 'false')
	require_once ADMIN_FOLDER.'/check.php';

require_once 'include/ExPage.class.php';
require_once 'Vote.class.php';

class VotePage extends AdminPage{
	function __construct(){
		parent::__construct();
	}
	
	function display(){
		$page = null;
		switch ($this->page)
		{	
			case 'create':
				$page = new VoteCreatePage;
				break;
			case 'list':
			default:
				$page = new VoteListPage;
				break;
		}
		$page->display();
	}
}

$page = new VotePage;
$page->run();
