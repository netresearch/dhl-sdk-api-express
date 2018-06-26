<?php
/**
 * See LICENSE.md for license details.
 */

// detect and include composer autoload file
$dir = __DIR__ . DIRECTORY_SEPARATOR;
$packagePath = $dir . '../vendor/autoload.php';
$projectPath = $dir . '../../../../vendor/autoload.php';

foreach ([$packagePath, $projectPath] as $filename) {
    if (file_exists($filename)) {
        include $filename;
        break;
    }
}
