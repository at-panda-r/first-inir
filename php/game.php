<?php

namespace Sample\RPG;

require_once 'hero.php';
require_once 'slime.php';

use Sample\RPG\Character\Hero;



class Game {
    static function start() {
        // use していないので名前空間が必要
        \Sample\RPG\Character\Slime::description();
        // use した Hero だけは名前空間が必要無し
        Hero::description();
        // 相対的な名前空間でも良い
        // このファイルの名前空間は Sample\RPG なので以降を補足すれば良い
        // 相対的な名前空間の場合には最初の \ は入れない
        $slime_A = new Character\Slime(10, 3, 0, 'A');
        $hero = new Hero(1000, 30, 20);

        $slime_A->attack($hero);
        $hero->magic_attack($slime_A);
    }
}



Game::start();

