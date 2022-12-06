<?php
spl_autoload_register('al');

function al($className)
{
    $classPath = 'classes/' . $className . '.php';

    if (!file_exists($classPath)) {
        return false;
    }
    include_once($classPath);
}
