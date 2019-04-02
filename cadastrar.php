
<?php

include_once 'database/conn.php';
include_once 'model/query.php';
$conn = DBConnect();
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);

$query_usuario = DBInsert('cliente',"(name,telefone,cpf,email)","('$name','$telefone','$cpf','$email')");
if($query_usuario){
    DBClose($conn);
    echo true;
}else{
    echo false;
}
?>