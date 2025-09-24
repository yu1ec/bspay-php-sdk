<?php

namespace BsPaySdk;

/**
 * SDK引导类
 * 负责初始化SDK的常量和配置
 */
class Bootstrap
{
    /**
     * 是否已初始化
     */
    private static $initialized = false;

    /**
     * 初始化SDK
     */
    public static function init()
    {
        if (self::$initialized) {
            return;
        }

        // 设置时区
        ini_set('date.timezone', 'Asia/Shanghai');
        
        // 定义SDK基础路径
        if (!defined("SDK_BASE")) {
            define("SDK_BASE", dirname(__DIR__) . "/BsPaySdk");
        }

        // SDK版本号
        if (!defined("SDK_VERSION")) {
            define("SDK_VERSION", "php#v2.1.1");
        }

        // API接口版本号
        if (!defined("API_VERSION")) {
            define("API_VERSION", "2.0.0");
        }

        // 设置是否调试模式
        if (!defined("DEBUG")) {
            define("DEBUG", false);
        }

        // 设置调试日志路径
        if (!defined("LOG")) {
            define("LOG", dirname(SDK_BASE) . "/log");
        }

        // 设置生产模式
        if (!defined("PROD_MODE")) {
            define("PROD_MODE", true);
        }

        self::$initialized = true;
    }

    /**
     * 获取SDK版本
     */
    public static function getVersion()
    {
        self::init();
        return defined('SDK_VERSION') ? SDK_VERSION : 'unknown';
    }

    /**
     * 获取API版本
     */
    public static function getApiVersion()
    {
        self::init();
        return defined('API_VERSION') ? API_VERSION : 'unknown';
    }

    /**
     * 检查是否调试模式
     */
    public static function isDebug()
    {
        self::init();
        return defined('DEBUG') && DEBUG;
    }

    /**
     * 检查是否生产模式
     */
    public static function isProdMode()
    {
        self::init();
        return defined('PROD_MODE') && PROD_MODE;
    }
}
