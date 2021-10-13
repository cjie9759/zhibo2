<?php
// 引入对应class文件 建议采用自动加载的方式
// include("../base.php");
// include("../api.php");

// 自动加载
spl_autoload_register(function ($class_name) {
    require_once '../' . $class_name . '.php';
});


// phpinfo();
// pathinfo处理
$pathinfo = explode('/', $_SERVER['PATH_INFO']);
$s1 = $pathinfo[1] ?? 'index';
$s2 = $pathinfo[2] ?? 'index';
// $post = json_decode($_POST['json']) ?? $_POST;

// 过滤非法请求 安全
// define('SafeS', ['api', 'index']);
// in_array($s1, SafeS) || exit('erro request');
$safeS = [
    "base" => ["test", "demo"],
    "api" => ["getMsg", "upData"]
];
// isset($safeS[$s1]) && in_array($s2, $safeS[$s1]) ||  exit('erro request');

// 实例化class、分发请求
$demo = new $s1;
echo $demo->$s2();