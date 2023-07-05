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

    // Automatic NullBackend for all caches (it's a caching backend which forgets everything immediately)
    foreach ($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'] as $cacheName => $cacheConfiguration) {
        // $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$cacheName]['frontend'] = \TYPO3\CMS\Core\Cache\Backend\NullBackend::class;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$cacheName]['backend'] = \TYPO3\CMS\Core\Cache\Backend\NullBackend::class;
    }
}

$GLOBALS['TYPO3_CONF_VARS']['FE']['cacheHash']['excludedParameters'][] = 'amp';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] .= ' [' . (string)$currentApplicationContext . ']';

$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendFavicon'] = 'EXT:theme/Resources/Public/Images/Favicon/favicon.ico';
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo'] = 'EXT:theme/Resources/Public/Images/Logo/logo-backend.png';
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginBackgroundImage'] = 'EXT:theme/Resources/Public/Images/Backend/typo3-login-background.jpg';
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginFootnote'] = '@w3development';
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginHighlightColor'] = '#3a5a6b';
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'] = 'EXT:theme/Resources/Public/Images/Logo/w3development.png';
