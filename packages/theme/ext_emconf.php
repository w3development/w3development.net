<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "w3d_theme".
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
    'title' => 'Theme',
    'description' => 'TYPO3 Themes configured and ready to use.',
    'category' => 'template',
    'version' => '0.0.2',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Elvis Tavasja',
    'author_email' => 'elvis@w3development.net',
    'author_company' => 'w3development shpk',

    'constraints' => array (
        'depends' => array (
            'typo3' => '9-10'
        ),
    ),
    'autoload' => array (
        'psr-4' => array (
            'W3D\\Theme\\' => 'Classes/',
        ),
    ),
);
