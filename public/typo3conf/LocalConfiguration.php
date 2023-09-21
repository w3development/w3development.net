<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$U2VOM1FlUnBsOEMuTXJqeQ$mVzGR1g+lc0ACMKXc0PdouiE7MVPlWl9DnjAUWASvI4',
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => 'db',
                'driver' => 'mysqli',
                'host' => 'db',
                'password' => 'typo3pass',
                'port' => 3306,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'typo3',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:6:{s:9:"loginLogo";s:56:"EXT:theme/Resources/Public/Images/Logo/w3development.png";s:19:"loginHighlightColor";s:7:"#3a5a6b";s:20:"loginBackgroundImage";s:68:"EXT:theme/Resources/Public/Images/Backend/typo3-login-background.jpg";s:13:"loginFootnote";s:14:"@w3development";s:11:"backendLogo";s:55:"EXT:theme/Resources/Public/Images/Logo/logo-backend.png";s:14:"backendFavicon";s:53:"EXT:theme/Resources/Public/Images/Favicon/favicon.ico";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            'flux' => 'a:9:{s:9:"debugMode";s:1:"0";s:8:"doktypes";s:5:"0,1,4";s:12:"handleErrors";s:1:"0";s:8:"autoload";s:1:"1";s:11:"plugAndPlay";s:1:"0";s:20:"plugAndPlayDirectory";s:6:"design";s:15:"pageIntegration";s:1:"1";s:33:"pagesLanguageConfigurationOverlay";s:1:"0";s:14:"flexFormToIrre";s:1:"0";}',
            'scheduler' => 'a:2:{s:11:"maxLifetime";s:4:"1440";s:15:"showSampleTasks";s:1:"1";}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
                'it',
                'sq',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => 'EXT:theme/Resources/Public/Images/Favicon/favicon.ico',
            'backendLogo' => 'EXT:theme/Resources/Public/Images/Logo/logo-backend.png',
            'loginBackgroundImage' => 'EXT:theme/Resources/Public/Images/Backend/typo3-login-background.jpg',
            'loginFootnote' => '@w3development',
            'loginHighlightColor' => '#3a5a6b',
            'loginLogo' => 'EXT:theme/Resources/Public/Images/Logo/w3development.png',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'flux' => [
            'autoload' => '1',
            'debugMode' => '0',
            'doktypes' => '0,1,4',
            'flexFormToIrre' => '0',
            'handleErrors' => '0',
            'pageIntegration' => '1',
            'pagesLanguageConfigurationOverlay' => '0',
            'plugAndPlay' => '0',
            'plugAndPlayDirectory' => 'design',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
    ],
    'FE' => [
        'cacheHash' => [
            'enforceValidation' => true,
        ],
        'debug' => true,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                        5 => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'smtp',
        'transport_sendmail_command' => '',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pagesection' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => '1f27cf18b907c608ab13d9b8e2d3d817d311fe0af282c0aa93adac32ea13eea93b163ee798bd3670789ef0ba65ec679d',
        'exceptionalErrors' => 12290,
        'features' => [
            'felogin.extbase' => true,
            'fluidBasedPageModule' => true,
            'rearrangedRedirectMiddlewares' => true,
            'unifiedPageTranslationHandling' => true,
            'yamlImportsFollowDeclarationOrder' => true,
        ],
        'sitename' => 'New TYPO3 site',
        'systemLogLevel' => 0,
        'systemMaintainers' => [
            1,
            18,
        ],
    ],
];
