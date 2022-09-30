let menuLanguage = [
    {
        name : "Portugues",
        winbox : "Abrir com Winbox",
        navigator : "Abrir com Navegador",
        ssh : "Abrir com SSH",
        telnet : "Abrir com Telnet",
        traceroute : "Abrir com Traceroute"
    },
    {
        name : "English",
        winbox : "Open with Winbox",
        navigator : "Open with Browser",
        ssh : "Open with SSH",
        telnet : "Open with Telnet",
        traceroute : "Open with Traceroute"
    },
    {
        name : "Espanol",
        winbox : "Abrir con Winbox",
        navigator : "Abrir con Navegador",
        ssh : "Abrir con SSH",
        telnet : "Abrir con Telnet",
        traceroute : "Abrir con Traceroute"
    },
];

for (i = 0; i < menuLanguage.length; i++){

    if(menuLanguage.find(item => item.name === defaultLang) === undefined){defaultLang = "Portugues"}

    if (menuLanguage[i].name == defaultLang){
        textWinbox     = menuLanguage[i].winbox;
        textNavigator  = menuLanguage[i].navigator;
        textSSH        = menuLanguage[i].ssh;
        textTelnet     = menuLanguage[i].telnet;
        textTraceroute = menuLanguage[i].traceroute;
    }
}