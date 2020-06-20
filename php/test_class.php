<?php

class Character {
    public static $type = '';
    public $suffix = '';
    public $hp = 1;
    public $power = 1;

    function __construct($hp, $power, $suffix = '') {
        $this->hp = $hp;
        $this->power = $power;
        $this->suffix = $suffix;
    }

    function name() {
        return $this::$type . $this->suffix;
    }

    function attack($character) {
        print $this->name() . 'が' . $character->name() . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;

        $character->hp = $character->hp - $this->power;

        if ($character->hp <= 0) {
            $this->defeat($character);
        }
    }

    function defeat($character) {
        print $this->name() . 'は' . $character->name() . 'を倒した！' . PHP_EOL;
    }

    static function description() {
        print 'このゲームのキャラクターです' . PHP_EOL;
    }
}

class Slime extends Character {
    public static $type = 'スライム';

    static function description() {
        print self::$type . 'は、最弱のモンスターだ！' . PHP_EOL;
    }
}

class Hero extends Character {
    public static $type = '主人公';

    static function description() {
        print self::$type . 'は、この世界を守る勇者だ！' . PHP_EOL;
    }
}

Slime::description();
Hero::description();

$slime_A = new Slime(10, 3, 'A');
$hero = new Hero(1000, 30);

$slime_A->attack($hero);
$hero->attack($slime_A);





