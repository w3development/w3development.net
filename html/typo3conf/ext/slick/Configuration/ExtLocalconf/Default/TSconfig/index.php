<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

$pathToTsConfig = 'FILE:EXT:slick/Configuration/ExtLocalconf/Default/TSconfig/';

/* * ****************************************************************************
 * mod.wizards.newContentElement.wizardItems
 * **************************************************************************** */

$addPageTsConfig = '<INCLUDE_TYPOSCRIPT: source="' . $pathToTsConfig . 'mod.wizards.newContentElement.wizardItems.slick.ts">';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( $addPageTsConfig );
