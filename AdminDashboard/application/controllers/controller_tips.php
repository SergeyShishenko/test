<?php

class Controller_Tips extends Controller
{
	

	function action_index()
	{
		
		$this->view->generate('tips_view.php', 'template_view.php');
	}
}
