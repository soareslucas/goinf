<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit128360b81a978a5760c1ae896c6115df
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit128360b81a978a5760c1ae896c6115df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit128360b81a978a5760c1ae896c6115df::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit128360b81a978a5760c1ae896c6115df::$classMap;

        }, null, ClassLoader::class);
    }
}
