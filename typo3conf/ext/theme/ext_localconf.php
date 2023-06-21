<?php

if (!defined('TYPO3_MODE')) die('Access denied.');

\FluidTYPO3\Flux\Core::registerProviderExtensionKey('W3Development.theme', 'Content');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('W3Development.theme', 'Page');


// Overriding Core Classes to Support AMP Tags
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\CMS\Core\Page\PageRenderer'] = array(
   'className' => 'W3Development\\Theme\\Xclass\\PageRenderer'
);

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper'] = array(
   'className' => 'W3Development\\Theme\\Xclass\\ImageViewHelper'
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper'] = array(
   'className' => 'W3Development\\Theme\\Xclass\\MediaViewHelper'
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper'] = array(
   'className' => 'W3Development\\Theme\\Xclass\\FormViewHelper'
);

// PageTSconfig all configurations
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:theme/Configuration/TSconfig/Page/TCEFORM.tsconfig">
');

$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['w3d'] = [
    'W3Development\Theme\ViewHelpers',
];

// Exclude the component GET parameter from cHash calculation
$GLOBALS['TYPO3_CONF_VARS']['FE']['cacheHash']['excludedParameters'][] = 'amp';


?>
