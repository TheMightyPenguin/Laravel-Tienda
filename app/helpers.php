<?php

function getProperty($obj, $property, $default = null)
{
    return isset($obj)? $obj->{$property} : $default;
}

function storeOrUpdate($model, $value)
{
    $update = ['route' => ["admin.$model.update", $value], 'method' => 'patch'];
    $store = ['route' => ["admin.$model.store", $value], 'method' => 'post'];

    return 1;
}
