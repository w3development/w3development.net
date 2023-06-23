#!/bin/bash

SETTINGS="$(pwd)/bin/.settings"
LIBRARY="$(pwd)/bin/functions.inc"
DATE=`date '+%Y-%m-%d_%Hh%M'`


if [ -f "$LIBRARY" ]; then
    source $LIBRARY
  else
    echo "Functions library missing. Execution stopped!"
    exit 1
fi

if [ -f "$SETTINGS" ]; then
  source $SETTINGS
else
  echo "Settings file not found."
  exit 1
fi

# Main function where the program starts

## BEGIN
run_if_root
set_terminal_colors

DUMPFILE="$(pwd)/${MYSQL_DUMP_DIR}/dump.sql"

echo_inline "Dumping database \`${MYSQL_DB}\` to \`${DUMPFILE}\` ... "
su -c "mysqldump --host=${MYSQL_HOST} --user=${MYSQL_USER} --password='${MYSQL_PASS}' ${MYSQL_DB} > ${DUMPFILE}"
cmd_end

## END
