<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

define('TYPO3_THEME', 'theme');

/**
 * Adding the default user TSconfig
 */
ExtensionManagementUtility::addUserTSConfig(
    '@import "EXT:'. TYPO3_THEME . '/Configuration/TsConfig/User/options.tsconfig"'
);


call_user_func(function() {
    ExtensionManagementUtility::addTypoScriptSetup(
      "@import 'EXT:" . TYPO3_THEME . "/Configuration/TypoScript/setup.typoscript'"
   );
});

call_user_func(function() {
    ExtensionManagementUtility::addTypoScriptConstants(
      "@import 'EXT:" . TYPO3_THEME . "/Configuration/TypoScript/constants.typoscript'"
   );
});

call_user_func(function(){
     \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
         trim('
             module.tx_form {
                 settings {
                     yamlConfigurations {
                         100 = EXT:theme/Configuration/Form/Setup.yaml
                     }
                 }
             }
         ')
     );
});