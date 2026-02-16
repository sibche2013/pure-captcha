Create captcha_config.php in your project root
<?php
return [
    'lang'        => 'fa',        // fa | en
    'font'        => 'arial.ttf',
    'expiry'      => 300,
    'length'      => 5,
    'width'       => 170,
    'height'      => 55,
    'font_size'   => 22,
    'char_type'   => 'mixed',     // mixed | letters | numbers
    'noise_level' => 'medium',    // low | medium | high | extreme | nightmare
];
