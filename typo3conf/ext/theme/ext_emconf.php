<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "w3d_theme".
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'W3Development Theme',
	'description' => 'TYPO3 Themes configured and ready to use.',
	'category' => 'template',
	'version' => '0.0.2',
	'state' => 'stable',
	'clearcacheonload' => 1,
	'author' => 'Elvis Tavasja',
	'author_email' => 'elvis@w3development.net',
	'author_company' => 'W3Development SHPK',

	'constraints' => array (
		'depends' => array (
			'typo3' => '9-9.99.99',
            'fluid_styled_content' => '9.5.24',
            'flux' => '9.4.2',
            'vhs' => '6.0.5',
		),
	),

	'autoload' => array (
		'psr-4' => array (
			'W3Development\\Theme\\' => 'Classes/',
		),
	),
	
);
