<?php
namespace App;

class Config {

    const CONTROLLER_NAMESPACE = 'App\\Controllers\\';

    public static function get($name)
    {
        return (defined('self::'.$name)) ? constant('self::'.$name) : null;
    }
}