<?php

require_once 'human.php';
require_once 'thinkable.php';


class Main {
    static function start() {
        // コンストラクタの実行
        // インスタンスの生成と、変数への代入
        $tanaka = new Human("田中　太郎",25,"電車");
        $suzuki = new Human("鈴木　次郎",30,"野球");
        $sato = new Human("佐藤　花子",20,"映画");

        // 関数を実行
        $tanaka ->say();
    }
}

Main::start();
