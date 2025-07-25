<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8a958898e5c57ccf05d2b7747f03276
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Employe\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Employe\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8a958898e5c57ccf05d2b7747f03276::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8a958898e5c57ccf05d2b7747f03276::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc8a958898e5c57ccf05d2b7747f03276::$classMap;

        }, null, ClassLoader::class);
    }
}
