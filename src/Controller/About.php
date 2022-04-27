<?php

namespace bp\source\Controller;

class About extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessRequisiton(): void
    {
        echo $this->HtmlRenderer('about.php', ['title'=>'About']);
    }
}
