<?php

class Model_Kit extends Model
{
	private $data;

	// protected $dbconn;
	
	public function get_data(){	
		return class_QuerySofia::getQS()->getObjOwnerFurnitur();
	}

}
