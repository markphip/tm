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
REM #:# lc.bat - Shellscript wrapper for Cygwin "lc" to count lines of code,
REM #:# data and documentation of all files below a list of directories.
REM #:# See the "lc" script for details.
REM #:#
REM #:# Usage:
REM #:#    lc [-fh] {directory,...}
REM #:#
IF "%CYGWIN_BIN%" == "" SET CYGWIN_BIN=E:\Apps\Cygwin\bin
IF "%ECL_SCRIPTS%" == "" SET ECL_SCRIPTS=F:\WS\rse.latest\www-tm-development\scripts
SHIFT 1
SET PATH=%CYGWIN_BIN%;%PATH%
%CYGWIN_BIN%\bash.exe -x %ECL_SCRIPTS%\lc %*

