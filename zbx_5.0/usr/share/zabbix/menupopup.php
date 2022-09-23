<?php

/*
 *
 */

/* Arquivo que contém as variáveis de ambiente do Zabbix */
require_once __DIR__ . "/conf/zabbix.conf.php";

/* Variáveis $_GET para receber os parámetros vindo da URL */
$appname  = $_GET["app"];
$hostid   = $_GET["hostid"];

/* Variáveis $DB do arquivo de configurações do Zabbix */
$hostname = $DB['SERVER'];
$database = $DB['DATABASE'];
$username = $DB['USER'];
$password = $DB['PASSWORD'];

/* Abre uma nova conexão PDO com o Banco de Dados */
$PDO = new PDO("mysql:host={$hostname};dbname={$database}", $username, $password);

/* Adiciona o array de retorno da Query dentro da variável ipAddress */
$host = $PDO->query("SELECT ip FROM interface WHERE hostid={$hostid} LIMIT 1")->fetch(PDO::FETCH_ASSOC);

if (!$host){header("Location: https://youtube.com/techlabs94?sub_confirmation=1");exit;}

/* Checa o que estiver chegando na variavel $appname para abrir o APP correto */
switch ($appname) {
    case "winbox":
        header("Location: winbox:{$host['ip']}");
        break;
    case "navegador":
        header("Location: http://{$host['ip']}");
        break;
    default:
        header("Location: https://youtube.com/techlabs94?sub_confirmation=1");
        break;
}

