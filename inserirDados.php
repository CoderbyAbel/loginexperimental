<?php

class Data{


private $name;
private $password;

public function __construct($name, $password){
$this->name = $name;
$this->password = $password;
}

public function  validacao(){

if(($name == 'usuariopadrao') || ($password == 'M@rata123' )){
    session_start();
    $_SESSION["login"] = true;
}
else{
    $_SESSION["login"] = false;
}
session_destroy();

}


}

?>