<?php

class Model_Kit extends Model
{
	private $data;

	protected $dbconn;
	
	public function get_data()
	{	
		$result = mysqli_query($this->dbconn,"SELECT * FROM `obj_owner_furnitur`");	
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
