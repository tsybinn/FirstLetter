<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36b77941ff526a5335a3fa8bfc070ccb
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
            0 => __DIR__ . '/../..' . '/../src/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36b77941ff526a5335a3fa8bfc070ccb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36b77941ff526a5335a3fa8bfc070ccb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit36b77941ff526a5335a3fa8bfc070ccb::$classMap;

        }, null, ClassLoader::class);
    }
}