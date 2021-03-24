<?php

class Controller_AdminDashboard extends Controller
{

	function action_index()
	{	
		$this->view->generate('admindashboard_view.php', 'template_view.php');
	}
}