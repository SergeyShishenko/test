<?php

class Model_SofiaUsers extends Model
{
	private $data;
	// protected $dbconn;
	
	public function get_data(){	
		return class_QuerySofia::getQS()->getSofiaUser();
	}

}
