<?php
function get_data($file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    return $lines[array_rand($lines)];
}

function is_mobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

$file = is_mobile() ? 'pe.txt' : 'pc.txt';
$data = get_data($file);

$prefix = 'https://doglink.cf/gh/cooliceycold/qlyh/webp/h/'; // 你的前缀
$suffix = '-tuya.webp'; // 你的后缀
$url = $prefix . $data . $suffix;

header("Location: $url");
?>