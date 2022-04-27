<?php

namespace bp\source\Controller;

class Posts extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessRequisiton(): void
    {
        echo $this->HtmlRenderer('posts.php', ['title'=>'Posts']);
    }
}
