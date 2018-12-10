<?php

function conectar()
{
$dsn = 'mysql:host=localhost;dbname=logistica;port=8889';
$user = "root";
$senha = "brasil";       

$pdo = new PDO($dsn,$user,$senha);
return $pdo;    
}
  
function listaPedidos($cliente ='', $status = '')

{
    
    $pdo = conectar ();

    $filtro = "";

if ($cliente != '')
{
    $filtro = " WHERE cliente LIKE '$cliente%'";
}

if($status != '' AND $filtro != "" )
{
    $filtro .=  " AND status = '$status'";
}elseif ($status != '' AND $filtro == "") 
    {
    $filtro .= "WHERE status = '$status'";    
    } 

$sql = "SELECT * FROM pedidos $filtro ORDER BY data_atualizacao DESC";
echo $sql;


$res = $pdo->query($sql);
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
return $dados;
}


/**
 * Cadastra um novo pedido
 * @param type $numero
 * @param type $cliente
 * @param type $data
 * @param type $status
 */

function cadastrarPedido($numero, $cliente, $data, $status)
{
 $pdo = conectar();   
 $sql = "INSERT INTO 'pedidos'"
         . "('id', 'num_pedido', 'cliente', 'data_pedido',"
         . "VALUES"
         . "NULL, '$numero', '$cliente', '$data', '$status', NOW());";
 
 $pdo->exec($sql);
 
 return $total;
         
}