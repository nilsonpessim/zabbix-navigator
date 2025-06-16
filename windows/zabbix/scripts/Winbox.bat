@ECHO OFF
set string=%1
set user=%2
set pass=%3

set string=%string:winbox:=%
for /f "delims=? " %%a in (%string%) do set host=%%a
start C:\zabbix\app\Winbox64.exe %host% %user% %pass%
EXIT