<?php

namespace bp\source\Controller;

class ControllerHtml 
{
    public function HtmlRenderer(string $pathTemplate, array $data){
        extract($data);
        require __DIR__.'/../../view/'.$pathTemplate;
        //return $html;
    }
}
