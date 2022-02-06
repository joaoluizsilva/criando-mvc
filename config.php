<?php
require "environment.php";

$config = array();
/**
 * o if vai verifica o ENVIRONMENT se ele esta com Dev ou Production
 * para aplicar as configurações corretas. A configuração de produção deve conter as 
 * configurações da HOSPEDAGEM
 */

if (ENVIRONMENT == 'development'){
    define("BASE_URL","http://localhost/criando-mvc/");
    $config['dbname']='estrutura-mvc';
    $config['host']='localhost';
    $config['dbuser']='root';
    $config['dbpassword']='';

}else{
    define("BASE_URL","http://meusite.com.br/");
    $config['dbname']='';
    $config['host']='';
    $config['dbuser']='';
    $config['dbpassword']='';
}
global $pdo;
try {
    $pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpassword']);

} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}