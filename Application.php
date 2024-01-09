<?php
define('INCLUDE_PATH_FULL','http://localhost/projetomvcphp/Views/');
class Application {
    
    //Rota padrão
  public function executar()
  {
    Router::init();
    }
  }

?>