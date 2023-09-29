<?php
defined('TYPO3') || die();

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \B13\Container\Tca\Registry::class
)->configureContainer(
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