<?php
defined('TYPO3') || die();

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \B13\Container\Tca\Registry::class
)->configureContainer(
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