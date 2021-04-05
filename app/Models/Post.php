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
    public function signinModel() {
        $credentials = [
            'sign1' => $_POST['signin1'],
            'sign2' => $_POST['signin2']
        ];
        $this->signincontroller($credentials);
    }
    public function insertModel() {
        $datainsert = ['data1' => $_POST['data1']];
        $this->insertcontroller($datainsert);
    }
    public function deletionModel() { 
        $this->deletionController($_POST['id']);
    }
    public function updateselection(){ 
        $this->updateselectController($_POST['id']);
    }
    public function finalUpModels() {
        $data = [
          'data1' => $_POST['data1'],
          'id' => $_POST['id']
        ];
        $this->finalUpController($data);
    }
}

function route_controller() { 
    include("../web/route.php");
    include_once $router['controller'];
}