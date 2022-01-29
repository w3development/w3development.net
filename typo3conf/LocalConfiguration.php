<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$pbkdf2-sha256$25000$1SFNmJckvtdGIlOaG216HA$tKlw0vx/yU9w9VkuKvwl3Bo/7ZOvisS/PEHsYw0S7Bg',
        'loginSecurityLevel' => 'normal',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'dbname' => '',
                'driver' => 'mysqli',
                'host' => '127.0.0.1',
                'password' => '',
                'port' => 3306,
                'user' => '',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:6:{s:9:"loginLogo";s:0:"";s:19:"loginHighlightColor";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:13:"loginFootnote";s:0:"";s:11:"backendLogo";s:0:"";s:14:"backendFavicon";s:0:"";}',
            'blog' => 'a:2:{s:23:"disablePageLayoutHeader";s:1:"0";s:19:"enableGravatarProxy";s:1:"0";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"0";s:11:"offlineMode";s:1:"0";}',
            'flux' => 'a:8:{s:9:"debugMode";s:1:"0";s:8:"doktypes";s:5:"0,1,4";s:12:"handleErrors";s:1:"0";s:8:"autoload";s:1:"1";s:11:"plugAndPlay";s:1:"0";s:20:"plugAndPlayDirectory";s:6:"design";s:33:"pagesLanguageConfigurationOverlay";s:1:"0";s:7:"compact";s:1:"0";}',
            'powermail' => 'a:8:{s:12:"disableIpLog";s:1:"1";s:27:"disableMarketingInformation";s:1:"0";s:20:"disableBackendModule";s:1:"0";s:24:"disablePluginInformation";s:1:"0";s:35:"disablePluginInformationMailPreview";s:1:"0";s:13:"enableCaching";s:1:"0";s:15:"l10n_mode_merge";s:1:"0";s:29:"replaceIrreWithElementBrowser";s:1:"0";}',
            'scheduler' => 'a:2:{s:11:"maxLifetime";s:4:"1440";s:15:"showSampleTasks";s:1:"1";}',
            'vhs' => 'a:1:{s:20:"disableAssetHandling";s:1:"0";}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'sq',
                'it',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
        ],
        'blog' => [
            'disablePageLayoutHeader' => '0',
            'enableGravatarProxy' => '0',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '0',
            'offlineMode' => '0',
        ],
        'flux' => [
            'autoload' => '1',
            'compact' => '0',
            'debugMode' => '0',
            'doktypes' => '0,1,4',
            'handleErrors' => '0',
            'pagesLanguageConfigurationOverlay' => '0',
            'plugAndPlay' => '0',
            'plugAndPlayDirectory' => 'design',
        ],
        'powermail' => [
            'disableBackendModule' => '0',
            'disableIpLog' => '1',
            'disableMarketingInformation' => '0',
            'disablePluginInformation' => '0',
            'disablePluginInformationMailPreview' => '0',
            'enableCaching' => '0',
            'l10n_mode_merge' => '0',
            'replaceIrreWithElementBrowser' => '0',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
        'vhs' => [
            'disableAssetHandling' => '0',
        ],
    ],
    'FE' => [
        'debug' => false,
        'loginSecurityLevel' => 'normal',
        'pageNotFound_handling' => '1',
    ],
    'GFX' => [
        'jpg_quality' => '80',
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i ',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\ApcuBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => '38a2e90619d0ca03b11f3b526fa4c4c67c4fb8a697bca2ad6b77b63aa45ab875b7926bfaf54927058d1cd67a3395e365',
        'exceptionalErrors' => 4096,
        'features' => [
            'TypoScript.strictSyntax' => true,
            'redirects.hitCount' => false,
            'simplifiedControllerActionDispatching' => false,
            'unifiedPageTranslationHandling' => true,
        ],
        'fileCreateMask' => '0660',
        'folderCreateMask' => '2770',
        'sitename' => 'w3development.net',
        'systemLogLevel' => 2,
    ],
];
