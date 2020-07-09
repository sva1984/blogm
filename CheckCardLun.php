<?php
$cart = '000146424';
$cart = str_split($cart);

foreach ($cart as $k => $val){
    if ($k%2 === 0){
        $cart[$k] = $cart[$k] * 2;
        if ($cart[$k] > 9){
            $cart[$k] -= 9;
        }
    }
}
$sumCart = array_sum($cart);
if ($sumCart%10 === 0){
    echo "Good cart. Paid" . PHP_EOL;
}else echo "Alarm" . PHP_EOL;
echo $sumCart . PHP_EOL;
return ($sumCart%10 === 0);
