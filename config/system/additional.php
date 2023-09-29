<?php
$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
    $GLOBALS['TYPO3_CONF_VARS'],
    [
        'DB' => [
            'Connections' => [
                'Default' => [
                    'dbname' => 'db_c0_w3dev',
                    'driver' => 'mysqli',
                    'host' => 'localhost',
                    'password' => 'qm4D#HNoKtaCf',
                    'port' => '3306',
                    'user' => 'dbusr_c0_w3dev',
                ],
            ],
        ],
        'GFX' => [
            'processor' => 'ImageMagick',
            'processor_path' => '/usr/bin/',
            'processor_path_lzw' => '/usr/bin/',
            'processor_colorspace' => 'sRGB',
            'processor_effects' => true,
        ],
        'MAIL' => [
            'transport' => 'smtp',
            'transport_smtp_encrypt' => false,
            'transport_smtp_server' => 'localhost:1025',
            'transport_sendmail_command' => '/usr/sbin/sendmail -t -i -f webmaster@dev.w3development.net',
            'defaultMailFromAddress' => 'no-reply@w3development.net'
        ],
        'SYS' => [
            'trustedHostsPattern' => '.*.*',
            'devIPmask' => '*',
            'displayErrors' => 1,
            'fileCreateMask' => '0660',
            'folderCreateMask' => '2770',
        ],
        'BE' => [
            'lockSSL' => 1,
            'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$TTYueG5xUldIb3hsLlpnWg$EBI5d0Ego5gnPeqdQdquxGVWDbViMQjj4SDZESzIFFs',
            'passwordHashing' => [
                'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
                'options' => [],
            ],
        ],
        'EXTENSION' => [
            'backend' => [
                'backendFavicon' => 'EXT:theme/Resources/Public/Images/Favicon/favicon.ico',
                'backendLogo' => 'EXT:theme/Resources/Public/Images/Logo/logo-backend.png',
                'loginBackgroundImage' => 'EXT:theme/Resources/Public/Images/Backend/typo3-login-background.jpg',
                'loginFootnote' => '@w3development',
                'loginHighlightColor' => '#3a5a6b',
                'loginLogo' => 'EXT:theme/Resources/Public/Images/Logo/w3development.png',
                'loginLogoAlt' => '',
            ],
        ]
    ]
);
