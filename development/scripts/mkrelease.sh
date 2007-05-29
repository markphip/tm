#!/bin/sh
curdir=`pwd`
cd `dirname $0`

RELEASE=2.0RC1
mkdir line_count_scripts
cp lc lc.bat lcp lcp.bat line_count_scripts
cp notice.html line_count_scripts
chmod 755 line_count_scripts/lc*
chmod 644 line_count_scripts/lc*.bat
chmod 644 line_count_scripts/notice.html
tar cfv line_count_scritps-${RELEASE}.tar line_count_scripts
zip line_count_scripts-${RELEASE}.zip line_count_scripts
rm -rf line_count_scripts
