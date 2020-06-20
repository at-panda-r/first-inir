<?php
namespace Sample\RPG\Character;

use Sample\RPG\Characters\Magic;

require_once 'character.php';
require_once 'magic.php';


class Hero extends Character {
    use Magic;
    public static $type = '主人公';

    static function description() {
        print self::$type . 'は、この世界を守る勇者だ！' . PHP_EOL;
    }
}
