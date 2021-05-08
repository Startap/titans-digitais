<?php

namespace Components;

/**
 * Router class it's a router script to deal with our
 * requests almost same way that Laravel does;
 *
 * We call Request::execute($uri) to execute some
 * function and, for now, it only works with GET requests.
 *
 * @package SimpleFramework
 * @author André Paul Grandsire
 * @version $Revision: 0.1 $
 */
class Router
{
    private static $availableRoutes = array();

    private function __clone() {}

    /**
     * Register routes into the $availableRoutes array. Each declared route
     * should be paired with a string pointing to a Controller method or
     * a closure function declared right within the routes.php file
     */
    public static function route($targetUri, $routeTarget)
    {
            $targetPattern = '/^' . str_replace('/', '\/', $targetUri) . '([\?].*)?$/';
            self::$availableRoutes[$targetPattern] = $routeTarget;
    }

    /**
     * Search for $requestedUri into the $availableRoutes router's array;
     *
     * Each iteration will check if the requested route matches any of array
     * and call function declared into routes.php file, pointing to
     * some method in its own Controller.
     */
    public function processUriRequested($requestedUri)
    {
        foreach (self::$availableRoutes as $routePattern => $routeTarget) {
            if (\preg_match($routePattern, $requestedUri, $params)) {
                if (is_string($routeTarget)) {
                    $this->checkAndCallControllerMethod($routeTarget);
                } else {
                    $this->callClosureMethod($routeTarget, $params);
                }
            }
        }
    }

    private function callClosureMethod($routeTarget, $params = null)
    {
        if (is_callable($routeTarget)) {
            array_shift($params);
            call_user_func_array($routeTarget, array_values($params));
        }
    }

    private function checkAndCallControllerMethod(String $routeTarget)
    {
        list($targetController, $targetMethod) = explode('@', $routeTarget);

        $controllerInstance = new $targetController();
        $controllerInstance->$targetMethod();
    }
}
