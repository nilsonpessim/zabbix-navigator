<?php

/* Author: Nilson Pessim <nilson@techlabs.net.br>
 * Testado no Zabbix Versão 5.0 LTS
 * Youtube Channel: https://youtube.com/techlabs94?sub_confirmation=1 */

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

/* Verifica tipo do banco de dados */
switch ($DB['TYPE']) {
    case "MYSQL":
        $dbType = 'mysql';
        break;
        
    case "POSTGRESQL":
        $dbType = 'pgsql';
        break;
    
    default:
        echo "Olá! No momento há suporte apenas para os bancos de dados MySQL e PostgreSQL, <br> <br> Entre em contato pelo WhatsApp: +5537999351046 - Nilson Pessim, para mais informações, ou verifique se há uma versão mais recente da ferramenta em https://github.com/nilsonpessim/zabbix-navigator";
        exit;
        break;
}

/* Abre uma conexão PDO com o Banco de Dados */
$PDO = new PDO("{$dbType}:host={$hostname};dbname={$database}", $username, $password);

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

    case "RDP":
        header("Location: rdp:{$host['ip']}");
        break;

    case "Traceroute":
        header("Location: winmtr:{$host['ip']}");
        break;

    case "VNC":
        header("Location: vnc:{$host['ip']}");
        break;

    case "Copy":
        require_once __DIR__ . "/plugins/copyAddress.php";
        break;

    default:
        header("Location: https://youtube.com/techlabs94?sub_confirmation=1");
        break;
}

