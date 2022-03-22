<?php

namespace bp\source\Controller;

class Management extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessRequisiton(): void
    {
        echo $this->HtmlRenderer('management.php', ['title'=>'Management']);
    }
}


