<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry']['1588144983'] = [
    'nodeName' => 'sheetHelpPromptHelp',
    'priority' => 40,
    'class' => Netzmacher\Slick\Form\Element\SheetHelpPromptHelp::class,
];

/**
 * Page TSConfig
 */

require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'slick' ) . 'Configuration/ExtLocalconf/Default/TSconfig/index.php' );
