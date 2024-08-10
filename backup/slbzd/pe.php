<?php
function get_data($file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    return $lines[array_rand($lines)];
}

$file = 'pe.txt'; // 你的txt文件名
$data = get_data($file);

$prefix = 'https://testingcf.jsdelivr.net/gh/e5autogreen/slbzd/s/S ('; // 你的前缀
$suffix = ').webp'; // 你的后缀
$url = $prefix . $data . $suffix;

header("Location: $url");
?>