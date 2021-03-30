<?php

class Model_Login extends Model
{
	//  private $data;
	public $dbconn;
	public $err;
	
	public function get_data()
	{	
		$this->dbconn=$GLOBALS['dbconn'];
		// Здесь мы просто сэмулируем реальные данные.
		// mysqli_close($this->dbconn);
		// return array


		if(isset($_POST['login']) && isset($_POST['password']))
		{
			$this->err[]=class_Authorization::check_login($_POST['login'],$this->dbconn,$this->err);
			$this->err[]=class_Authorization::check_pass($_POST['password'],$this->dbconn,$this->err);
			
			echo var_dump($this->err);;
			// return;
			$login = $_POST['login'];
			$password =$_POST['password'];
		
			
			if($login=="admin" && $password=="12345")
			{
				$data["login_status"] = "access_granted";
			
			}
			else
			{
				$data["login_status"] = "access_denied";
			}
		}
		else
		{
			$data["login_status"] = "";
		}
		return $data;
	}

}
