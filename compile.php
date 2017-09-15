<?php

define('BASE_URL', '//img.eeyes.net/eeyes_common/');

$html = file_get_contents(__DIR__ . '/index.html');

$html = preg_replace('/<meta.*?>/', '', $html);
$html = preg_replace('/[\s\0\x0B\xC2\xA0]+/su', ' ', $html);
$html = preg_replace('/> </su', '><', $html);
$html = trim($html);

$html = str_replace('./', BASE_URL, $html);

$json = json_encode($html);

$js = "document.write($json);";

file_put_contents(__DIR__ . '/index.js', $js);

