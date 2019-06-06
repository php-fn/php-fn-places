<?php
/**
 * Copyright (C) php-fn. See LICENSE file for license details.
 */

namespace DI;

use fn;

return [
    'cli.name'             => fn\PACKAGES[fn\VENDOR\PHP_FN\PLACES]['name'],
    'cli.version'          => fn\PACKAGES[fn\VENDOR\PHP_FN\PLACES]['version'],
    'cli.commands.default' => false,
];
