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

    function  loginVerification(){
        $username =  $_POST['username'];
		$pass = $_POST['password'];
        $users =  $this->db->getUsers();
		foreach ($users as $id => $user){
			if($user->getUsername() == $username && password_verify($pass, $user->getRawPassword())){
				?><script>console.log('Here');</script><?php
			}
		}
        return $users;
    }
}

