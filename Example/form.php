<?php
require 'vendor/autoload.php';
use AminArjmand\PureCaptcha\Captcha;
?>
<!DOCTYPE html>
<html>
<head>
    <?= Captcha::styles() ?>
</head>
<body>
    <form method="POST" action="submit.php">
        <?= Captcha::html() ?>
        <button type="submit">Submit</button>
    </form>
</body>
</html>