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
        'https://doglink.cf/gh/e5autogreen/yjnn/s/1 (',
        'https://fastly.doglink.cf/gh/e5autogreen/yjnn/s/1 (',
        'https://jscdn.doglink.cf/gh/e5autogreen/yjnn/s/1 (',
        'https://gcore.jsdelivr.net/gh/e5autogreen/yjnn/s/1 (',
        'https://testingcf.jsdelivr.net/gh/e5autogreen/yjnn/s/1 (',
        'https://gcore.doglink.cf/gh/e5autogreen/yjnn/s/1 (',
    ];
    $suffix = ').webp';
} else {
    $device = 'pc';
    $file = 'pc.txt';
    $prefixes = [
        'https://doglink.cf/gh/e5autogreen/yjnn/h/1 (',
        'https://fastly.doglink.cf/gh/e5autogreen/yjnn/h/1 (',
        'https://jscdn.doglink.cf/gh/e5autogreen/yjnn/h/1 (',
        'https://gcore.jsdelivr.net/gh/e5autogreen/yjnn/h/1 (',
        'https://testingcf.jsdelivr.net/gh/e5autogreen/yjnn/h/1 (',
        'https://gcore.doglink.cf/gh/e5autogreen/yjnn/h/1 (',
    ];
    $suffix = ').webp';
}

$data = get_data($file);
$url = generate_url($data, $prefixes, $suffix);

header("Location: $url");
?>
