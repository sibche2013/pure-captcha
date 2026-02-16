<?php
require 'vendor/autoload.php';
use AminArjmand\PureCaptcha\Captcha;

if (Captcha::validate(\$_POST['captcha'] ?? '')) {
    echo '✅ Valid!';
} else {
    echo '❌ Invalid!';
}