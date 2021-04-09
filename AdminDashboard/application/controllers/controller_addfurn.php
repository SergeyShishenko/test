<?php

class Controller_AddFurn extends Controller
{
	
	function action_index()
	{
		$this->view->generate('addfurn_view.php', 'template_view.php');
	}
}
