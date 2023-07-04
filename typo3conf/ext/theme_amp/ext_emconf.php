<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "theme_amp".
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
    'title' => 'Theme AMP (Acelerated Mobile Pages)',
    'description' => 'TYPO3 AMP Themes configured and ready to use.',
    'category' => 'template',
    'version' => '0.0.1',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Elvis Tavasja',
    'author_email' => 'elvis@w3development.net',
    'author_company' => 'w3evelopment shpk',

    'constraints' => array (
        'depends' => array (
            'typo3' => '10-10.99.99',
            'fluid_styled_content' => '9.5.24',
        ),
    ),
    'autoload' => array (
        'psr-4' => array (
            'W3D\\AmpTheme\\' => 'Classes/',
        ),
    ),
);
