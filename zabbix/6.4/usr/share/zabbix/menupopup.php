<?php

/* Author: Nilson Pessim <nilson@techlabs.net.br>
 * Testado no Zabbix Versão 6.4
 * Youtube Channel: https://youtube.com/techlabs94?sub_confirmation=1 */

// Erro 500 ocasionado pela versão do PHP 8
if (PHP_VERSION_ID >= 80000){
    define('IMAGE_FORMAT_PNG', 'PNG');
}

/* Arquivo que contém as variáveis de ambiente do Zabbix */
require_once __DIR__ . "/conf/zabbix.conf.php";

/* Variáveis $_GET para receber os parámetros vindo da URL */
$application  = (isset($_GET['application'])) ? $_GET['application'] : '*';
$hostID       = (isset($_GET['hostID']))      ? $_GET['hostID']      : '*';

/* Variáveis $DB do arquivo de configurações do Zabbix */
$hostname = $DB['SERVER'];
$database = $DB['DATABASE'];
$username = $DB['USER'];
$password = $DB['PASSWORD'];

/* Abre uma conexão PDO com o Banco de Dados */
$PDO = new PDO("mysql:host={$hostname};dbname={$database}", $username, $password);

/* Adiciona o array de retorno da Query de consulta, dentro da variável host */
$host = $PDO->query("SELECT ip FROM interface WHERE hostid={$hostID} LIMIT 1")->fetch(PDO::FETCH_ASSOC);

/* Condição para validar se o host existe dentro do Banco de Dados */
if (!$host){header("Location: https://youtube.com/techlabs94?sub_confirmation=1");exit;}

/* Checa o que estiver chegando na variavel $application para abrir o APP correto */
switch ($application) {

    case "Winbox":
        header("Location: winbox:{$host['ip']}");
        break;

    case "Navigator":
        header("Location: http://{$host['ip']}");
        break;

    case "SSH":
        header("Location: ssh:{$host['ip']}");
        break;

    case "Telnet":
        header("Location: telnet:{$host['ip']}");
        break;

    case "Traceroute":
        header("Location: winmtr:{$host['ip']}");
        break;

    default:
        header("Location: https://youtube.com/techlabs94?sub_confirmation=1");
        break;
}

