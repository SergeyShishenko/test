<?php

class Controller_SofiaUsers extends Controller
{
	function __construct()
	{
		$this->model = new Model_SofiaUsers();
		$this->view = new View();
	}

	function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('sofiausers_view.php', 'template_view.php', $data);
	}
}
