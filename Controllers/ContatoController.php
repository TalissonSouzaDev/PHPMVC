<?php
namespace Controllers;

use Models\ContatoModel;

class ContatoController extends Controller
{
    public function index()
    {
       
        return $this->view->render('Contato\contato');
    }

    public function create()
    {
     
      
       
        return $this->view->render('Contato\contato_sucesso');
    }
}


?>