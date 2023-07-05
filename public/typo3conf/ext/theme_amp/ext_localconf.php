<?php

if (!defined('TYPO3_MODE')) die('Access denied.');

// Overriding Core Classes to Support AMP Tags
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\CMS\Core\Page\PageRenderer'] = array(
   'className' => 'W3Development\\AmpTheme\\Xclass\\PageRenderer'
);

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper'] = array(
   'className' => 'W3Development\\AmpTheme\\Xclass\\ImageViewHelper'
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper'] = array(
   'className' => 'W3Development\\AmpTheme\\Xclass\\MediaViewHelper'
);

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper'] = array(
   'className' => 'W3Development\\AmpTheme\\Xclass\\FormViewHelper'
);

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

// Exclude the component GET parameter from cHash calculation
$GLOBALS['TYPO3_CONF_VARS']['FE']['cacheHash']['excludedParameters'][] = 'amp';


?>
