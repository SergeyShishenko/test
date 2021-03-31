<?php

class Model_Login extends Model
{
	//  private $data;
	private $dbconn;
	public $err;
	
	public function get_data()
	{	
		// $this->dbconn=$GLOBALS['dbconn']; 
		$this->dbconn=new mysqli(DBoutput::$dbHost, DBoutput::$mysql_user, DBoutput::$mysql_password, DBoutput::$my_db);; 
		// $this->dbconn=class_DataBase::getDB();; 
		// Здесь мы просто сэмулируем реальные данные.
		// mysqli_close($this->dbconn);
		// return array
		if (isset($_POST['generatesubmit'])){ 
			$this->err['generateCode']=array(class_SofiaUsers::generateCode(8));
			return $this->err;
		}

		if (isset($_POST['changepass'])){ 
			$this->err['changepass']=class_SofiaUsers::changepass($this->dbconn,$_POST['login'],$_POST['password']);
			return $this->err;
		}

		if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['newregister']))
		{
			// $this->err[]=class_SofiaUsers::check_login($_POST['login'],$this->dbconn);
			// $this->err[]=class_SofiaUsers::check_pass($_POST['password']);
			$this->err[]=class_SofiaUsers::newregister($this->dbconn,$_POST['login'],$_POST['password']);
		
		}
	
		return $this->err;
	}

}
?>