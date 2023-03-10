<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit44213c538bc1effb1dba43248c273d4a
{
    public static $prefixLengthsPsr4 = array (
        'g' => 
        array (
            'generetor\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'generetor\\' => 
        array (
            0 => __DIR__ . '/..' . '/moham/generetor',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit44213c538bc1effb1dba43248c273d4a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit44213c538bc1effb1dba43248c273d4a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit44213c538bc1effb1dba43248c273d4a::$classMap;

        }, null, ClassLoader::class);
    }
}
