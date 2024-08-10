<?php
function get_data($file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    return $lines[array_rand($lines)];
}

function generate_url($data, $prefix, $suffix) {
    return $prefix . $data . $suffix;
}

// 检测设备类型
$user_agent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($user_agent, 'Mobile')) {
    $device = 'mobile';
    $file = 'pe.txt';
    $prefix = 'https://testingcf.jsdelivr.net/gh/e5autogreen/slbzd/s/S (';
    $suffix = ').webp';
} else {
    $device = 'pc';
    $file = 'pc.txt';
    $prefix = 'https://testingcf.jsdelivr.net/gh/e5autogreen/slbzd/h/H (';
    $suffix = ').webp';
}

$data = get_data($file);
$url = generate_url($data, $prefix, $suffix);

header("Location: $url");
?>
