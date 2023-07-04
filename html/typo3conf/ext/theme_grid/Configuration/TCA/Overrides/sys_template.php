<?php
defined('TYPO3_MODE') || die();

/*
 * Default TS include
 */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'theme_grid',
    'Configuration/TypoScript',
    'Theme Grid'
);
