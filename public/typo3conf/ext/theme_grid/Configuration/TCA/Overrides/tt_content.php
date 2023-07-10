<?php
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container-1col', // CType
            'Container - 1 column', // label
            'Container - 1 Column', // description
            [
                [
                    [ 'name' => 'Content' , 'colPos' => 101 ],
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    // override default configurations
    ->setIcon('EXT:container/Resources/Public/Icons/container-1col.svg')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container-2col-50-50', // CType
            'Container - 2 columns (50-50)', // label
            'Container - 2 Column (50-50)', // description
            [
                [
                    [ 'name' => 'Leftside content' , 'colPos' => 201 ],
                    [ 'name' => 'Rightside content' , 'colPos' => 202 ],
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    // override default configurations
    ->setIcon('EXT:container/Resources/Public/Icons/container-2col.svg')
    ->setSaveAndCloseInNewContentElementWizard(false)
);
?>
