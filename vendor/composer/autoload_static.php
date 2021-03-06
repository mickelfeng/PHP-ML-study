<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef5f5a82083fb5c4886a92460f1915aa
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pf\\arr\\' => 7,
        ),
        'P' => 
        array (
            'Phpml\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pf\\arr\\' => 
        array (
            0 => __DIR__ . '/..' . '/nancheng/pfinal-array/src',
        ),
        'Phpml\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-ai/php-ml/src/Phpml',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef5f5a82083fb5c4886a92460f1915aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef5f5a82083fb5c4886a92460f1915aa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
