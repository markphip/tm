#!/bin/sh
#*******************************************************************************
# Copyright (c) 2006, 2007 Wind River Systems, Inc.
# All rights reserved. This program and the accompanying materials 
# are made available under the terms of the Eclipse Public License v1.0 
# which accompanies this distribution, and is available at 
# http://www.eclipse.org/legal/epl-v10.html 
# 
# Contributors: 
# Martin Oberhuber - initial API and implementation 
#*******************************************************************************
curdir=`pwd`
cd `dirname $0`

RELEASE=2.0RC1
ARCHIVE_NAME=line_count_scripts

if [ -f ${ARCHIVE_NAME}-${RELEASE}.tar ]; then
  rm -f ${ARCHIVE_NAME}-${RELEASE}.tar
fi
if [ -f ${ARCHIVE_NAME}-${RELEASE}.zip ]; then
  rm -f ${ARCHIVE_NAME}-${RELEASE}.zip
fi
mkdir ${ARCHIVE_NAME}
chmod 755 ${ARCHIVE_NAME}
cp lc lc.bat lcp lcp.bat ${ARCHIVE_NAME}
cp notice.html ${ARCHIVE_NAME}
chmod 755 ${ARCHIVE_NAME}/lc*
chmod 644 ${ARCHIVE_NAME}/lc*.bat
chmod 644 ${ARCHIVE_NAME}/notice.html
tar cfv ${ARCHIVE_NAME}-${RELEASE}.tar ${ARCHIVE_NAME}
zip ${ARCHIVE_NAME}-${RELEASE}.zip ${ARCHIVE_NAME}/*
rm -rf ${ARCHIVE_NAME}
