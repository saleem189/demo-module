<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteab5270c0d2e2372355a081d9090b580
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Saleem\\ShowModule\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Saleem\\ShowModule\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteab5270c0d2e2372355a081d9090b580::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteab5270c0d2e2372355a081d9090b580::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteab5270c0d2e2372355a081d9090b580::$classMap;

        }, null, ClassLoader::class);
    }
}
