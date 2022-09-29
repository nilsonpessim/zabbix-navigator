![TechLabs](https://techlabs.net.br/wp-content/uploads/2021/09/logo_blog.png)

# :rocket: Zabbix Navigator - V1.2.2
### A customização adiciona novas opções no menu de acesso a equipamentos nas página de incidentes e também no Mapa de host.

## :zap: Suporte

* :heavy_check_mark: Zabbix Server 6.2
* :heavy_check_mark: Zabbix Server 6.0 LTS
* :heavy_check_mark: Zabbix Server 5.0 LTS

## :zap: Funcionalidades
* :heavy_check_mark: Acesso via Winbox.
* :heavy_check_mark: Acesso via SSH com Putty.
* :heavy_check_mark: Acesso via Telnet com Putty.
* :heavy_check_mark: Traceroute via WinMTR.
* :heavy_check_mark: Acesso via Navegador Web Padrão.

---

![Menu Mapa](assets/img.png)

## :cyclone: Arquivos do Zabbix
* Antes de enviar os arquivos para o servidor, `é importante realizar o backup do arquivo menupopup.js`, presente na pasta /usr/share/zabbix/js do seu servidor, pois o mesmo será substituído.
* Os arquivos que serão enviados para o servidor são:
```
/usr/share/zabbix/menupopup.php   -> Arquivo de processamento das opções customizadas no Menu.
/usr/share/zabbix/js/menupopup.js -> Arquivo contendo o Menu customizado.
```
* Envie os arquivos `menupopup.php` e `menupopup.js` presentes no diretório `zbx_*` para o servidor Zabbix via FTP, respeitando os diretórios. *(Selecione a pasta conforme a versão do seu Zabbix)*.
* Reinicie o serviço do Zabbix:
```
service zabbix-server restart
```

## :computer: Arquivos do Windows
* Os arquivos são necessários e obrigatórios para que você consiga:
  * Acessar equipamentos MikroTik utilizando o Winbox.
  * Acessar equipamentos via SSH utilizando o PuTTY.
  * Acessar equipamentos via Telnet utilizando o PuTTY.
  * Traceroute utilizando o WinMTR.
* Copie o diretório `windows/zabbix` para o C:/ do seu computador.

### Acesso via Winbox:
* Abra o arquivo .reg `C:/zabbix/reg/Windows.reg` com o bloco de notas. Altere as credenciais para o seu usuário e senha padrão:
```
Onde admin/admin, altere para o seu login/senha padrão:

@="C:\\\\zabbix\\scripts\\Winbox.bat \"%1\" admin admin"
```

### Acesso via SSH:
* Abra o arquivo .reg `C:/zabbix/reg/Windows.reg` com o bloco de notas. Altere as credenciais para o seu usuário e senha padrão:
```
Onde admin/admin, altere para o seu login/senha padrão:

@="C:\\\\zabbix\\scripts\\SSH.bat \"%1\" admin admin"
```

### Acesso via Telnet:
* Abra o arquivo .reg `C:/zabbix/reg/Windows.reg` com o bloco de notas. Altere as credenciais para o seu usuário padrão:
```
Onde admin, altere para o seu login padrão:

@="C:\\\\zabbix\\scripts\\Telnet.bat \"%1\" admin"
```

### Registrando os Protocolos:
* Dê um duplo clique no arquivo `Windows.reg`, e confirme as alterações. Esta alteração no registro é necessária para que seu computador reconheça o tipos de acesso como protocolos.

![Registro do Windows](assets/img_2.png)

* Agora seu PC Windows está pronto para abrir equipamentos pela página de incidentes e também pelo mapa de hosts.

> Quando abrir um equipamento via Navegador, clique com a tecla CONTROL pressionada.

### Versão dos Softwares:
* Winbox64: `3.37`
* WinMTR:   `0.92`
* PuTTY:    `0.77`

## :golf: Changelog:
* `Versão 1.2.2 - 29/09/2022`
  * Adicionado suporte para Zabbix 6.0 LTS.
  * Adicionado suporte para Zabbix 6.2.
---
* `Versão 1.1.1 - 27/09/2022` 
  * Adicionado Opção para acesso via SSH com o PuTTY.
  * Adicionado Opção para acesso via Telnet com o PuTTY.
  * Adicionado Opção para traceroute com o WinMTR.
  * Os arquivos foram organizados dentro da pasta C:/zabbix/.
  * O arquivo .reg foi reformulado para agrupar todos os registros.
  * Os arquivos de script .bat foram reformulados.
  * Revisão e Melhorias em todos os arquivos.
---
* `Versão 1.0.1 - 27/09/2022`
  * Melhorias e Correção de BUGS no arquivo menupopup.php.
---
* `Versão 1.0.0 - 23/09/2022`
  * Adicionado suporte para Zabbix 5.0 LTS.
  * Opção de acesso ao equipamento MikroTik via Winbox.
  * Opção de acesso ao equipamento via navegador Web Padrão.

## :sparkling_heart: Nos Ajude a Crescer
>Se este Material foi útil para você, ajude se inscrevendo no meu canal do YouTube.
>
>(https://youtube.com/techlabs94?sub_confirmation=1)
> 
>Isso me incentiva a trazer mais materiais como este e muitos outros de redes e tecnologia.
> 
>## ![YouTube Channel Subscribers](https://img.shields.io/youtube/channel/subscribers/UCWN6suTq5sZGqnSLos992Yw?style=social)


## :blue_book: Referências e Agradecimentos
> [Zabbix Conference - Jorge Fernando](https://pt.slideshare.net/JorgeFernandoMatsudo/zabbix-conference-2018v2-95430345)

## :iphone: Contato e Informações
[![Whatsapp Badge](https://img.shields.io/badge/-Whatsapp-4CA143?style=flat-square&labelColor=4CA143&logo=whatsapp&logoColor=white&link=https://api.whatsapp.com/send?phone=5537999351046)](https://api.whatsapp.com/send?phone=5537999351046)