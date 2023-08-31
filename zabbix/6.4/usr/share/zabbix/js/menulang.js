let menuLanguage = [
    {
        name : "Portugues",
        winbox : "Abrir com Winbox",
        navigator : "Abrir com Navegador",
        ssh : "Abrir com SSH",
        telnet : "Abrir com Telnet",
        rdp : "Abrir com RDP",
        traceroute : "Abrir com Traceroute",
        vnc : "Abrir com VNC Viewer",
        copy : "Copiar IP do Equipamento",
    },
    {
        name : "English",
        winbox : "Open with Winbox",
        navigator : "Open with Browser",
        ssh : "Open with SSH",
        telnet : "Open with Telnet",
        rdp : "Open with RDP",
        traceroute : "Open with Traceroute",
        vnc : "Open with VNC Viewer",
        copy : "Copy equipment IP",
    },
    {
        name : "Espanol",
        winbox : "Abrir con Winbox",
        navigator : "Abrir con Navegador",
        ssh : "Abrir con SSH",
        telnet : "Abrir con Telnet",
        rdp : "Abrir con RDP",
        traceroute : "Abrir con Traceroute",
        vnc : "Abrir con VNC Viewer",
        copy : "Copiar IP del dispositivo",
    },
];

for (i = 0; i < menuLanguage.length; i++){

    if(menuLanguage.find(item => item.name === defaultLang) === undefined){defaultLang = "Portugues"}

    if (menuLanguage[i].name == defaultLang){
        textWinbox     = menuLanguage[i].winbox;
        textNavigator  = menuLanguage[i].navigator;
        textSSH        = menuLanguage[i].ssh;
        textTelnet     = menuLanguage[i].telnet;
        textRDP        = menuLanguage[i].rdp;
        textTraceroute = menuLanguage[i].traceroute;
        textVNC        = menuLanguage[i].vnc;
        textCopy       = menuLanguage[i].copy;
    }
}