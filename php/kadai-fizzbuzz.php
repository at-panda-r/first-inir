<?php
function fizzbuzz($number) {
        if ($number % 15 == 0) {
        return 'FizzBuzz'. PHP_EOL;
    }elseif ($number % 3 == 0) {
        return 'Fizz'. PHP_EOL;
    }elseif ($number % 5 == 0) {
        return 'Buzz'. PHP_EOL;
    }else {
        return $number. PHP_EOL;
    }
    }

print fizzbuzz(1);
print fizzbuzz(3);
print fizzbuzz(5);
print fizzbuzz(15);

?>