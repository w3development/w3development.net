<?php

if (!defined('TYPO3_MODE'))
{
  die('Access denied.');
}


/* * ****************************************************************************
 * Register Icons
 * **************************************************************************** */

\Netzmacher\Slick\TCA\Ctrl\Icons::RegisterIcons();

/* * ****************************************************************************
 * ...
 * **************************************************************************** */

require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('slick') . 'Configuration/ExtLocalconf/Default/index.php' );
