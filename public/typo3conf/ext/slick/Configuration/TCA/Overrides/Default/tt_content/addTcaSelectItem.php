<?php

$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'CType' ][ 'config' ][ 'itemGroups' ][ 'slick' ] = 'Slick Slider';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content'
				, 'CType'
				, [
		'Slick Slider'
		, '--div--'
		, 'slick'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content'
				, 'CType'
				, [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.carousel.header'
		, 'slickcontent'
		, 'contains-slickdefault'
		, 'slick'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content'
				, 'CType'
				, [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.filecollection.header'
		, 'slickfilecollection'
		, 'contains-slickdefault'
		, 'slick'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content'
				, 'CType'
				, [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.gallery.header'
		, 'slickimage'
		, 'contains-slickdefault'
		, 'slick'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content', 'CType', [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.item.header'
		, 'slickitem'
		, 'contains-slickdefault'
		, 'slick'
				]
);
