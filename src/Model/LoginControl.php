<?php

namespace bp\source\Model;
use bp\source\Entities\User;
use bp\source\Entities\Database;

class LoginControl
{
    private $db ;

    /**
     * @param $db
     */
    public function __construct()
    {
       $this->db = new Database();
    }

    function  LoginVerification(){
        $username =  $_POST['username'];
		$pass = $_POST['password'];
        $users =  $this->db->getUsers();
		foreach ($users as $id => $user){
			if($user->getUsername() == $username && password_verify($pass, $user->getRawPassword())){
				$this->CreateLoggedSession($user);
                return true;
			}
		}
        return false;

    }

	function CreateLoggedSession($user){
		$_SESSION['username'] = $user->getUsername();
		$_SESSION['name'] = $user->getName();
		$_SESSION['permission'] = $user->getPermissions();
		$_SESSION['session'] = '1';
	}

	function ExcludeLoggedSession(){
		session_destroy();
	}
}

