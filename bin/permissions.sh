#!/bin/bash

LIBRARY="$(pwd)/bin/functions.inc"

if [ -f "$LIBRARY" ]; then
    source $LIBRARY
  else
    echo "Functions library missing. Execution stopped!"
    exit 1
fi

# Main function where the program starts

## BEGIN
run_if_root

set_terminal_colors

echo_inline "[1] Changing user group (www-data:www-data) ... "
chown www-data.www-data -R .
cmd_end

sleep 1
echo_inline "[2] Setting directory rights to 770 ... "
find . -type d -exec chmod 770 {} \;
cmd_end

sleep 1
echo_inline "[3] Setting file rights to 660 ... "
find . -type f -exec chmod 660 {} \;
cmd_end

sleep 1
echo_inline "[4] Making bin files executable ... "
find bin/ -type f -exec chmod 770 {} \;
cmd_end

## END
