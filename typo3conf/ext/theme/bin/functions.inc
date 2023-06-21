set_terminal_colors(){
  BLACK=$(tput setaf 0)
  RED=$(tput setaf 1)
  GREEN=$(tput setaf 2)
  LIME_YELLOW=$(tput setaf 190)
  YELLOW=$(tput setaf 3)
  POWDER_BLUE=$(tput setaf 153)
  BLUE=$(tput setaf 4)
  MAGENTA=$(tput setaf 5)
  CYAN=$(tput setaf 6)
  WHITE=$(tput setaf 7)
  BRIGHT=$(tput bold)
  NORMAL=$(tput sgr0)
  BLINK=$(tput blink)
  REVERSE=$(tput smso)
  UNDERLINE=$(tput smul)
}

echo_inline(){
  echo -ne " $1"
}

echo_error(){
  echo "${RED}$1${NORMAL}"
}

echo_info(){
  echo "${GREEN}$1${NORMAL}"
}

echo_notice(){
  echo "${YELLOW}$1${NORMAL}"
}

cmd_end(){
  if [ $? -eq 0 ]; then
      echo_info "done."
  else
      echo_error "failed."
      exit 1
  fi
}

run_if_root(){
  if [[ $EUID -ne 0 ]]; then
     echo "[NOTICE] This script must be run as root!"
     exit 1
    else
      echo "Starting script execution: "
  fi
}
