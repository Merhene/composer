<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0772fb509f09001ac2547dada3c1b1f
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0772fb509f09001ac2547dada3c1b1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0772fb509f09001ac2547dada3c1b1f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0772fb509f09001ac2547dada3c1b1f::$classMap;

        }, null, ClassLoader::class);
    }
}
