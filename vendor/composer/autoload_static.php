<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c9ec5b4eb6fc4350433eb79684fcdad
{
    public static $classMap = array (
        'AYLIEN\\TextAPI' => __DIR__ . '/..' . '/aylien/textapi/src/AYLIEN/TextAPI.php',
        'AYLIEN\\TextAPI\\IO_Abstract' => __DIR__ . '/..' . '/aylien/textapi/src/AYLIEN/IO/Abstract.php',
        'AYLIEN\\TextAPI\\IO_Curl' => __DIR__ . '/..' . '/aylien/textapi/src/AYLIEN/IO/Curl.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3c9ec5b4eb6fc4350433eb79684fcdad::$classMap;

        }, null, ClassLoader::class);
    }
}
