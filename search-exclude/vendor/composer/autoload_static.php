<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d0fa8e45ce4516f8c64d50bbea1ba57
{
    public static $files = array (
        '3773ef3f09c37da5478d578e32b03a4b' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/actions.php',
        'eed58ea21003214096fa69247fda8497' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/V2/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'QuadLayers\\WP_Plugin_Table_Links\\' => 33,
            'QuadLayers\\WP_Plugin_Suggestions\\' => 33,
            'QuadLayers\\WP_Plugin_Install_Tab\\' => 33,
            'QuadLayers\\WP_Orm\\' => 18,
            'QuadLayers\\WP_Notice_Plugin_Required\\' => 37,
            'QuadLayers\\WP_Notice_Plugin_Promote\\' => 36,
            'QuadLayers\\WP_Dashboard_Widget_News\\' => 36,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'QuadLayers\\WP_Plugin_Table_Links\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-table-links/src',
        ),
        'QuadLayers\\WP_Plugin_Suggestions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src',
        ),
        'QuadLayers\\WP_Plugin_Install_Tab\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-install-tab/src',
        ),
        'QuadLayers\\WP_Orm\\' => 
        array (
            0 => __DIR__ . '/..' . '/franmastromarino/wp-orm/src',
        ),
        'QuadLayers\\WP_Notice_Plugin_Required\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src',
        ),
        'QuadLayers\\WP_Notice_Plugin_Promote\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src',
        ),
        'QuadLayers\\WP_Dashboard_Widget_News\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-dashboard-widget-news/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\Assets' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-assets.php',
        'Automattic\\Jetpack\\Assets\\Script_Data' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-script-data.php',
        'Automattic\\Jetpack\\Assets\\Semver' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-semver.php',
        'Automattic\\Jetpack\\Composer\\Manager' => __DIR__ . '/..' . '/automattic/jetpack-composer-plugin/src/class-manager.php',
        'Automattic\\Jetpack\\Composer\\Plugin' => __DIR__ . '/..' . '/automattic/jetpack-composer-plugin/src/class-plugin.php',
        'Automattic\\Jetpack\\Constants' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-constants/src/class-constants.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'QuadLayers\\QLSE\\Controllers\\Backend' => __DIR__ . '/../..' . '/lib/controllers/class-backend.php',
        'QuadLayers\\QLSE\\Controllers\\Frontend' => __DIR__ . '/../..' . '/lib/controllers/class-frontend.php',
        'QuadLayers\\QLSE\\Entity\\Settings' => __DIR__ . '/../..' . '/lib/entity/class-settings.php',
        'QuadLayers\\QLSE\\Helpers' => __DIR__ . '/../..' . '/lib/class-helpers.php',
        'QuadLayers\\QLSE\\Models\\Settings' => __DIR__ . '/../..' . '/lib/models/class-settings.php',
        'QuadLayers\\QLSE\\Plugin' => __DIR__ . '/../..' . '/lib/class-plugin.php',
        'QuadLayers\\WP_Dashboard_Widget_News\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-dashboard-widget-news/src/Load.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Load.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\PluginByFile' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginByFile.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\PluginBySlug' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginBySlug.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\PluginBySlugV2' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginBySlugV2.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginActions' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginActions.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginActionsLinks' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginActionsLinks.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginDataByFile' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginDataByFile.php',
        'QuadLayers\\WP_Notice_Plugin_Required\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src/Load.php',
        'QuadLayers\\WP_Notice_Plugin_Required\\Plugin' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src/Plugin.php',
        'QuadLayers\\WP_Orm\\Builder\\CollectionRepositoryBuilder' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Builder/CollectionRepositoryBuilder.php',
        'QuadLayers\\WP_Orm\\Builder\\SingleRepositoryBuilder' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Builder/SingleRepositoryBuilder.php',
        'QuadLayers\\WP_Orm\\Builder\\SingleVirtualRepositoryBuilder' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Builder/SingleVirtualRepositoryBuilder.php',
        'QuadLayers\\WP_Orm\\Entity\\CollectionEntity' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Entity/CollectionEntity.php',
        'QuadLayers\\WP_Orm\\Entity\\EntityInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Entity/EntityInterface.php',
        'QuadLayers\\WP_Orm\\Entity\\SingleEntity' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Entity/SingleEntity.php',
        'QuadLayers\\WP_Orm\\Factory\\AbstractFactory' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Factory/AbstractFactory.php',
        'QuadLayers\\WP_Orm\\Factory\\CollectionFactory' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Factory/CollectionFactory.php',
        'QuadLayers\\WP_Orm\\Factory\\SingleFactory' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Factory/SingleFactory.php',
        'QuadLayers\\WP_Orm\\Mapper\\CollectionMapper' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Mapper/CollectionMapper.php',
        'QuadLayers\\WP_Orm\\Mapper\\CollectionMapperInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Mapper/CollectionMapperInterface.php',
        'QuadLayers\\WP_Orm\\Mapper\\SingleMapper' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Mapper/SingleMapper.php',
        'QuadLayers\\WP_Orm\\Mapper\\SingleMapperInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Mapper/SingleMapperInterface.php',
        'QuadLayers\\WP_Orm\\Repository\\CollectionRepository' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/CollectionRepository.php',
        'QuadLayers\\WP_Orm\\Repository\\CollectionRepositoryInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/CollectionRepositoryInterface.php',
        'QuadLayers\\WP_Orm\\Repository\\SingleRepository' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/SingleRepository.php',
        'QuadLayers\\WP_Orm\\Repository\\SingleRepositoryInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/SingleRepositoryInterface.php',
        'QuadLayers\\WP_Orm\\Repository\\SingleVirtualRepository' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/SingleVirtualRepository.php',
        'QuadLayers\\WP_Orm\\Repository\\SingleVirtualRepositoryInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/SingleVirtualRepositoryInterface.php',
        'QuadLayers\\WP_Plugin_Install_Tab\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-install-tab/src/Load.php',
        'QuadLayers\\WP_Plugin_Suggestions\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Load.php',
        'QuadLayers\\WP_Plugin_Suggestions\\Page' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Page.php',
        'QuadLayers\\WP_Plugin_Suggestions\\Table' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Table.php',
        'QuadLayers\\WP_Plugin_Table_Links\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-table-links/src/Load.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d0fa8e45ce4516f8c64d50bbea1ba57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d0fa8e45ce4516f8c64d50bbea1ba57::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8d0fa8e45ce4516f8c64d50bbea1ba57::$classMap;

        }, null, ClassLoader::class);
    }
}
