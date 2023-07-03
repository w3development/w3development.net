<?php

// Getting Website Application Context;
$currentApplicationContext = \TYPO3\CMS\Core\Core\Environment::getContext();

require_once (string)$currentApplicationContext .".php";

// Database settings
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["host"]     = $db_host;
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["dbname"]   = $db_name;
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["user"]     = $db_user;
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["password"] = $db_pass;
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["port"]     = $db_port;

$GLOBALS['TYPO3_CONF_VARS']["DB"]["installToolPassword"] = $install_pass;

// Debugging settings for development context
if($currentApplicationContext->isDevelopment()){
    $GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = true;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] = true;

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['sqlDebug']       = true;
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors']  = true;
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = true;

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = $developer_ip;
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['exceptionalErrors'] = '28674';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = 'file';
}


$GLOBALS['TYPO3_CONF_VARS']['FE']['cacheHash']['excludedParameters'][] = 'amp';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] .= ' [' . (string)$currentApplicationContext . ']';
