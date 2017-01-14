<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde8a232de66fffef4be4dbea58c51255
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Filesystem\\' => 29,
        ),
        'P' => 
        array (
            'ParagonIE\\ConstantTime\\' => 23,
        ),
        'M' => 
        array (
            'Mhor\\MediaInfo\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'ParagonIE\\ConstantTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src',
        ),
        'Mhor\\MediaInfo\\' => 
        array (
            0 => __DIR__ . '/..' . '/mhor/php-mediainfo/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'd' => 
        array (
            'danog\\PHP\\' => 
            array (
                0 => __DIR__ . '/..' . '/danog/phpstruct/lib',
            ),
            'danog\\MadelineProto\\' => 
            array (
                0 => __DIR__ . '/..' . '/danog/madelineproto/src',
            ),
        ),
        'P' => 
        array (
            'PWRTelegram\\PWRTelegram\\' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde8a232de66fffef4be4dbea58c51255::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde8a232de66fffef4be4dbea58c51255::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitde8a232de66fffef4be4dbea58c51255::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}