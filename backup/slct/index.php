<?php
function get_data($file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    return $lines[array_rand($lines)];
}

function generate_url($data, $prefixes, $suffix) {
    $prefix = $prefixes[array_rand($prefixes)];
    return $prefix . $data . $suffix;
}

// 检测设备类型
$user_agent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($user_agent, 'Mobile')) {
    $device = 'mobile';
    $file = 'pe.txt';
    $prefixes = [
        'https://doglink.cf/gh/cooliceycold/slct/',
        'https://fastly.doglink.cf/gh/cooliceycold/slct/',
        'https://jscdn.doglink.cf/gh/cooliceycold/slct/',
        'https://gcore.jsdelivr.net/gh/cooliceycold/slct/',
        'https://testingcf.jsdelivr.net/gh/cooliceycold/slct/',
        'https://gcore.doglink.cf/gh/cooliceycold/slct/',
    ];
    $suffix = ')-tuya.webp';
} else {
    $device = 'pc';
    $file = 'pc.txt';
    $prefixes = [
        'https://doglink.cf/gh/cooliceycold/slct/',
        'https://fastly.doglink.cf/gh/cooliceycold/slct/',
        'https://jscdn.doglink.cf/gh/cooliceycold/slct/',
        'https://gcore.jsdelivr.net/gh/cooliceycold/slct/',
        'https://testingcf.jsdelivr.net/gh/cooliceycold/slct/',
        'https://gcore.doglink.cf/gh/cooliceycold/slct/',
    ];
    $suffix = ')-tuya.webp';
}

$data = get_data($file);
$url = generate_url($data, $prefixes, $suffix);

header("Location: $url");
?>
