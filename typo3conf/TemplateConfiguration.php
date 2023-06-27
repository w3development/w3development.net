<?php

// Getting Website Application Context;
$currentApplicationContext = \TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext();


// Database settings
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["host"] = "";
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["dbname"] = "";
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["user"] = "";
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["password"] = "";
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["port"] = 3306;

$GLOBALS['TYPO3_CONF_VARS']['FE']['cacheHash']['excludedParameters'][] = 'amp';
$GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = '0'; // Set to 1 for debugging

// BE Settings
$GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] = '0';  // Set to 1 for debugging

// System settings
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] .= ' (' . (string)$currentApplicationContext . ')';

$GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = '';  // Developer ip
$GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = '0'; // Set to 1 for debugging
$GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = 'file';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sqlDebug'] = '0';  // Set to 1 for debugging
$GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = '0'; // Set to 1 for debugging
$GLOBALS['TYPO3_CONF_VARS']['SYS']['exceptionalErrors'] = '28674';

// Image processing
$GLOBALS['TYPO3_CONF_VARS']['GFX']['processor_enabled'] = '1';
$GLOBALS['TYPO3_CONF_VARS']['GFX']['processor_path'] = '/usr/bin/';
$GLOBALS['TYPO3_CONF_VARS']['GFX']['processor_path_lzw'] = '/usr/bin/';
$GLOBALS['TYPO3_CONF_VARS']['GFX']['processor'] = 'GraphicsMagick';
$GLOBALS['TYPO3_CONF_VARS']['GFX']['processor_effects'] = '-1';
$GLOBALS['TYPO3_CONF_VARS']['GFX']['processor_allowTemporaryMasksAsPng'] = '';
$GLOBALS['TYPO3_CONF_VARS']['GFX']['processor_colorspace'] = 'RGB';
