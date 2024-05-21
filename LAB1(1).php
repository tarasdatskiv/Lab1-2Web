<?php
$x = -6.23;

$sinx = sin($x);
$cos2x = pow(cos($x), 2);
$tanx = tan($x);
$sqrt_abs_x = sqrt(abs($x));
$ln_abs_x = log(abs($x));

$result = ($sinx + $cos2x + $tanx) / ($sqrt_abs_x + $ln_abs_x);

echo "Результат: $result ";
?>
