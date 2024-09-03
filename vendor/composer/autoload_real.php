<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcde6caab4e428df7c1ed03ba15f47f47
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

        spl_autoload_register(array('ComposerAutoloaderInitcde6caab4e428df7c1ed03ba15f47f47', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcde6caab4e428df7c1ed03ba15f47f47', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcde6caab4e428df7c1ed03ba15f47f47::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
