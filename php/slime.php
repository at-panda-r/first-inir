<?php
namespace Sample\RPG\Character;


require_once 'character.php';

class Slime extends Character {
    public static $type = 'スライム';

    static function description() {
        print self::$type . 'は、最弱のモンスターだ！' . PHP_EOL;
    }
}
