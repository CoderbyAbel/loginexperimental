<?php
if(!empty($name) && !empty($password)){
    echo "<script >location.href = 'validacao.php';</script>";
}
if((!empty($name) && empty($password)) || (empty($name) && !empty($password))){
    echo "<script >location.href = 'validacao.php';</script>";
}
?>