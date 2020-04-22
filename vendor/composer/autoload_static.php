<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9aebde64fa6180493800254929001a3e
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DevStart\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DevStart\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9aebde64fa6180493800254929001a3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9aebde64fa6180493800254929001a3e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}