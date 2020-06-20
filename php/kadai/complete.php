<?php
$_POST['target_company'] ="";
$_POST['target_name'] ="";
$_POST['target_email'] ="";
$_POST['target_tel'] ="";
$_POST['target_content'] ="";

if (empty ($_POST['target_company'] )) {

    echo $_POST['target_company'] ;
};
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

        <title>送信完了 | サンプル株式会社</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <a href="#" class="navbar-brand">サンプル株式会社</a>
                <button type="button" class="navba-toggler" data-toggler="collapse" data-toggler="#nav-bar">
                    <span class="navba-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#">会社概要</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">ニュース</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">採用情報</a></li>
                        <li class="nav-item active"><a href="#" class="nav-link">お問い合わせ</a></li>
                    </ul>
                </div>
            </nav>
        <div class="container">
            <h1 class="mt-4 pb-4 border-bottom">送信完了</h1>
            <p>ありがとうございました。送信を受け付けました。</p>
            <p>3営業日以内をめどにご返信いたしますので、しばらくお待ちください。</p>
            <h2>送信内容</h2>
            <table class="mt-4 table table-border">
                <tr>
                    <th>会社名</th>
                    <td>
                       <?php print htmlspecialchars($_POST['company'], ENT_QUOTES, 'UTF-8');?> </td>
                </tr>
                <tr>
                    <th>氏名</th>
                    <td><?php print htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');?></td>
                </tr>
                <tr>
                    <th>メール</th>
                    <td><?php print htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');?></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><?php print htmlspecialchars($_POST['tel'], ENT_QUOTES, 'UTF-8');?></td>
                </tr>
                <tr>
                    <th>内容</th>
                    <td><?php print htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');?></td>
                </tr>
           </table>

            <div class="text-center mb-4">
                <a href="contact.html" class="btn btn-success">戻る</a>
            </div>
        </div>
        <footer class="text-center pt-3 border-top">
            &copy; 2018 SAMPLE Inc.
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS, then Font Awesome -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>
