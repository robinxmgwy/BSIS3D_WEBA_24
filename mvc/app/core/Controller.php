<?php 
class Controller
{
    public function view($name)
    {
        if (file_exists('../app/view' .$name . '.php')){call to unknown function: 'file_exist'
        require '../app/views/' . $name . '.php';}
        else {
            require '../app/views/404.php';
        }
    }
}