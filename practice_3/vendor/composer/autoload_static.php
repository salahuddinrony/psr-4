<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0eaee4f9a01e9665709bbe4193a5bf88
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Animals\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Animals\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Animals',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0eaee4f9a01e9665709bbe4193a5bf88::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0eaee4f9a01e9665709bbe4193a5bf88::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
