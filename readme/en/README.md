![TechLabs](https://techlabs.net.br/wp-content/uploads/2021/09/logo_blog.png)

# :rocket: Zabbix Navigator - V1.2.3

* [Zabbix-files](#cyclone-zabbix-files)
* [Windows Files](#computer-windows-files)
  * [Winbox access](#winbox-access)
  * [SSH Access](#access-via-ssh)
  * [Telnet access](#access-via-telnet)
* [Registering Protocols](#registering-the-protocols)
* [Changelog](#golf-changelog)
* [Give Your Support](#sparkling_heart-help-us-grow)

---

### Customization adds new options in the equipment access menu on the incidents page and also in the Host Map.

## :zap: Support

* :heavy_check_mark: Zabbix Server 6.2
* :heavy_check_mark: Zabbix Server 6.0 LTS
* :heavy_check_mark: Zabbix Server 5.0 LTS

## :zap: Features
* :heavy_check_mark: Access via Winbox.
* :heavy_check_mark: Access via SSH with Putty.
* :heavy_check_mark: Access via Telnet with Putty.
* :heavy_check_mark: Traceroute via WinMTR.
* :heavy_check_mark: Access via Standard Web Browser.

---

![Map Menu](../../assets/img.png)

## :cyclone: Zabbix files
* Before sending the files to the server, `it is important to backup the menupopup.js file`, present in the /usr/share/zabbix/js folder on your server, as it will be replaced.
* The files that will be uploaded to the server are:
```
/usr/share/zabbix/menupopup.php -> Processing file for custom options in Menu.
/usr/share/zabbix/js/menupopup.js -> File containing the customized Menu.
```
* As of version 1.3.1 of Zabbix Navigator, we rely on other .js files for settings and language control.
```
/usr/share/zabbix/js/menuconfig.js -> Configuration File.
/usr/share/zabbix/js/menulang.js -> Language File.
```
* Send the files present in the `zabbix/*/usr/share/zabbix/` directory to the Zabbix server via FTP, RESPECTING THE DIRECTORIES. *(DO NOT FORGET TO SELECT THE FOLDER FOR YOUR VERSION OF ZABBIX)*.
* Restart Zabbix service:
```
service zabbix-server restart
```

## :computer: Windows files
* The files are necessary and mandatory for you to:
  * Access MikroTik equipment using Winbox.
  * Access devices via SSH using PuTTY.
  * Access equipment via Telnet using PuTTY.
  * Traceroute using WinMTR.
* Copy the `windows/zabbix` directory to the C:/ of your computer.

---
### Access via Winbox:
* Open the .reg file `C:/zabbix/reg/Windows.reg` with Notepad. Change credentials to your default username and password:
```
Where admin/admin, change to your default login/password:

@="C:\\\\zabbix\\scripts\\Winbox.bat \"%1\" admin admin"
```

---

### Access via SSH:
* Open the .reg file `C:/zabbix/reg/Windows.reg` with Notepad. Change credentials to your default username and password:
```
Where admin/admin, change to your default login/password:

@="C:\\\\zabbix\\scripts\\SSH.bat \"%1\" admin admin"
```

---

### Access via Telnet:
* Open the .reg file `C:/zabbix/reg/Windows.reg` with Notepad. Change credentials to your default user:
```
Where admin, change to your default login:

@="C:\\\\zabbix\\scripts\\Telnet.bat \"%1\" admin"
```

---

### Registering the Protocols:
* Double-click the `Windows.reg` file, and confirm the changes. This registry change is necessary for your computer to recognize access types as protocols.

![Windows Registry](assets/img_2.png)

* Now your Windows PC is ready to open devices from the incidents page and also from the hosts map.

> When opening a device via the Browser, press the CONTROL key.

---

### Configuration File:
* In the Settings file `js/menuconfig.js` You can:
  * On/Off the Menu.
  * On/Off individual options.
  * Change Menu language.
```
let enableMenu = true;

let enableWinbox = true;
let enableNavigator = true;
let enableSSH = true;
let enableTelnet = true;
let enableTraceroute = true;

let defaultLang = "Portuguese";
```
---

### Software Version:
* Winbox64: `3.37`
* WinMTR: `0.92`
* PuTTY: `0.77`

## :golf: Changelog:
* `Version 1.3.1 - 09/30/2022`
  * New features:
    * Possibility to Enable/Disable the Menu.
    * Possibility to Enable/Disable Menu items individually.
    * Possibility to change the language of the Menu (Portuguese, English, Spanish).
  * Reworked the structure and position of Menu items.
  * Major improvements to the code structure of the `menupopup.js` file.
  * Version 1.3.1 of Zabbix Navigator is supported by Zabbix 5.0 LTS, 6.0 LTS and 6.2.
---
* `Version 1.2.2 - 09/29/2022`
  * Added support for Zabbix 6.0 LTS.
  * Added support for Zabbix 6.2.
---
* `Version 1.1.1 - 09/27/2022`
  * Added Option to access via SSH with PuTTY.
  * Added Option for Telnet access with PuTTY.
  * Added Option to traceroute with WinMTR.
  * Files have been organized inside from the C:/zabbix/ folder.
  * The .reg file has been reworked to group all records.
  * The .bat script files have been reworked.
  * Review and Improvements on all files.
---
* `Version 1.0.1 - 09/27/2022`
  * Improvements and BUGS Fixes in the menupopup.php file.
---
* `Version 1.0.0 - 09/23/2022`
  * Added support for Zabbix 5.0 LTS.
  * Option to access MikroTik equipment via Winbox.
  * Option to access the equipment via Standard Web browser.

## :sparkling_heart: Help Us Grow
>If this Material was useful to you, please help by subscribing to my YouTube channel.
>
>(https://youtube.com/techlabs94?sub_confirmation=1)
>
>This encourages me to bring more material like this and many others from networks and technology.
>
>## ![YouTube Channel Subscribers](https://img.shields.io/youtube/channel/subscribers/UCWN6suTq5sZGqnSLos992Yw?style=social)


## :blue_book: References and Acknowledgments
> [Zabbix Conference - Jorge Fernando](https://pt.slideshare.net/JorgeFernandoMatsudo/zabbix-conference-2018v2-95430345)

## :iphone: Contact and Information
[![Whatsapp Badge](https://img.shields.io/badge/-Whatsapp-4CA143?style=flat-square&labelColor=4CA143&logo=whatsapp&logoColor=white&link=https://api.whatsapp.com/send?phone= 5537999351046)](https://api.whatsapp.com/send?phone=5537999351046)