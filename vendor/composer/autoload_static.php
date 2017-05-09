<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d06ff2568527f4890fe8342c83cd859
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d06ff2568527f4890fe8342c83cd859::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d06ff2568527f4890fe8342c83cd859::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}