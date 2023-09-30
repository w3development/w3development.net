<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

define(THEME, 'theme');

/**
 * Adding the default user TSconfig
 */
ExtensionManagementUtility::addUserTSConfig(
    '@import "EXT:'. THEME . '/Configuration/TsConfig/User/options.tsconfig"'
);


call_user_func(function()
{
    ExtensionManagementUtility::addTypoScript(
      THEME,
      'setup',
      "@import 'EXT:$extensionKey/Configuration/TypoScript/setup.typoscript'"
   );
});