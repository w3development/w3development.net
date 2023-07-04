<?php

/**
 * slickcontent
 */
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'ctrl' ][ 'typeicon_classes' ][ 'slickcontent' ] = 'contains-slickdefault';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickcontent' ][ 'showitem' ] = ''
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,'
				. '  --palette--;;headers,'
				. '  --palette--;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.palette.css,'
				. '--div--;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.div.items,'
				. '  tx_slick_pages;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.tx_slick_pages,'
				. '  records;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records_formlabel,'
				. '--div--;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.div.slider,'
				. '  pi_flexform;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.pi_flexform,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,'
				. '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_palettecss;tx_start_palettecss,'
				. '  --palette--;LLL:EXT:t3foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_t3foundation_visibility;tx_t3foundation_visibility,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,'
				. '  --palette--;;language,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,'
				. '  --palette--;;hidden,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,'
				. '--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,'
				. '  categories,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,'
				. '  rowDescription,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,'
				. ''
;

// #v0609, 200107, dwildt, +
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
				// 'list_type' does not apply here
				'*',
				// Flexform configuration schema file
				'FILE:EXT:slick/Configuration/Flexforms/Default/flexform.xml',
				// ctype
				'slickcontent'
);

// #v0609, 200107, dwildt, -
//$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'pi_flexform' ][ 'config' ][ 'ds' ][ ',slickcontent' ] = 'FILE:EXT:slick/Configuration/Flexforms/Default/flexform.xml';
// #i0054, 190502, dwildt, 5+
/**
 * slickfilecollection
 */
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'ctrl' ][ 'typeicon_classes' ][ 'slickfilecollection' ] = 'contains-slickdefault';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickfilecollection' ][ 'showitem' ] = ''
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,'
				. '  --palette--;;headers,'
				. '  --palette--;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.palette.css,'
				. '--div--;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.div.items,'
				. '  file_collections;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections.ALT.uploads_formlabel,'
				. '  --palette--;;mediaAdjustments,'
				. '--div--;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.div.slider,'
				. '  pi_flexform;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.pi_flexform,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,'
				. '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_palettecss;tx_start_palettecss,'
				. '  --palette--;LLL:EXT:t3foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_t3foundation_visibility;tx_t3foundation_visibility,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,'
				. '  --palette--;;language,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,'
				. '  --palette--;;hidden,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,'
				. '--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,'
				. '  categories,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,'
				. '  rowDescription,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,'
				. ''
;

/**
 * slickimage
 */
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'ctrl' ][ 'typeicon_classes' ][ 'slickimage' ] = 'contains-slickdefault';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickimage' ][ 'showitem' ] = ''
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,'
				. '  --palette--;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.palette.css,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,'
				. '  image,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,'
				. '--div--;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.div.slider,'
				. '  pi_flexform;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.pi_flexform,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,'
				. '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_palettecss;tx_start_palettecss,'
				. '  --palette--;LLL:EXT:t3foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_t3foundation_visibility;tx_t3foundation_visibility,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,'
				. '  --palette--;;language,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,'
				. '  --palette--;;hidden,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,'
				. '--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,'
				. '  categories,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,'
				. '  rowDescription,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,'
				. ''
;
$x = '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,'
				. '  --palette--;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.palette.css,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,'
				. '  image,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,'
				. '  --palette--;LLL:EXT:t3foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_t3foundation_visibility;tx_t3foundation_visibility,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,'
				. '  --palette--;;language,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,'
				. '  --palette--;;hidden,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,'
				. '--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,'
				. '--div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,'
				. '  tx_gridelements_container,'
				. '  tx_gridelements_columns'
;

// #v0609, 200107, dwildt, +
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
				// 'list_type' does not apply here
				'*',
				// Flexform configuration schema file
				'FILE:EXT:slick/Configuration/Flexforms/Default/flexform.xml',
				// ctype
				'slickimage'
);

// #v0609, 200107, dwildt, +
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
				// 'list_type' does not apply here
				'*',
				// Flexform configuration schema file
				'FILE:EXT:slick/Configuration/Flexforms/Default/flexform.xml',
				// ctype
				'slickfilecollection'
);

// #v0609, 200107, dwildt, -
//$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'pi_flexform' ][ 'config' ][ 'ds' ][ ',slickimage' ] = 'FILE:EXT:slick/Configuration/Flexforms/Default/flexform.xml';
//$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'pi_flexform' ][ 'config' ][ 'ds' ][ ',slickfilecollection' ] = 'FILE:EXT:slick/Configuration/Flexforms/Default/flexform.xml';

/**
 * slickitem
 */
$cmsLL = 'frontend/Resources/Private/Language/locallang_ttc.xlf';
// #i0024, 171205, 4+
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickitem' ][ 'columnsOverrides' ][ 'bodytext' ][ 'config' ] = array(
		'enableRichtext' => '1',
		'richtextConfiguration' => 'default',
);
// #i0024, 171205, +
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickitem' ][ 'showitem' ] = ''
				. '  --palette--;LLL:EXT:' . $cmsLL . ':palette.general;general,'
				. '    hidden,'
				. '    header,'
				. '    header_link,'
				. '    bodytext,'
				. '    rte_enabled;LLL:EXT:' . $cmsLL . ':rte_enabled_formlabel,'
				. '--div--;LLL:EXT:' . $cmsLL . ':tabs.images,'
				. '	 --palette--;LLL:EXT:' . $cmsLL . ':palette.image_settings;slickgallery,'
				. '	 image,'
				. '  imageheight;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.contentheight,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,'
				. '  layout,'
				. '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_palettecss;tx_start_palettecss,'
				. '  --palette--;LLL:EXT:t3foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_t3foundation_visibility;tx_t3foundation_visibility,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,'
				. '  --palette--;;hidden,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,'
;
