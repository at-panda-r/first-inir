
<?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour = (int)date("G");
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <p>今は<?php print $now_hour; ?>時です。</p>
        <?php if (6 <= $now_hour && $now_hour < 12) { ?>
            <p>おはよう、太郎さん</p>
        <?php } elseif (12 <= $now_hour && $now_hour < 18) { ?>
            <p>こんにちは、太郎さん</p>
        <?php } else { ?>
            <p>こんばんは、太郎さん</p>
        <?php } ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <ul>
            <?php for($i = 1; $i < 10; $i++) { ?>
                <li><?php print '3 x ' . $i . ' = ' . (3 * $i);?></li>
            <?php } ?>
        </ul>
    </body>
</html>


