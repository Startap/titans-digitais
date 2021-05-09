<?php

use Components\Router;

// Router::route('/', '\Components\Controllers\PageController@getHomepage');
// Router::route('/obrigado', '\Components\Controllers\PageController@getAfterSubscription');

Router::route('/', function() {
    $newLocation = ((rand(0, 150000) % 2) != 0) ? 'ojogo-mktdigital' : 'jogo-mktdigital';
    header("Location: /$newLocation", true);
});

Router::route('/jogo-mktdigital', '\Components\Controllers\PageController@marketingDigitalA');
Router::route('/ojogo-mktdigital', '\Components\Controllers\PageController@marketingDigitalB');
Router::route('/obrigado', '\Components\Controllers\PageController@obrigado');