<?php

use Jenssegers\Blade\Blade;

function redirectTo($url, $permanent = false) {
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}

Route::get('/', function()
{
    return 'I Am Badassprof from root URI';
});


Route::get('/article/create', function (){
    $blade = new Blade('view', 'cache');
    return $blade->make('new');
});

Route::post('/article/store', function () {
    return redirectTo('/');
});

