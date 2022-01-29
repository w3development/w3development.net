<?php

// Getting Website Application Context;
$currentApplicationContext = \TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext();


// Database settings
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["host"] = "127.0.0.1";
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["dbname"] = "c0db_w3development";
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["user"] = "c0db_w3develop";
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["password"] = "kTrStde3D_TL3";

// Local Development
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["dbname"] = "w3development_typo3";
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["user"] = "root";
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["password"] = "toor";
$GLOBALS['TYPO3_CONF_VARS']["DB"]["Connections"]["Default"]["port"] = 3306;

$GLOBALS['TYPO3_CONF_VARS']['FE']['cacheHash']['excludedParameters'][] = 'amp';
$GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = '0'; // Set to 1 for debugging

// BE Settings
// $GLOBALS['TYPO3_CONF_VARS']['BE']['installToolPassword'] = '$argon2i$v=19$m=65536,t=16,p=1$MU5qN1Z0aDMxeU9XQzBDbQ$ghDORZLvNzjdtWDRjGIx5YJncj4REZtrsoulQ4OU1Dk';
$GLOBALS['TYPO3_CONF_VARS']['BE']['installToolPassword'] = '$argon2i$v=19$m=65536,t=16,p=1$MW5OejY3cXg1SmpRNnZJcw$eCecCqhQh82h/w/kElINtAw3OALDVhoEpkl4A4xw5Bw';
$GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] = '0';  // Set to 1 for debugging

// System settings
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] .= ' (' . (string)$currentApplicationContext . ')';

$GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = '185.62.174.131';  // Developer ip
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
