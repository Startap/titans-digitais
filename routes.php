<?php

use Components\Router;
use Components\Application;

Router::route('/', '\Components\Controllers\PageController@getHomepage');
Router::route('/obrigado', '\Components\Controllers\PageController@getAfterSubscription');