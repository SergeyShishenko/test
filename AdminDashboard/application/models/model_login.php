<?php

class Model_Login extends Model
{
	//  private $data;
	protected $dbconn;
	public $err;
	
	public function get_data()
	{		
		// class_SofiaUsers::USER
		// class_SofiaUsers::USPASS
		// class_SofiaUsers::USDEL
		// class_SofiaUsers::USGENSUB
		// class_SofiaUsers::USCHPASS
		// class_SofiaUsers::USNREG
		if(isset($_POST[class_SofiaUsers::USER])){
			$login=mysqli_real_escape_string($this->dbconn, $_POST[class_SofiaUsers::USER]);
		}
		if(isset($_POST[class_SofiaUsers::USPASS])){
			$password=mysqli_real_escape_string($this->dbconn, $_POST[class_SofiaUsers::USPASS]);
		}
		
	
		if (isset($_POST[class_SofiaUsers::USDEL])){ 
			if(class_SofiaUsers::check_dellogin($login)){				
				$this->err[class_SofiaUsers::USDEL]=array("Нельзя удалить");
				return $this->err;
			}else{
				// $this->err[class_SofiaUsers::USDEL]=array("Удалить");
				// return $this->err;
				$this->err[class_SofiaUsers::USDEL]=class_SofiaUsers::deluser($this->dbconn,$login);
				return $this->err;
			}
			
		}
		if (isset($_POST[class_SofiaUsers::USGENSUB])){ 
			$this->err['generateCode']=array(class_SofiaUsers::generateCode(8));
			return $this->err;
		}

		if (isset($_POST[class_SofiaUsers::USCHPASS])){ 
			$this->err[class_SofiaUsers::USCHPASS]=class_SofiaUsers::changepass($this->dbconn,$login,$password);
			return $this->err;
		}

		if(isset($_POST[class_SofiaUsers::USER]) && isset($_POST[class_SofiaUsers::USPASS]) && isset($_POST[class_SofiaUsers::USNREG]))
		{
			
			$this->err[]=class_SofiaUsers::newregister($this->dbconn,$login,$password);
		
		}
	
		return $this->err;
	}

}
?>