<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6b91c6086ccdcbb58e7f3002273575f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Students\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Students\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Students',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6b91c6086ccdcbb58e7f3002273575f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6b91c6086ccdcbb58e7f3002273575f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
