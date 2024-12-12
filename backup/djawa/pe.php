<?php
function get_data($file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    return $lines[array_rand($lines)];
}

function generate_url($data, $prefixes, $suffix) {
    $prefix = $prefixes[array_rand($prefixes)];
    return $prefix . $data . $suffix;
}

$file = 'pc.txt'; // 你的txt文件名
$data = get_data($file);
$prefixes = [
        'https://doglink.cf/gh/e5autogreen/DJAWA/s/DJAWAs (',
        'https://fastly.doglink.cf/gh/e5autogreen/DJAWA/s/DJAWAs (',
        'https://jscdn.doglink.cf/gh/e5autogreen/DJAWA/s/DJAWAs (',
        'https://gcore.jsdelivr.net/gh/e5autogreen/DJAWA/s/DJAWAs (',
        'https://testingcf.jsdelivr.net/gh/e5autogreen/DJAWA/s/DJAWAs (',
        'https://gcore.doglink.cf/gh/e5autogreen/DJAWA/s/DJAWAs (',
];
$suffix = ').webp'; // 你的后缀
$url = generate_url($data, $prefixes, $suffix);

header("Location: $url");
?>
