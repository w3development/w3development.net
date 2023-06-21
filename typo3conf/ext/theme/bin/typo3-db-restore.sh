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

prompt="Please select a file:"
options=( $(find data/ -maxdepth 1 -type f -print0 | sort -z | xargs -0 ) )

PS3="$prompt "
select opt in "${options[@]}" "Quit" ; do

    if (( REPLY == 1 + ${#options[@]} )) ; then
        exit

    elif (( REPLY > 0 && REPLY <= ${#options[@]} )) ; then
        echo  "You picked $opt which is file $REPLY"
        echo_inline "Restoring database \`${MYSQL_DB}\` to \`${DUMPFILE}\` ... "
        mysql --host=${MYSQL_HOST} --user=${MYSQL_USER} --password=${MYSQL_PASS} ${MYSQL_DB} < $opt
        cmd_end
      break

    else
        echo "Invalid option. Try another one."
    fi

done

## END
