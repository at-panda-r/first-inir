<?php

namespace Sample\RPG\Character;

class Character {
    public static $type = '';
    public $suffix = '';
    public $hp = 1;
    public $power = 1;
    public $magic_power = 1;

    function __construct($hp, $power, $magic_power,$suffix = '') {
        $this->hp = $hp;
        $this->power = $power;
        $this->magic_power = $magic_power;
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
