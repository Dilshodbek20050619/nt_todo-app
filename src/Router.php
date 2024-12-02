<?php

class Router
{
    public $currentRouter;

    public function __construct()
    {
        $this->currentRouter = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    }
    public function post($router, $callback)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($router == $this->currentRouter) {
                $callback();
                exit();
            }
        }
    }


    public function get($router, $callback)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $resourseId=$this->getResource();
            $router=str_replace('{id}', $resourseId, $router);
            if ($router == $this->currentRouter) {
                $callback($resourseId);
            }
        }
    }


    public function getResource(){
        if (isset(explode("/", $this->currentRouter)[2])){
            $resourceId = (int)explode("/", $this->currentRouter)[2];
            return $resourceId?$resourceId:false;
        }
        return false;
    }
}