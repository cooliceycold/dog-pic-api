<?php
function get_data($file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    return $lines[array_rand($lines)];
}

$file = 'pc.txt'; // 你的txt文件名
$data = get_data($file);
$prefix = 'https://doglink.cf/gh/e5autogreen/yt/h/1 (';
$suffix = ').webp'; // 你的后缀
$url = $prefix . $data . $suffix;

header("Location: $url");
?>