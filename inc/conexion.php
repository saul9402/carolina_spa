<?php
try{
    $bd = new mysqli('localhost:3307', 'root', 'root', 'carolina');
} catch(Exception $e){
    echo $e->getMessage();
    exit;
}
/*
if($bd->ping()){
    echo 'Todo bien';
}else{
    echo $bd->connect_error;
}*/
?>