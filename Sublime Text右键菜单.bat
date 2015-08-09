@echo off 
color 0A
echo It's a piece of cake! By agenthun

set INSTALL_PATH=E:\Program Files (x86)\Sublime Text Build 3083

REG ADD "HKEY_CLASSES_ROOT\*\shell\Edit with Sublime Text" /v "Icon" /t REG_SZ /d "%INSTALL_PATH%\sublime_text.exe,0" /f
REG ADD "HKEY_CLASSES_ROOT\*\shell\Edit with Sublime Text\command" /v "" /t REG_SZ /d "%INSTALL_PATH%\sublime_text.exe %%1" /f

REG ADD "HKEY_CLASSES_ROOT\Directory\shell\Edit with Sublime Text" /v "Icon" /t REG_SZ /d "%INSTALL_PATH%\sublime_text.exe,0" /f
REG ADD "HKEY_CLASSES_ROOT\Directory\shell\Edit with Sublime Text\command" /v "" /t REG_SZ /d "%INSTALL_PATH%\sublime_text.exe %%1" /f

REG ADD "HKEY_CLASSES_ROOT\java_auto_file\shell\open\command" /v "" /t REG_SZ /d "%INSTALL_PATH%\sublime_text.exe %%1" /f

rem pause