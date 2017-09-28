<?php

define('BASE_URL', '//img.eeyes.net/eeyes_common/');
define('OUTPUT_DIR', __DIR__ . '/dist');

$html = file_get_contents(__DIR__ . '/index.html');

$html = preg_replace('/<meta.*?>/', '', $html);
$html = preg_replace('/[\s\0\x0B\xC2\xA0]+/su', ' ', $html);
$html = preg_replace('/> </su', '><', $html);
$html = trim($html);

$html = str_replace('./', BASE_URL, $html);

$json = json_encode($html);

$js = "document.write($json);";

if (!file_exists(OUTPUT_DIR)) {
    mkdir(OUTPUT_DIR, 0777, true);
}
file_put_contents(OUTPUT_DIR . '/index.html', $html);
file_put_contents(OUTPUT_DIR . '/index.js', $js);

