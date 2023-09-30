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


call_user_func(function()
{
    ExtensionManagementUtility::addTypoScript(
      TYPO3_THEME,
      'setup',
      "@import 'EXT:" . TYPO3_THEME . "/Configuration/TypoScript/setup.typoscript'"
   );
});