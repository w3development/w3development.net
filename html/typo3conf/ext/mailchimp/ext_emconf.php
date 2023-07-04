<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "mailchimp".
 *
 * Auto generated 04-07-2023 15:29
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Mailchimp subscription',
  'description' => 'Simple MailChimp integration to let users register to a specific list',
  'category' => 'plugin',
  'author' => 'Georg Ringer',
  'author_email' => 'g.ringer@supseven.at',
  'state' => 'stable',
  'clearCacheOnLoad' => true,
  'version' => '3.2.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '9.5.0-10.4.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
      'typoscript_rendering' => '1.0.5-2.99.999',
    ),
  ),
  'uploadfolder' => false,
  'clearcacheonload' => true,
  'author_company' => NULL,
);

