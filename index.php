

<?php

spl_autoload_register(function ($class) {
    include str_replace("\\", "/", $class) . '.php';
});

include 'routes.php';

$app = new Application();
$app->executar();

?>