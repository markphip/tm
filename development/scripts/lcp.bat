@ECHO OFF
REM ******************************************************************************
REM # Copyright (c) 2006 Wind River Systems, Inc.
REM # All rights reserved. This program and the accompanying materials 
REM # are made available under the terms of the Eclipse Public License v1.0 
REM # which accompanies this distribution, and is available at 
REM # http://www.eclipse.org/legal/epl-v10.html 
REM # 
REM # Contributors: 
REM # Martin Oberhuber - initial API and implementation 
REM #******************************************************************************
REM #:#
REM #:# lcp.bat - Shellscript wrapper for Cygwin "lcp" to Count lines of code,
REM #:# data and documentation in a file submitted as a patch.
REM #:# See the "lcp" script for details.
REM #:#
REM #:# Usage:
REM #:#    lcp {patchfile}
REM #:#
IF "%CYGWIN_BIN%" == "" SET CYGWIN_BIN=E:\Apps\Cygwin\bin
IF "%ECL_SCRIPTS%" == "" SET ECL_SCRIPTS=F:\WS\rse.latest\www-tm-development\scripts
SHIFT 1
SET PATH=%CYGWIN_BIN%;%PATH%
%CYGWIN_BIN%\bash.exe -x %ECL_SCRIPTS%\lcp %*
