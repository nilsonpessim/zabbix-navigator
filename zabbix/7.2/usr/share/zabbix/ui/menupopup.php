<?php

// Author: Nilson Pessim <nilson@techlabs.net.br>
// Youtube Channel: https://youtube.com/techlabs94?sub_confirmation=1 

// Erro 500 ocasionado pela versão do PHP 8
if (PHP_VERSION_ID >= 80000){
    define('IMAGE_FORMAT_PNG', 'PNG');
}

// Inclui o arquivo de configuração
require_once "/etc/zabbix/web/zabbix.conf.php";

// Class menupopup
class menupopup {

    private $application, $hostID, $hostname, $database, $username, $password, $dbType, $youtube;

    // Construct
    public function __construct($get, $db)
    {
        $this->application = preg_replace('/[^a-zA-Z0-9_]/', '', $get['application'] ?? '*');
        $this->hostID      = preg_replace('/[^a-zA-Z0-9_]/', '', $get['hostID']      ?? '*');
        $this->hostname    = $db['SERVER'];
        $this->database    = $db['DATABASE'];
        $this->username    = $db['USER'];
        $this->password    = $db['PASSWORD'];
        $this->dbType      = $db['TYPE'];
        $this->youtube     = self::yt();
    }

    // Retorna as portas configuradas na Etiqueta
    private function getPort($PDO)
    {
        $application = strtolower($this->application);
        $tag = 'port_' . $application;
        $sql = "SELECT value FROM host_tag WHERE hostid = :hostid AND tag = :tag LIMIT 1";
        $stmt = $PDO->prepare($sql);
        $stmt->execute(['hostid' => $this->hostID, 'tag' => $tag]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Porta padrão por serviço
        $defaultPorts = [
            'winbox' => 8291,
            'web'    => 80,
            'ssh'    => 22,
            'telnet' => 23,
            'rdp'    => 3389,
            'vnc'    => 5900,
        ];

        return $result['value'] ?? $defaultPorts[$application] ?? null;
    }

    // Executa a Aplicação
    private function openApplication($url)
    {
        switch ($this->application) {

            case "Winbox":
                header("Location: winbox:{$url}");
                break;

            case "Web":
                header("Location: http://{$url}");
                break;

            case "SSH":
                header("Location: ssh:{$url}");
                break;

            case "Telnet":
                header("Location: telnet:{$url}");
                break;
            
            case "RDP":
                header("Location: rdp:{$url}");
                break;

            case "Traceroute":
                header("Location: winmtr:{$url}");
                break;

            case "VNC":
                header("Location: vnc:{$url}");
                break;

            case "Copy":
                require_once __DIR__ . "/plugins/copyAddress.php";
                break;

            default:
                header("Location: {$this->youtube}");
                break;
        }
    }

    private function typeDB() 
    {
        switch ($this->dbType) {
            case "MYSQL":
                return 'mysql';
                break;
                
            case "POSTGRESQL":
                return 'pgsql';
                break;
            
            default:
                return 'mysql';
                break;
        }
    }

    private function yt()
    {
        return "https://youtube.com/techlabs94?sub_confirmation=1";
    }

    // OpenHost
    public function openHost()
    {
        /* Verifica tipo do banco de dados */
        $typeDB = self::typeDB();

        /* Abre uma conexão PDO com o Banco de Dados */
        $PDO = new PDO("{$typeDB}:host={$this->hostname};dbname={$this->database}", $this->username, $this->password);

        /* Adiciona o array de retorno da Query de consulta, dentro da variável host */
        $host = $PDO->query("SELECT ip FROM interface WHERE hostid={$this->hostID} LIMIT 1")->fetch(PDO::FETCH_ASSOC);
        $port = self::getPort($PDO);

        if ($this->application === 'Copy') {
            self::openApplication($host['ip']);
            return;
        }

        /* Condição para validar se o host existe dentro do Banco de Dados */
        if (!$port || !$host['ip']) {
            header("Location: {$this->youtube}");
            exit;
        }

        /* Monta a URL */
        $url  = $host['ip'].":".$port;

        /* Checa o que estiver chegando na variavel $application para abrir o APP correto */
        self::openApplication($url);
    }

}

// Executa o Script
$menu = new menupopup($_GET, $DB);
$menu->openHost();