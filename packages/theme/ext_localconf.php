<?php

if (!defined('TYPO3')) die('Access denied.');

// $currentApplicationContext = \TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext();
// $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] .= ' (' . (string)$currentApplicationContext . ')';

/**
 * Adding the default backend layout TSconfig
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:theme/Configuration/TSconfig/Page/Mod/WebLayout/BackendLayouts.tsconfig">
');

/**
 * Adding the default page TSconfig
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:theme/Configuration/TSconfig/Page/TCEFORM.tsconfig">
');


/**
 * Adding the SHARED.TSconfig
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:theme/Configuration/TSconfig/Page/Mod/SHARED.tsconfig">
');

/**
 * Adding the default user TSconfig
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:theme/Configuration/TSconfig/User/options.tsconfig">'
);

// call_user_func(function () {
//     \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
//         trim('
//             plugin.tx_form.settings.yamlConfigurations {
//                 999 = EXT:theme/Configuration/Form/FormSetup.yaml
//             }

//             module.tx_form.settings.yamlConfigurations {
//                 999 = EXT:theme/Configuration/Form/FormSetup.yaml
//             }
//         ')
//     );
// });
?>
