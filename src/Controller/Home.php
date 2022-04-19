<?php

namespace bp\source\Controller;

class Home extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessRequisiton(): void
    {
        echo $this->HtmlRenderer('home.php', ['title'=>'Home']);
    }
}


