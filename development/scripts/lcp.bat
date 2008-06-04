@REM ******************************************************************************
@REM # Copyright (c) 2006, 2007 Wind River Systems, Inc.
@REM # All rights reserved. This program and the accompanying materials 
@REM # are made available under the terms of the Eclipse Public License v1.0 
@REM # which accompanies this distribution, and is available at 
@REM # http://www.eclipse.org/legal/epl-v10.html 
@REM # 
@REM # Contributors: 
@REM # Martin Oberhuber - initial API and implementation 
@REM #******************************************************************************
@ECHO OFF
REM #:#
REM #:# lcp.bat - Shellscript wrapper for Cygwin "lcp" to Count lines of code,
REM #:# data and documentation in a file submitted as a patch.
REM #:# See the "lcp" script for details.
REM #:#
REM #:# Usage:
REM #:#    lcp [-eh] {patchfile}
REM #:# Options:
REM #:#    -e  ..  include empty lines in count (like wc -l)
REM #:#    -h  ..  show help
REM #:# Examples:
REM #:#    lcp bug12345.patch.diff
REM #:#
SETLOCAL
SET MYDIR=%~dp0
SHIFT 1

IF "%ECL_SCRIPTS%" == "" SET ECL_SCRIPTS=%MYDIR%
IF NOT EXIST %ECL_SCRIPTS%\lcp SET ECL_SCRIPTS=.
IF NOT EXIST %ECL_SCRIPTS%\lcp SET ECL_SCRIPTS=C:\usr\bin\scripts
IF NOT EXIST %ECL_SCRIPTS%\lcp GOTO err_no_scripts

IF "%CYGWIN_BIN%" == "" SET CYGWIN_BIN=E:\Apps\Cygwin\bin
IF NOT EXIST %CYGWIN_BIN%\bash.exe SET CYGWIN_BIN=C:\Cygwin\bin
IF NOT EXIST %CYGWIN_BIN%\bash.exe GOTO cygwin_in_path
SET PATH=%CYGWIN_BIN%;%PATH%
REM Use bash.exe -x for debugging
REM %CYGWIN_BIN%\bash.exe -x %ECL_SCRIPTS%\lcp %*
%CYGWIN_BIN%\bash.exe %ECL_SCRIPTS%\lcp %*
GOTO end
:cygwin_in_path
bash -c echo 2> NUL:
IF ERRORLEVEL 1 GOTO err_no_cygwin
bash %ECL_SCRIPTS%\lcp %*
GOTO end

:err_no_cygwin
ECHO.
ECHO Error: Cygwin bash.exe not found.
ECHO Please edit lcp.bat to contain the directory of your cygwin installation.
GOTO end
:err_no_scripts
ECHO.
ECHO Error: lcp shellscript not found.
ECHO Please edit lcp.bat to contain the directory of your downloaded lcp script.
:end
ENDLOCAL
