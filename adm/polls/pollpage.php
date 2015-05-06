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
require_once 'Poll.class.php';

class PollPage extends AdminPage{
	function __construct(){
		parent::__construct();
	}
	
	function display(){
		$page = null;
		switch ($this->page)
		{	
			case 'create':
				$page = new PollCreatePage;
				break;
			case 'list':
			default:
				$page = new PollListPage;
				break;
		}
		$page->display();
	}
}

$page = new PollPage;
$page->run();
