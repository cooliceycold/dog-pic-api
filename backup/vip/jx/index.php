<?php
function get_data($file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    return $lines[array_rand($lines)];
}

function generate_url($data, $prefixes, $suffix) {
    $prefix = $prefixes[array_rand($prefixes)];
    return $prefix . $data . $suffix;
}

$file = 'img.txt'; // 你的txt文件名
$data = get_data($file);
$prefixes = [
        'https://doglink.cf/gh/cooliceycold/pic/vip/jx/',
        'https://fastly.doglink.cf/gh/cooliceycold/pic/vip/jx/',
        'https://jscdn.doglink.cf/gh/cooliceycold/pic/vip/jx/',
        'https://gcore.jsdelivr.net/gh/cooliceycold/pic/vip/jx/',
        'https://testingcf.jsdelivr.net/gh/cooliceycold/pic/vip/jx/',
        'https://gcore.doglink.cf/gh/cooliceycold/pic/vip/jx/',
    ];
$suffix = '-tuya.webp';
$url = generate_url($data, $prefixes, $suffix);

header("Location: $url");
?>
