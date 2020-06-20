<?php
class Animal {
    public $name = '';
    public $age = '';

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    function say() {
        print '私は' . $this->name . 'です。' . $this->age . 'です。';

    }
}

// // 以下の2行は動作確認のための記述です。確認できたらコメントアウトしておきましょう。
// $animal = new Animal("田中 太郎", 25);
// $animal->say();



