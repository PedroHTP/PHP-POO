<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d9478dc26567f294d363ac55b587d30
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d9478dc26567f294d363ac55b587d30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d9478dc26567f294d363ac55b587d30::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0d9478dc26567f294d363ac55b587d30::$classMap;

        }, null, ClassLoader::class);
    }
}
