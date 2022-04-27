<?php

namespace bp\source\Controller;

class Post extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessRequisiton(): void
    {
        echo $this->HtmlRenderer('post.php', ['title'=>'Post']);
    }
}
