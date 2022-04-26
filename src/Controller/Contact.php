<?php

namespace bp\source\Controller;

class Contact extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessRequisiton(): void
    {
        echo $this->HtmlRenderer('contact.php', ['title'=>'Contact']);
    }
}
