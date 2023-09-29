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
        // This GFX configuration allows processing by installed ImageMagick 6
        'GFX' => [
            'processor' => 'ImageMagick',
            'processor_path' => '/usr/bin/',
            'processor_path_lzw' => '/usr/bin/',
            'processor_colorspace' => 'sRGB',
            'processor_effects' => true,
        ],
        // This mail configuration sends all emails to mailhog
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
        ],
        'BE' => [
            'lockSSL' => 1
        ]
    ]
);
