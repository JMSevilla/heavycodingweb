<?php
spl_autoload_register('route_database');
class postMiddlewareData extends database { 
    public function postCore($data){
        if($_SERVER["REQUEST_METHOD"] == "POST") { 
            $registerQuery = "CALL sp_register(:fname, :lname, :gender, :address, :username, :password)";
            if($this->querystring($registerQuery)) { 
                $this->bind(":fname", $data['data1']);
                $this->bind(":lname", $data['data2']);
                if(empty($data['data7']) || $data['data7'] == "") { 
                    $this->bind(":gender", $data['data8']);
                }else { 
                    $this->bind(":gender", $data['data7']);
                }
                $this->bind(":address", $data['data3']);
                $this->bind(":username", $data['data4']);
                $this->bind(":password", password_hash($data['data5'], PASSWORD_DEFAULT));
                if($this->execution()) { 
                    echo json_encode(array("statusCode" => 200));
                }
            }
        }
    }
}

function route_database() { 
    include("../web/route.php");
    include_once $router['database'];
}