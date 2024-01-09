<?php
namespace Controllers;

use Views\MainView;

class Controller
{
    protected $view;
    protected $model;

    public function __construct()
    {
        $this->view = New MainView();
        
    }
    public function executar()
    {
        echo "<h1>Pagina Home</h1>";
    }
}


?>