<?php

function view($page, array $data = [])
{
    extract($data);
    require 'views/' . $page . '.php';
}
function redirect($location){
    header("Location: " . $location);
}
