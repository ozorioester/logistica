<?php
  
function listaPedidos($cliente ='', $status = '')

{
$dsn = 'mysql:host=localhost;dbname=logistica;port=8889';
$user = "root";
$senha = "brasil";       

$pdo = new PDO($dsn,$user,$senha);

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

