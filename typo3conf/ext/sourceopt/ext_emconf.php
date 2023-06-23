<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "sourceopt".
 *
 * Auto generated 13-02-2021 00:35
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Source Optimization',
  'description' => 'Optimization of the final page: reformatting the (x)html output, removal of new lines, and quotes. Move development repository to https://github.com/lochmueller/sourceopt',
  'category' => 'fe',
  'version' => '3.0.0',
  'state' => 'stable',
  'author' => 'Dr. Ronald P. Steiner, Boris Nicolai, Tim Lochmueller',
  'author_email' => 'ronald.steiner@googlemail.com, boris.nicolai@andavida.com, tim@fruit-lab.de',
  'author_company' => NULL,
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '9.5.17-10.4.99',
      'php' => '7.2.0-7.4.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'uploadfolder' => true,
  'createDirs' => NULL,
  'clearcacheonload' => true,
);

