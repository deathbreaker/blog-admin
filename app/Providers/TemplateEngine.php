<?php

namespace Deathbreaker\Providers;

use Jenssegers\Blade\Blade;

class TemplateEngine{
    public static $blade;

    public static function getBlade(){
        self::$blade = new Blade('view', 'cache');
        return self::$blade;
    }

}