<?php
// function FizzBuzz($number) {
// if ($number % 15 == 0) {
//     return 'FizzBuzz' . PHP_EOL;
// }elseif ($number % 3 == 0) {
//     return 'Fizz' . PHP_EOL;
// }elseif ($number % 5 == 0) {
//     return 'Buzz' . PHP_EOL;
// }else {
//     return $number;
// }
// }
// print FizzBuzz(1);

// $today = new DateTime();
// print($today -> format('G時i分s秒'));

// $i = 1
// while ($i <=365) {
//     print $i . PHP_EOL;
//     $i = $i + 1;
// }

if (date('G') < 9) {
    print '※現在受付時間外です。' . PHP_EOL;
}else {
    print 'ようこぞ' . PHP_EOL;
}
?>