<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

/**
 * Adding the default user TSconfig
 */
ExtensionManagementUtility::addUserTSConfig(
    '@import "EXT:theme/Configuration/TsConfig/User/options.tsconfig"'
);