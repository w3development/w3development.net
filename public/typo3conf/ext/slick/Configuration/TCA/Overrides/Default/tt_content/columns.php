<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$temporaryColumns = [
		'tx_slick_pages' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.tx_slick_pages',
				'config' => [
						'type' => 'group',
						'internal_type' => 'db',
						'allowed' => 'pages',
				],
		],
];

ExtensionManagementUtility::addTCAcolumns(
				'tt_content'
				, $temporaryColumns
);