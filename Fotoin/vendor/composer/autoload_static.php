<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedff9e9a80df3825d26cb07152c53474
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitedff9e9a80df3825d26cb07152c53474::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitedff9e9a80df3825d26cb07152c53474::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitedff9e9a80df3825d26cb07152c53474::$classMap;

        }, null, ClassLoader::class);
    }
}
