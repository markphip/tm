#!/bin/sh
#*******************************************************************************
# Copyright (c) 2008 Wind River Systems, Inc.
# All rights reserved. This program and the accompanying materials 
# are made available under the terms of the Eclipse Public License v1.0 
# which accompanies this distribution, and is available at 
# http://www.eclipse.org/legal/epl-v10.html 
# 
# Contributors: 
# Martin Oberhuber - initial API and implementation 
#*******************************************************************************
#:#
#:# Convert XML Projectplan to namespaced version.
#:# Creates backup in {infile}.{pid}.bak
#:#
#:# Usage:
#:#    planconv.sh {myplan.xml}
#:# Examples:
#:#    planconv.sh rtsc_plan_2008.xml

curdir=`pwd`

#Get parameters
planfile=$1
usage=0
if [ "$planfile" = "" ]; then
  usage=1
elif [ ! -f "$planfile" ]; then
  usage=1
fi
if [ $usage = 1 ]; then
  grep '^#:#' $0 | grep -v grep | sed -e 's,^#:#,,'
  exit 0
fi

#Convert into new file
newfile="${planfile}.$$"
while [ -f "${newfile}.xml" ]; do
  newfile="${newfile}_"
done
newfile="${newfile}.xml"

sed -e 's,<plan[^>]*>,<plan plan-format="1.0" xmlns="http://www.eclipse.org/project/plan" xmlns:html="http://www.w3.org/1999/xhtml" name="Project">,' \
    -e 's,<!\[CDATA\[,<html:div xmlns="http://www.w3.org/1999/xhtml">,g' \
    -e 's,\]\]>,</html:div>,g' \
    -e 's,<milestone\([^>]*\)>,<milestone\1><html:div>,g' \
    -e 's,</milestone>,</html:div></milestone>,g' \
    -e 's,<preamble>,<preamble><html:div>,g' \
    -e 's,</preamble>,</html:div></preamble>,g' \
    -e 's,<description>,<description><html:div>,g' \
    -e 's,</description>,</html:div></description>,g' \
    "${planfile}" > "${newfile}"

oldfile="${planfile}.$$"
while [ -f "${oldfile}.bak" ]; do
  oldfile="${oldfile}_"
done
oldfile="${oldfile}.bak"

mv "${planfile}" "${oldfile}"
sed -e 's,<html:div><html:div,<html:div,g' \
    -e 's,</html:div></html:div>,</html:div>,g' \
    "${newfile}" > "${planfile}"
rm "${newfile}"

