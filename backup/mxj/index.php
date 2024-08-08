<?php
// 定义PC和移动端的txt文件路径
$pcFile = 'pc.txt';
$mobileFile = 'pe.txt';

// 检测用户设备类型
function isMobile() {
    return preg_match('/(android|iphone|ipad|ipod|mobile)/i', $_SERVER['HTTP_USER_AGENT']);
}

// 从txt文件中随机获取一个URL
function getRandomUrl($file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $lines[array_rand($lines)];
}

// 根据设备类型选择txt文件
$file = isMobile() ? $mobileFile : $pcFile;

// 获取随机URL
$url = getRandomUrl($file);

// 重定向到随机URL
header("Location: $url");
exit();
?>