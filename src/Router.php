<?php

class Router
{
public $currentRouter;
public function __construct(){
    $this->currentRouter = parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH);

}
public function get($router,$callback){
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if($router == $this->currentRouter){
            $callback();
        }
    }
}
public function post($router,$callback){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($router == $this->currentRouter){
            $callback();
        }
    }
}
}