<?php

use Helpers\Hooks;

Hooks::addHook('footer', 'App\Modules\Privacy\Controllers\Privacy@getFooter');

Router::get('privacy', 'App\Modules\Privacy\Controllers\Privacy@infoPage');
Router::get('accept_cookies', 'App\Modules\Privacy\Controllers\Privacy@cookiesAccept');
