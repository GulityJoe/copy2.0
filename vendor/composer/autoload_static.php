<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4c02d058003f362c3e9a2be862605c8
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        '1cfd2761b63b0a29ed23657ea394cb2d' => __DIR__ . '/..' . '/topthink/think-captcha/src/helper.php',
        '22ae91e0a0181f0ca9a02b9dde87e558' => __DIR__ . '/..' . '/thinkcmf/cmf/src/common.php',
        '9b552a3cc426e3287cc811caefa3cf53' => __DIR__ . '/..' . '/topthink/think-helper/src/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wxapp\\' => 6,
        ),
        't' => 
        array (
            'tree\\' => 5,
            'think\\helper\\' => 13,
            'think\\composer\\' => 15,
            'think\\captcha\\' => 14,
            'think\\' => 6,
        ),
        'm' => 
        array (
            'mindplay\\annotations\\' => 21,
        ),
        'd' => 
        array (
            'dir\\' => 4,
        ),
        'c' => 
        array (
            'cmf\\' => 4,
        ),
        'a' => 
        array (
            'app\\install\\' => 12,
            'app\\' => 4,
            'api\\' => 4,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wxapp\\' => 
        array (
            0 => __DIR__ . '/..' . '/thinkcmf/cmf-extend/src/wxapp',
        ),
        'tree\\' => 
        array (
            0 => __DIR__ . '/..' . '/thinkcmf/cmf-extend/src/tree',
        ),
        'think\\helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-helper/src',
        ),
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'think\\captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-captcha/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-image/src',
        ),
        'mindplay\\annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/mindplay/annotations/src/annotations',
        ),
        'dir\\' => 
        array (
            0 => __DIR__ . '/..' . '/thinkcmf/cmf-extend/src/dir',
        ),
        'cmf\\' => 
        array (
            0 => __DIR__ . '/..' . '/thinkcmf/cmf/src',
        ),
        'app\\install\\' => 
        array (
            0 => __DIR__ . '/..' . '/thinkcmf/cmf-install/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/..' . '/thinkcmf/cmf-app/src',
        ),
        'api\\' => 
        array (
            0 => __DIR__ . '/..' . '/thinkcmf/cmf-api/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static $classMap = array (
        'Callback' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'CallbackBody' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'CallbackParam' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'CallbackParameterToReference' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'CallbackReturnReference' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'CallbackReturnValue' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'DOMDocumentWrapper' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/DOMDocumentWrapper.php',
        'DOMEvent' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/DOMEvent.php',
        'ICallbackNamed' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'phpQuery' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery.php',
        'phpQueryEvents' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/phpQueryEvents.php',
        'phpQueryObject' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/phpQueryObject.php',
        'phpQueryObjectPlugin_Scripts' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/Scripts.php',
        'phpQueryObjectPlugin_WebBrowser' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/WebBrowser.php',
        'phpQueryObjectPlugin_example' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/example.php',
        'phpQueryPlugin_Scripts' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/Scripts.php',
        'phpQueryPlugin_WebBrowser' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/WebBrowser.php',
        'phpQueryPlugin_example' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/example.php',
        'phpQueryPlugins' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery.php',
        'think\\App' => __DIR__ . '/..' . '/thinkcmf/cmf/src/App.php',
        'think\\Log' => __DIR__ . '/..' . '/thinkcmf/cmf/src/Log.php',
        'think\\route\\dispatch\\Module' => __DIR__ . '/..' . '/thinkcmf/cmf/src/route/dispatch/Module.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4c02d058003f362c3e9a2be862605c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4c02d058003f362c3e9a2be862605c8::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite4c02d058003f362c3e9a2be862605c8::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite4c02d058003f362c3e9a2be862605c8::$classMap;

        }, null, ClassLoader::class);
    }
}
