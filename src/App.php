<?php
/**
 * Clase principal del proyecto
 *
 * @package    Buscador-IMDb\App
 * @author     Javier Glez
 * @since      0.1.0
 */

namespace App;

use App\Config;

class App 
{

    public function render($controllerName, $action)
    {
        $className = Config::get('CONTROLLER_NAMESPACE').ucfirst($controllerName).'Controller';
        $controller = new $className();

        print $controller->{$action}();
    }
}