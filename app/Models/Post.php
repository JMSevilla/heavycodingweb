<?php
spl_autoload_register('route_controller');
class post_Models extends postControllerData {
    public function postModelWall() { 
        $data = [
            'data1' => $_POST['data1'],
            'data2' => $_POST['data2'],
            'data3' => $_POST['data3'],
            'data4' => $_POST['data4'],
            'data5' => $_POST['data5'],
            'data6' => $_POST['data6'],
            'data7' => $_POST['data7'],
            'data8' => $_POST['data8']
        ];
        $this->postWall($data);
    }
}

function route_controller() { 
    include("../web/route.php");
    include_once $router['controller'];
}