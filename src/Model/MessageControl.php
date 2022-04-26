<?php

namespace bp\source\Model;

use bp\source\Entities\Database;
use bp\source\Entities\Message;

class MessageControl
{

    private $db ;

    /**
     * @param $db
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    public function createNewMessage(){
        if($this->setMessageOnDb($this->getMessageFromForm())){
            return true;
        }else{
            return false;
        }
    }

    public function getMessageFromForm(){
        $name =  $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $content = $_POST['content'];

        $message = new Message(null, $name, $email, $subject, $content);
        return $message;
    }

    public function getMessageFromDb(){

    }

    public function getMessagesFromDb(){

    }

    public function setMessageOnDb(Message $message){

        if($this->db->setMessage($message)){
            return true;
        }else{
            return false;
        }

    }
}
