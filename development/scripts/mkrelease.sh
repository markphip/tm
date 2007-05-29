#!/bin/sh
curdir=`pwd`
cd `dirname $0`

RELEASE=2.0RC1
ARCHIVE_NAME=line_count_scripts

mkdir ${ARCHIVE_NAME}
cp lc lc.bat lcp lcp.bat ${ARCHIVE_NAME}
cp notice.html ${ARCHIVE_NAME}
chmod 755 ${ARCHIVE_NAME}/lc*
chmod 644 ${ARCHIVE_NAME}/lc*.bat
chmod 644 ${ARCHIVE_NAME}/notice.html
tar cfv ${ARCHIVE_NAME}-${RELEASE}.tar ${ARCHIVE_NAME}
zip ${ARCHIVE_NAME}-${RELEASE}.zip ${ARCHIVE_NAME}
rm -rf ${ARCHIVE_NAME}
