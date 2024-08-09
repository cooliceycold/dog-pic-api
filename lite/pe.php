<?php
function get_data($file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    return $lines[array_rand($lines)];
}

$file = 'pe.txt'; // 你的txt文件名
$data = get_data($file);

$prefix = '前缀'; // 你的前缀
$suffix = '后缀'; // 你的后缀
$url = $prefix . $data . $suffix;

header("Location: $url");
?>