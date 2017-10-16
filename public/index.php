<?php
/**
 *  入口文件
 */
//开启严格模式
declare(strict_types=1);

use Akf\Core\Autoload;
use Akf\Core\Config;
use Akf\Core\Bootstrap;

define('ROOT_PATH', realpath(__DIR__."/../"));
define('CONFIG_PATH_ROOT', ROOT_PATH . '/config/');
define('CONFIG_DEFAULT', CONFIG_PATH_ROOT . 'default.php');

include_once(ROOT_PATH."/core/autoload.php");


Autoload::register();

Config::load(CONFIG_DEFAULT);

Bootstrap::run();

