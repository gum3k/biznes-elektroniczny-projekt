<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf6847323aa1c9a26ab8438217d0b303
{
    public static $classMap = array (
        'Ps_CategoryTree' => __DIR__ . '/../..' . '/ps_categorytree.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbf6847323aa1c9a26ab8438217d0b303::$classMap;

        }, null, ClassLoader::class);
    }
}
