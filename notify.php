<?php
require_once './vendor/autoload.php';
$token = '2xNopXLMlRDOW6OLKTQvMvLJE6JZL0pFWwMTYXiUgCT';
$ln = new KS\Line\LineNotify($token);
$text = 'สวัสดี Line Notify';
$ln->send($text);