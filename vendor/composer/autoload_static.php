<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitafbf42a3c8dbda7b2d4db722f40b9e52
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitafbf42a3c8dbda7b2d4db722f40b9e52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitafbf42a3c8dbda7b2d4db722f40b9e52::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitafbf42a3c8dbda7b2d4db722f40b9e52::$classMap;

        }, null, ClassLoader::class);
    }
}
