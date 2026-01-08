<?php

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    $paths = [
        APP_ROOT . '/core/' . $class . '.php',
        APP_ROOT . '/controllers/' . $class . '.php',
        APP_ROOT . '/models/' . $class . '.php',
    ];
    foreach ($paths as $p) {
        if (file_exists($p)) { require_once $p; return; }
    }
});
