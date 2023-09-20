<?php
defined('TYPO3_MODE') || die();

// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:theme/Resources/Private/Language/tca.xlf:theme_ce_text_icon',
        'theme_ce_text_icon',
        'your-icon-identifier',
    ],
    'textmedia',
    'after'
);

// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['theme_ce_text_icon'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,image,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    '
];

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container-1col', // CType
            '1 Column Container', // label
            'Some Description of the Container', // description
            [
                [
                    ['name' => 'Inner Content', 'colPos' => 100]
                ]
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:theme/Resources/Public/Icons/Container/Column1.svg')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container-2col', // CType
            '2 Column Container', // label
            'Some Description of the Container', // description
            [
                [
                    ['name' => 'Left Content', 'colPos' => 201],
                    ['name' => 'Right Content', 'colPos' => 202]
                ]
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:theme/Resources/Public/Icons/Container/Column1.svg')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container-3col', // CType
            '3 Column Container', // label
            'Container with 3 equal columns', // description
            [
                [
                    ['name' => '1st Column', 'colPos' => 301],
                    ['name' => '2nd Column', 'colPos' => 302],
                    ['name' => '3rd Column', 'colPos' => 303]
                ]
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:theme/Resources/Public/Icons/Container/Column1.svg')
    ->setSaveAndCloseInNewContentElementWizard(false)
);
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container-4col', // CType
            '4 Column Container', // label
            'Container with 4 equal columns', // description
            [
                [
                    ['name' => 'Left Content', 'colPos' => 401],
                    ['name' => 'Right Content', 'colPos' => 402],
                    ['name' => 'Right Content', 'colPos' => 403],
                    ['name' => 'Right Content', 'colPos' => 404]
                ]
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:theme/Resources/Public/Icons/Container/Column1.svg')
    ->setSaveAndCloseInNewContentElementWizard(false)
);
