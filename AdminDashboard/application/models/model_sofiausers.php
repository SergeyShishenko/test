<?php

class Model_SofiaUsers extends Model
{
	private $data;
	protected $dbconn;
	
	public function get_data()
	{	
		$result = mysqli_query($this->dbconn,"SELECT * FROM `sofia_users`");	
		if (mysqli_num_rows($result) > 0) {//есть запись 			
			while ($row = mysqli_fetch_assoc($result)) {			
				$this->data[] = $row; 
			}
			mysqli_free_result($result);
			mysqli_close($this->dbconn);
			return $this->data;
		}	
	}

}
