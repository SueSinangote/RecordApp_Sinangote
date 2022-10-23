<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd54f2c9e306a550512a3bf19992dfdc1
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd54f2c9e306a550512a3bf19992dfdc1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd54f2c9e306a550512a3bf19992dfdc1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd54f2c9e306a550512a3bf19992dfdc1::$classMap;

        }, null, ClassLoader::class);
    }
}