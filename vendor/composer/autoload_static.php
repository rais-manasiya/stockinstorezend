<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd182e8a4e2a0a1dcd6a5b485a2a1f4ab
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\' => 5,
            'ZendXml\\' => 8,
        ),
        'S' => 
        array (
            'Store\\' => 6,
        ),
        'A' => 
        array (
            'Application\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zendframework/library/Zend',
        ),
        'ZendXml\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zendxml/src',
        ),
        'Store\\' => 
        array (
            0 => __DIR__ . '/../..' . '/module/Store/src',
        ),
        'Application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/module/Application/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Store' => 
            array (
                0 => __DIR__ . '/../..' . '/module/Store/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd182e8a4e2a0a1dcd6a5b485a2a1f4ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd182e8a4e2a0a1dcd6a5b485a2a1f4ab::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd182e8a4e2a0a1dcd6a5b485a2a1f4ab::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd182e8a4e2a0a1dcd6a5b485a2a1f4ab::$classMap;

        }, null, ClassLoader::class);
    }
}