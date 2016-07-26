<?php

use Event;

Event::listen('privacy', 'App\Modules\Privacy\Controllers\Privacy@getPanel');
