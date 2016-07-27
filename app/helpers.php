<?php

function getProperty($obj, $property, $default = null)
{
    return isset($obj)? $obj->{$property} : $default;
}
