#!/usr/bin/env php
<?php
/**
 * Copyright (C) php-fn. See LICENSE file for license details.
 */

call_user_func(static function() {
    $file = file_exists($file = __DIR__ . '/../../../autoload.php') ? $file :  __DIR__ . '/../vendor/autoload.php';
    /** @noinspection PhpIncludeInspection */
    exit(call_user_func(require $file, static function() {
        $cli = fn\cli(fn\PACKAGES[fn\VENDOR\PHP_FN\PLACES]['dir'] . 'config/di.php');
        return $cli->run();
    }));
});
