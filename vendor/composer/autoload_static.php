<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf56f6f3b841b741c85ef30d5299e62fd
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf56f6f3b841b741c85ef30d5299e62fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf56f6f3b841b741c85ef30d5299e62fd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
