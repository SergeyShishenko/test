<?php

class Model_Login extends Model
{
	//  private $data;
	protected $dbconn;
	public $err;
	
	public function get_data()
	{		

		if(isset($_POST['login'])){
			$login=mysqli_real_escape_string($this->dbconn, $_POST['login']);
		}
		if(isset($_POST['password'])){
			$password=mysqli_real_escape_string($this->dbconn, $_POST['password']);
		}
		
	
		if (isset($_POST['deluser'])){ 
			$this->err['deluser']=class_SofiaUsers::deluser($this->dbconn,$login);
			return $this->err;
		}
		if (isset($_POST['generatesubmit'])){ 
			$this->err['generateCode']=array(class_SofiaUsers::generateCode(8));
			return $this->err;
		}

		if (isset($_POST['changepass'])){ 
			$this->err['changepass']=class_SofiaUsers::changepass($this->dbconn,$login,$password);
			return $this->err;
		}

		if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['newregister']))
		{
			
			$this->err[]=class_SofiaUsers::newregister($this->dbconn,$login,$password);
		
		}
	
		return $this->err;
	}

}
?>