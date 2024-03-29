<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa87783655326c345997772644b5301c
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa87783655326c345997772644b5301c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa87783655326c345997772644b5301c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaa87783655326c345997772644b5301c::$classMap;

        }, null, ClassLoader::class);
    }
}
