<?php

$num_pedido = $_POST['num_pedido'];
$data = $_POST['data_pedido'];
$cliente = $_POST['cliente'];
$status = $_POST['status'];
$observacoes = $_POST['observacoes'];

if (trim($num_pedido))=='')
{
    $erro = "O numero do pedido é obrigatório!";
 
}

if (trim($data))=='')
{
    $erro = "A data está em um formato inválido!";
 
}

if (trim($cliente))=='')
{
    $erro = "O cliente é obrigatório!";

}

if ($erro)
{
    header("Location: ../cadastro_pedidos.php?msg=".$erro);
}else{
    
}    

?>