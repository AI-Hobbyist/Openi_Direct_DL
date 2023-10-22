<?php
//加载配置文件
require_once $_SERVER['DOCUMENT_ROOT'] ."/config.php";
//加载所有类
spl_autoload_register("_autoload");
function _autoload($classname) {
    require_once($_SERVER['DOCUMENT_ROOT'] . "/inc/classes/" . strtolower($classname) . ".php");
}
//加载语言文件
foreach (glob($_SERVER['DOCUMENT_ROOT']."/inc/lang/"."*.php") as $filename) {
    include($filename);
}
//加载函数文件
foreach (glob($_SERVER['DOCUMENT_ROOT']."/inc/func/"."*.php") as $filename) {
    include($filename);
}

#$rcon = new rcon("play.9jcy.cn", 52076, "A+Koakuma+135");