<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit807e8c83074c47728803d0c90e2782e0
{
    public static $files = array (
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'Y' => 
        array (
            'Yandex\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/nixsolutions/yandex-php-library/tests',
            ),
            'Yandex' => 
            array (
                0 => __DIR__ . '/..' . '/nixsolutions/yandex-php-library/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit807e8c83074c47728803d0c90e2782e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit807e8c83074c47728803d0c90e2782e0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit807e8c83074c47728803d0c90e2782e0::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
