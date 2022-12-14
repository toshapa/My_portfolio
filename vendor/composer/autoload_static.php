<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita283548d280e492f7510b2de4dd0cc6b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita283548d280e492f7510b2de4dd0cc6b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita283548d280e492f7510b2de4dd0cc6b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita283548d280e492f7510b2de4dd0cc6b::$classMap;

        }, null, ClassLoader::class);
    }
}
