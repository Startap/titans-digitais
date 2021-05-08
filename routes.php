<?php

use Components\Router;

// Router::route('/', '\Components\Controllers\PageController@getHomepage');
// Router::route('/obrigado', '\Components\Controllers\PageController@getAfterSubscription');

Router::route('/', function() {
    $newLocation = ((rand(0, 150000) % 2) != 0) ? 'jogomktdigital' : 'jogomkt';
    header("Location: /$newLocation", true);
});

Router::route('/jogomkt', '\Components\Controllers\PageController@marketingDigitalA');
Router::route('/jogomktdigital', '\Components\Controllers\PageController@marketingDigitalB');
Router::route('/obrigado', '\Components\Controllers\PageController@obrigado');