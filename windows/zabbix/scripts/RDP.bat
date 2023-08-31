@ECHO OFF
set string=%1
set user=%2
set pass=%3

set string=%string:rdp:=%
for /f "delims=? " %%a in (%string%) do set host=%%a
start cmdkey /generic:"%host%" /user:"%user%" /pass:"%pass%"
start %windir%\system32\mstsc.exe /v:%host%
EXIT