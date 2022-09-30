![Laboratorios tecnológicos](https://techlabs.net.br/wp-content/uploads/2021/09/logo_blog.png)

# :cohete: Navegador Zabbix - V1.2.3

* [Zabbix-files](#cyclone-zabbix-files)
* [Archivos de Windows](#computer-windows-files)
  * [Acceso Winbox](#winbox-acceso)
  * [Acceso SSH](#acceso-vía-ssh)
  * [Acceso Telnet](#acceso-vía-telnet)
* [Registrando Protocolos](#registrando-los-protocolos)
* [Registro de cambios](#golf-registro de cambios)
* [Apoya](#sparkling_heart-ayúdanos-a-crecer)

---

>[README - ESPAÑOL](readme/en/README.md)
>
>[README - ESPAÑOL](readme/es/README.md)

### La personalización añade nuevas opciones en el menú de acceso al equipo en la página de incidencias y también en el Mapa de Host.

## :zap: Apoyo

* :heavy_check_mark: Servidor Zabbix 6.2
* :heavy_check_mark: Servidor Zabbix 6.0 LTS
* :heavy_check_mark: Servidor Zabbix 5.0 LTS

## :zap: características
* :heavy_check_mark: Acceso a través de Winbox.
* :heavy_check_mark: Acceso vía SSH con Putty.
* :heavy_check_mark: Acceso vía Telnet con Putty.
* :heavy_check_mark: Traceroute a través de WinMTR.
* :heavy_check_mark: Acceso a través del navegador web estándar.

---

![Menú Mapa](assets/img.png)

## :ciclón: archivos Zabbix
* Antes de enviar los archivos al servidor, `es importante hacer una copia de seguridad del archivo menupopup.js`, presente en la carpeta /usr/share/zabbix/js de su servidor, ya que será reemplazado.
* Los archivos que se subirán al servidor son:
```
/usr/share/zabbix/menupopup.php -> Archivo de procesamiento para opciones personalizadas en Menú.
/usr/share/zabbix/js/menupopup.js -> Archivo que contiene el Menú personalizado.
```
* A partir de la versión 1.3.1 de Zabbix Navigator, confiamos en otros archivos .js para la configuración y el control del idioma.
```
/usr/share/zabbix/js/menuconfig.js -> Archivo de configuración.
/usr/share/zabbix/js/menulang.js -> Archivo de idioma.
```
* Enviar los archivos presentes en el directorio `zabbix/*/usr/share/zabbix/` al servidor Zabbix vía FTP, RESPETANDO LOS DIRECTORIOS. *(NO OLVIDES SELECCIONAR LA CARPETA PARA TU VERSIÓN DE ZABBIX)*.
* Reiniciar el servicio Zabbix:
```
servicio reinicio del servidor zabbix
```

## :ordenador: archivos de Windows
* Los archivos son necesarios y obligatorios para que usted:
  * Acceder al equipo MikroTik mediante Winbox.
  * Acceda a dispositivos a través de SSH usando PuTTY.
  * Acceso a equipos vía Telnet utilizando PuTTY.
  * Traceroute usando WinMTR.
* Copie el directorio `windows/zabbix` al C:/ de su computadora.

---
### Acceso a través de Winbox:
* Abra el archivo .reg `C:/zabbix/reg/Windows.reg` con el Bloc de notas. Cambie las credenciales a su nombre de usuario y contraseña predeterminados:
```
Donde admin/admin, cambie a su nombre de usuario/contraseña predeterminados:

@="C:\\\\zabbix\\scripts\\Winbox.bat \"%1\" administrador administrador"
```

---

### Acceso a través de SSH:
* Abra el archivo .reg `C:/zabbix/reg/Windows.reg` con el Bloc de notas. Cambie las credenciales a su nombre de usuario y contraseña predeterminados:
```
Donde admin/admin, cambie a su nombre de usuario/contraseña predeterminados:

@="C:\\\\zabbix\\scripts\\SSH.bat \"%1\" administrador administrador"
```

---

### Acceso vía Telnet:
* Abra el archivo .reg `C:/zabbix/reg/Windows.reg` con el Bloc de notas. Cambie las credenciales a su usuario predeterminado:
```
Donde administrador, cambie a su inicio de sesión predeterminado:

@="C:\\\\zabbix\\scripts\\Telnet.bat \"%1\" administrador"
```

---

### Registro de los Protocolos:
* Haga doble clic en el archivo `Windows.reg` y confirme los cambios. Este cambio de registro es necesario para que su computadora reconozca los tipos de acceso como protocolos.

![Registro de Windows](activos/img_2.png)

* Ahora su PC con Windows está lista para abrir dispositivos desde la página de incidentes y también desde el mapa de hosts.

> Al abrir un dispositivo a través del navegador, presione la tecla CONTROL.

---

### Archivo de configuración:
* En el archivo de configuración `js/menuconfig.js` puede:
  * Activar/desactivar el menú.
  * Opciones individuales de encendido/apagado.
  * Cambiar el idioma del menú.
```
let enableMenu = true;

let enableWinbox = true;
let enableNavigator = true;
let enableSSH = verdadero;
let enableTelnet = true;
let enableTraceroute = true;

let defaultLang = "Portugués";
```
---

### Versión del software:
* Winbox64: `3.37`
* WinMTR: `0.92`
* Masilla: `0.77`

## :golf: Registro de cambios:
* `Versión 1.3.1 - 30/09/2022`
  * Nuevas características:
    * Posibilidad de Habilitar/Deshabilitar el Menú.
    * Posibilidad de habilitar/deshabilitar elementos del menú individualmente.
    * Posibilidad de cambiar el idioma del Menú (Portugués, Inglés, Español).
  * Se modificó la estructura y la posición de los elementos del menú.
  * Mejoras importantes en la estructura del código del archivo `menupopup.js`.
  * La versión 1.3.1 de Zabbix Navigator es compatible con Zabbix 5.0 LTS, 6.0 LTS y 6.2.
---
* `Versión 1.2.2 - 29/09/2022`
  * Soporte agregado para Zabbix 6.0 LTS.
  * Soporte agregado para Zabbix 6.2.
---
* `Versión 1.1.1 - 27/09/2022`
  * Opción agregada para acceder vía SSH con PuTTY.
  * Opción agregada para acceso Telnet con PuTTY.
  * Opción agregada para rastrear ruta con WinMTR.
  * Los archivos se organizaron dentro de la carpeta C:/zabbix/.
  * El archivo .reg se modificó para agrupar todos los registros.
  * Los archivos de script .bat se han modificado.
  * Revisión y Mejoras en todos los archivos.
---
* `Versión 1.0.1 - 27/09/2022`
  * Mejoras y correcciones de BUGS en el archivo menupopup.php.
---
* `Versión 1.0.0 - 23/09/2022`
  * Soporte agregado para Zabbix 5.0 LTS.
  * Opción de acceso a equipos MikroTik a través de Winbox.
  * Opción de acceder al equipo a través del navegador web estándar.

## :sparkling_heart: Ayúdanos a Crecer
>Si este Material te fue útil, ayúdame suscribiéndote a mi canal de YouTube.
>
>(https://youtube.com/techlabs94?sub_confirmation=1)
>
>Esto me anima a traer más material como este y muchos otros de redes y tecnología.
>
>## ![Suscriptores del canal de YouTube](https://img.shields.io/youtube/channel/subscribers/UCWN6suTq5sZGqnSLos992Yw?style=social)


## :blue_book: Referencias y agradecimientos
> [Conferencia Zabbix - Jorge Fernando](https://pt.slideshare.net/JorgeFernandoMatsudo/zabbix-conference-2018v2-95430345)

## :iphone: Contacto e Información
[![Insignia de Whatsapp](https://img.shields.io/badge/-Whatsapp-4CA143?style=flat-square&labelColor=4CA143&logo=whatsapp&logoColor=white&link=https://api.whatsapp.com/send?phone= 5537999351046)](https://api.whatsapp.com/send?phone=5537999351046)