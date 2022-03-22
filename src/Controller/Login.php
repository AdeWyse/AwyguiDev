<?php

namespace bp\source\Controller;

class Login extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessRequisiton(): void
    {
        echo $this->HtmlRenderer('login.php', ['title'=>'Login']);
    }
}


