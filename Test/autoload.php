<?php
/**
 * See LICENSE.md for license details.
 */

/**
 * Simple autoloader for Dhl Express source classes.
 * For the standalone package, use /vendor/autoload.php instead:
 * $ phpunit --configuration Test/ --bootstrap vendor/autoload.php
 */
$srcPath = __DIR__ . DIRECTORY_SEPARATOR . '..';
$includePath = get_include_path();

set_include_path($includePath . PATH_SEPARATOR . $srcPath);

spl_autoload_register(function ($className) {
    if (strpos($className, 'Dhl\Express') === 0) {
        $className = substr($className, 12);
        $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
        $className.= '.php';
        include $className;
    }
});
