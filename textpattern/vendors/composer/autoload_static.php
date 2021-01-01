<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a4b1345f960d10a91be70c543a39efa
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'N' => 
        array (
            'Netcarver\\Textile\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Netcarver\\Textile\\' => 
        array (
            0 => __DIR__ . '/..' . '/netcarver/textile/src/Netcarver/Textile',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a4b1345f960d10a91be70c543a39efa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a4b1345f960d10a91be70c543a39efa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8a4b1345f960d10a91be70c543a39efa::$classMap;

        }, null, ClassLoader::class);
    }
}