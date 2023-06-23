#!/usr/bin/env php
<?php
error_reporting(E_ALL);

$root = dirname(dirname(dirname(dirname(__DIR__))));
$configFile = $root . '/typo3conf/Env.php';

if(file_exists($configFile)){
    require $configFile;
}else{
    die("Config file " . $configFile . " doesn't exists.\n");
}

$mysql_host     = $GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["host"];
$mysql_username = $GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["user"];
$mysql_password = $GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["password"];
$mysql_database = $GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["dbname"];
$mysql_dumpfile = $root . '/typo3conf/ext/theme/Dump/database.sql'; 

$cmd = "";

if ($argc > 1) {
    if ($argv[1] == 'show') {
      for ($i = 0; $i <= $argv[2]; $i++) {
        print "show passed\n";
      }
    }
    elseif( ($argv[1] == '-d') || ($argv[1] == '--dump') ) {
      $cmd = "mysqldump -h $mysql_host -u $mysql_username -p'$mysql_password' $mysql_database > $mysql_dumpfile";
      shell_exec($cmd);
    }
    elseif( ($argv[1] == '-r') || ($argv[1] == '--restore') ) {
      $cmd = "mysql -h $mysql_host -u $mysql_username -p'$mysql_password' $mysql_database < $mysql_dumpfile";
      echo $cmd;
      shell_exec($cmd);
    }
} else {
    echo "no argument passed\n";
}