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

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container-2col-66-33', // CType
            'Container - 2 columns (66-33)', // label
            'Container - 2 Column (66-33)', // description
            [
                [
                    [ 'name' => 'Leftside content' , 'colPos' => 211 ],
                    [ 'name' => 'Rightside content' , 'colPos' => 212 ],
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    // override default configurations
    ->setIcon('EXT:container/Resources/Public/Icons/container-2col-left.svg')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container-2col-33-66', // CType
            'Container - 2 columns (33-66)', // label
            'Container - 2 Column (33-66)', // description
            [
                [
                    [ 'name' => 'Leftside content' , 'colPos' => 221 ],
                    [ 'name' => 'Rightside content' , 'colPos' => 222 ],
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    // override default configurations
    ->setIcon('EXT:container/Resources/Public/Icons/container-2col-right.svg')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container-2col-75-25', // CType
            'Container - 2 columns (75-25)', // label
            'Container - 2 Column (75-25)', // description
            [
                [
                    [ 'name' => 'Leftside content' , 'colPos' => 231 ],
                    [ 'name' => 'Rightside content' , 'colPos' => 232 ],
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    // override default configurations
    ->setIcon('EXT:container/Resources/Public/Icons/container-2col-left.svg')
    ->setSaveAndCloseInNewContentElementWizard(false)
);
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container-2col-25-75', // CType
            'Container - 2 columns (25-75)', // label
            'Container - 2 Column (25-75)', // description
            [
                [
                    [ 'name' => 'Leftside content' , 'colPos' => 241 ],
                    [ 'name' => 'Rightside content' , 'colPos' => 242 ],
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    // override default configurations
    ->setIcon('EXT:container/Resources/Public/Icons/container-2col-right.svg')
    ->setSaveAndCloseInNewContentElementWizard(false)
);
?>
