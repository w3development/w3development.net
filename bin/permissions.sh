#!/bin/bash

LIBRARY="$(pwd)/bin/functions.inc"

if [ -f "$LIBRARY" ]; then
    source $LIBRARY
  else
    echo "Functions library missing. Execution stopped!"
    exit 1
fi

# Main function where the program starts
fix_typo3_permissions
