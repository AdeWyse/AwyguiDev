<?php

namespace bp\source\Controller;

class NewProject extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessRequisiton(): void
    {
        echo $this->HtmlRenderer('newProject.php', ['title'=>'New Project']);
    }
}


