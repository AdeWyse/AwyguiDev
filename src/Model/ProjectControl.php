<?php

namespace bp\source\Model;

use bp\source\Entities\Project;
use bp\source\Entities\Database;

class ProjectControl
{
    private $db ;

    /**
     * @param $db
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    public function createNewProject(){
        if($this->setProjectOnDb($this->getProjectFromForm())){
            return true;
        }else{
            return false;
        }
    }

    public function getProjectFromForm(){
        $title =  $_POST['title'];
        $content = $_POST['content'];
        $mainImage = $_POST['mainImage'];

        $project = new Project(null, $title, $content, $mainImage);
        return $project;
    }

    public function getProjectFromDb(){

    }

    public function getProjectsFromDb(){

    }

    public function setProjectOnDb(Project $project){

        if($this->db->setProject($project)){
            return true;
        }else{
            return false;
        }

    }
}
