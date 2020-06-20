<?php

namespace Sample\RPG\Characters;

trait Magic {
    public function magic_attack($character) {
        print $this->name() . "が" . $character->name() . "を魔法で攻撃して" . $this->magic_power . 'ポイントのダメージを与えた！' . PHP_EOL;

        $character->hp = $character->hp - $this->magic_power;

        if ($character->hp <= 0) {
            $this->defeat($character);
        }
    }
}
