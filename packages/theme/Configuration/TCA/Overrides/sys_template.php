<?php
defined('TYPO3') || die();

/*
 * Default TS include
 */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'theme',
    'Configuration/TypoScript/Main',
    'Theme'
);
