
<?php
function fizzbuzz() {
    $max = 100;
    $number = mt_rand();
     $number = 1; $number <= $max; $number= $number + 1
                 if ($number % 15 == 0) {
            print 'FizzBuzz'. PHP_EOL;
    }elseif ($number % 3 == 0) {
        print 'Fizz'. PHP_EOL;
    }elseif ($number % 5 == 0) {
        print 'Buzz'. PHP_EOL;
    }else {
        print $number. PHP_EOL;
    

fizzbuzz()

?>

