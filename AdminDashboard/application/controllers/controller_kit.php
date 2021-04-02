<?php

class Controller_Kit extends Controller
{
	function __construct()
	{
		$this->model = new Model_Kit();
		$this->view = new View();
	}

	function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('kit_view.php', 'template_view.php', $data);
	}
}
