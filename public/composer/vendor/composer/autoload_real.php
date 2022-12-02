<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit36b77941ff526a5335a3fa8bfc070ccb
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit36b77941ff526a5335a3fa8bfc070ccb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit36b77941ff526a5335a3fa8bfc070ccb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit36b77941ff526a5335a3fa8bfc070ccb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}