@ECHO OFF
set string=%1

set string=%string:vnc:=%
for /f "delims=? " %%a in (%string%) do set host=%%a
start C:\zabbix\app\vnc64.exe %host%
EXIT