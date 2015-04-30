<?php
require __DIR__ . '/vendor/autoload.php';
function __autoload($class)
{
    if (false !== strpos($class, '\\')) {

        $classNameParts = explode('\\', $class);
        if ('app' == $classNameParts[0]) {
            unset($classNameParts[0]);
            $fileName = __DIR__ . '/' . implode('/', $classNameParts) . '.php';
            if (file_exists($fileName)) {
                require $fileName;
                return true;
            }
        }
    }

    return false;
}