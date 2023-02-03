<?php
spl_autoload_register('classLoad');
function classLoad($class)
{
    $classTab = explode('\\', $class);
    require './' . $classTab[0] . '/' . $classTab[1] . '.php';
}