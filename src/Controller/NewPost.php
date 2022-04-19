<?php

namespace bp\source\Controller;

class NewPost extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessRequisiton(): void
    {
        echo $this->HtmlRenderer('newPost.php', ['title'=>'New Post']);
    }
}


