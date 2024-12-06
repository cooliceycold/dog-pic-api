<?php
function get_data($file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    return $lines[array_rand($lines)];
}

$file = 'pe.txt'; 
$data = get_data($file);

$prefix = 'https://fastly.doglink.cf/gh/e5autogreen/yjnn/s/1 ('; // 前缀
$suffix = ').webp'; // 后缀
$url = $prefix . $data . $suffix;

header("Location: $url");
?>