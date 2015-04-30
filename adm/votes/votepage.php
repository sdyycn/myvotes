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

class VotePage extends AdminPage{
	function __construct(){
		parent::__construct("vote.html");
	}
	
	function display(){
		$page = null;
		switch ($this->page)
		{
			case 'title':
				$page = new AdminPage("vote_title.html");
				break;
			case 'question':
				$page = new AdminPage("vote_question.html");
				break;
			case 'result':
				$page = new AdminPage("vote_result.html");
				break;
			default:
				$page = new AdminPage("vote.html");
				break;
		}
		$page->display();
	}
}

$page = new VotePage;
$page->run();
