<?php
require_once __DIR__ . '/vendor/autoload.php';

use wechatPayLite\Tools as myClass;
use wechatPayLite\Base\Helps as Helps;
use wechatPayLite\WechatPay;

// $miniUpload = new myClass();
// $miniUpload->Hello();

// $miniUpload = new Helps();
// $miniUpload->test();

$WechatPay = new WechatPay();
$WechatPay->unifiedOrder();


?>