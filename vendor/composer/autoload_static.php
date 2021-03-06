<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf509f0f0e476eaac56f84d1085abe3dc
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'ULog\\View\\' => 10,
            'ULog\\Router\\' => 12,
            'ULog\\Controller\\' => 16,
            'ULog\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ULog\\View\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/view',
        ),
        'ULog\\Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/router',
        ),
        'ULog\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controller',
        ),
        'ULog\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf509f0f0e476eaac56f84d1085abe3dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf509f0f0e476eaac56f84d1085abe3dc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
