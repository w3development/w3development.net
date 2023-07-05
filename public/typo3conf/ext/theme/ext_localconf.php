<?php

if (!defined('TYPO3_MODE')) die('Access denied.');

/**
 * Adding the default backend layout TSconfig
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:theme/Configuration/TSConfig/BackendLayouts.tsconfig'"
);

/**
 * Adding the default page TSconfig
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:theme/Configuration/TSConfig/Page.tsconfig'"
);

/**
 * Adding the default user TSconfig
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '@import "EXT:theme/Configuration/TSConfig/User.tsconfig"'
);

$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['w3d'] = [
    'W3Development\Theme\ViewHelpers',
];

?>
