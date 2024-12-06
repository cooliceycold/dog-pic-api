<?php
function get_data($file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    return $lines[array_rand($lines)];
}

$file = 'pe.txt'; 
$data = get_data($file);
$prefix = 'https://doglink.cf/gh/dogpicapi/cm/s'; // 前缀
$suffix = ').webp'; // 后缀
$url = $prefix . $data . $suffix;

header("Location: $url");
?>