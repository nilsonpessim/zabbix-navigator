@ECHO OFF
set string=%1
set user=%2
set pass=%3

set string=%string:ssh:=%
for /f "delims=? " %%a in (%string%) do set host=%%a
start C:\zabbix\app\putty64.exe -ssh %host% -l %user% -pw %pass%
EXIT