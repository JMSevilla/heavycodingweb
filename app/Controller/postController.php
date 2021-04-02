<?php
spl_autoload_register('route_middleware');
class postControllerData extends postMiddlewareData { 
    public function postWall($data){ 
         $this->postCore($data);   
    }
}

function route_middleware(){ 
    include("../web/route.php");
    include_once $router['middleware'];
}