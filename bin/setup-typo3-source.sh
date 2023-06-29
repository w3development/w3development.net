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

echo_inline "[1] Downloading typo3 source archive ... "
curl -L -o typo3_src.tgz https://get.typo3.org/9.5.31

echo_inline "[1] Extracting the typo3 source archive ... "
tar -zxvf typo3_src.tgz

echo_inline "[1] Creating a symbolic link to the archive ... "
ln -s ./typo3_src-9.5.31 typo3_src

cmd_end
