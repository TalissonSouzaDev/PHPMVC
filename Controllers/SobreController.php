<?php
namespace Controllers;

class SobreController extends Controller
{
    public function index()
    {
        
        return $this->view->render('Sobre\sobre');
    }
}


?>