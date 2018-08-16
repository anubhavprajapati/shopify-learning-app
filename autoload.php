<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 13/8/18
 * Time: 1:50 PM
 */

spl_autoload_register(function ($class){

   include "classes/"."{$class}.php";

});