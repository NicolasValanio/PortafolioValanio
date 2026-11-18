<?php
declare(strict_types=1);
$config = require __DIR__ . '/config.php';
header('Content-Type: text/html; charset=utf-8');
$publicConfig = json_encode($config, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE);
$html = file_get_contents(__DIR__ . '/views/portfolio.html');
echo preg_replace_callback('/\/\*CONFIG\*\/\{[^}]*\}/u', static fn() => $publicConfig, $html);
