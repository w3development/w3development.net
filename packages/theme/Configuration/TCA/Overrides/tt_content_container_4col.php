<?php
defined('TYPO3') || die();

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \B13\Container\Tca\Registry::class
)->configureContainer(
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