<?php
spl_autoload_register('route_models');
if(isset($_POST['trigger']) == true) { 
    $callback = new post_Models();
    $callback->postModelWall();
}

function route_models() {
    include("../web/route.php");
    include_once $router['models'];
}