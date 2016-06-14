<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1c8898d0b256649736ca6e9ffd35621
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MainLoads\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MainLoads\\' => 
        array (
            0 => __DIR__ . '/../..' . '/mainLoads',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita1c8898d0b256649736ca6e9ffd35621::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1c8898d0b256649736ca6e9ffd35621::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
