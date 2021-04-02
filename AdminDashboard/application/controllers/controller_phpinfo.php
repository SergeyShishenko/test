<?php

class Controller_PHPinfo extends Controller
{
	function __construct()
	{
		$this->model = new Model_PHPinfo();
		$this->view = new View();
	}

	function action_index()
	{	
		$data = $this->model->get_data();	
		$this->view->generate('phpinfo_view.php', 'template_view.php',$data);
	}
}