<?php

/**
 * @Author: zuoliguang
 * @Date:   2018-09-07 13:17:33
 * @Last Modified by:   zuoliguang
 * @Last Modified time: 2018-10-30 10:53:57
 */
// 开启调试模式 debug/produce
$product_env = ($_GET['dev'] == "debug") ? "debug" : "produce";

if ($product_env == "debug") {

	error_reporting(E_ALL ^ E_DEPRECATED);

	ini_set('display_errors', 1);
}

define('APP_PATH', dirname(__FILE__));

$app = new Yaf_Application( APP_PATH . "/conf/application.ini");

$app->bootstrap()->run();