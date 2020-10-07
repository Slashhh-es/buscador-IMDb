<?php
namespace App;

class Config {

    const CONTROLLER_NAMESPACE = 'App\\Controllers\\';

    const OMDB_KEY = '6033f52';
    
    const IMG_DEFAULT = '/assets/img/no-image.png';

    public static function get($name)
    {
        return (defined('self::'.$name)) ? constant('self::'.$name) : null;
    }
}