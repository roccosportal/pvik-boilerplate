<?php

namespace MyProject\Controllers;

class HelloWorld extends \Pvik\Web\Controller {
    public function indexAction(){
        
        $this->executeView();
    }
}