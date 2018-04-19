<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 4/9/2018
 * Time: 2:06 AM
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}