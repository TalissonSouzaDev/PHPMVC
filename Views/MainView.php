<?php

namespace Views;

class MainView {

 private $header;
 private $footer;

  protected $title  = "";
    public function __construct($header = "header",$footer = "footer")
    {

        $this->header = $header;
        $this->footer = $footer;
    }
    public function render($filaName,$arr = [])
    {
        include('pages/templates/'.$this->header.'.php');
        include('pages/'.$filaName.'.php');
        include('pages/templates/'.$this->footer.'.php');
    }
}