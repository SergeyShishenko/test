<?php

class Model_Login extends Model
{
	//  private $data;
	private $dbconn;
	
	public function get_data()
	{	
		$this->dbconn=$GLOBALS['dbconn'];
		// Здесь мы просто сэмулируем реальные данные.
		mysqli_close($this->dbconn);
		// return array


		if(isset($_POST['login']) && isset($_POST['password']))
		{
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
