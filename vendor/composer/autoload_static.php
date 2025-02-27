<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27c959aed58d406dcc8f2a4733512a0b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mohammadintsar\\UniqueValueArr\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mohammadintsar\\UniqueValueArr\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit27c959aed58d406dcc8f2a4733512a0b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27c959aed58d406dcc8f2a4733512a0b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit27c959aed58d406dcc8f2a4733512a0b::$classMap;

        }, null, ClassLoader::class);
    }
}
