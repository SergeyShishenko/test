<?php

class Model_SofiaUsers extends Model
{
	private $data;
	
	public function get_data()
	{	
	
		$dbconn=$GLOBALS['dbconn'];		
		$result = mysqli_query($dbconn,"SELECT * FROM `sofia_users`");	
		if (mysqli_num_rows($result) > 0) {//есть запись 			
			while ($row = mysqli_fetch_assoc($result)) {			
				$this->data[] = $row; 
			}

			return $this->data;
		}	
	}

}
