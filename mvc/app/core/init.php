<?php 

require 'functions.php';
require 'Database.php';
require 'Controller.php';
require 'Model.php';
require 'App.php';

spl_autoload_register(function ($classname) {

    require '../app/models/' . $class_name . '.php';
});