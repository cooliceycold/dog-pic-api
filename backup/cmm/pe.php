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
        'https://doglink.cf/gh/dogpicapi/cm/s',
        'https://fastly.doglink.cf/gh/dogpicapi/cm/s',
        'https://jscdn.doglink.cf/gh/dogpicapi/cm/s',
        'https://gcore.jsdelivr.net/gh/dogpicapi/cm/s',
        'https://testingcf.jsdelivr.net/gh/dogpicapi/cm/s',
        'https://gcore.doglink.cf/gh/dogpicapi/cm/s',
];
$suffix = ').webp'; // 你的后缀
$url = generate_url($data, $prefixes, $suffix);

header("Location: $url");
?>
