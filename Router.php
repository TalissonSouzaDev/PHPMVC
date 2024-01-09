
<?php

class Router
{
    private static $routes = [];

    public static function route($path, $controller, $action)
    {
        self::$routes[$path] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

    public static function init()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : 'Home/index';
        $urlParts = explode('/', $url);

        $controllerName = ucfirst($urlParts[0] ?? 'Home') . 'Controller';
        $methodName = $urlParts[1] ?? 'index';
        $parameters = array_slice($urlParts, 2);

        // Verifique se a rota está registrada
        $route = self::$routes[$url] ?? null;

        if ($route) {
            $controllerName = $route['controller'];
            $methodName = $route['action'];
            $parameters = array_slice($urlParts, count($route) - 2);
        }

        $controllerClassName = "Controllers\\$controllerName";
        $controllerInstance = new $controllerClassName();

        if (method_exists($controllerInstance, $methodName)) {
            call_user_func_array([$controllerInstance, $methodName], $parameters);
        } else {
            die("Método não encontrado no controlador");
        }
    }
}
