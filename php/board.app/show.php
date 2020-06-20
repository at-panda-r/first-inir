<?php
try {
    $db = new PDO('mysql:dbname=board_app;host=localhost;charset=utf8','root','root');
    } catch(PDOException $e) {
        print 'DB接続エラー:' . $e->getMessage();
    }


if (isset($_POST['update'])) {
    $sql = "UPDATE content SET title = :title, content = :content WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement ->bindParam(':title',$_POST['update'], PDO::PARAM_STR);
    $statement ->bindParam(':content',$_POST['todo'], PDO::PARAM_STR);
    $statement ->bindParam(':id',$_GET['id'], PDO::PARAM_INT);
    $statement->execute();
}

if (isset($_POST['delete_todo'])){
    $sql = "DELETE FROM content  WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement ->bindParam(':id',$_GET['id'],PDO::PARAM_INT);
    $statement->execute();
    header("Location: index.php");
    exit();
    }

    $sql ='SELECT * FROM content WHERE id = :id';
    $statement = $db->prepare($sql);
    $statement->bindParam(':id',$_GET['id'],PDO::PARAM_INT);
    $statement->execute();
    $res = $statement->fetch();


?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>show</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <header style="background-color: #FFCCCC" >
            <h1 class= "text-center">board</h1>
        </header>
        <div>
            <h2 mt-5 style="font-size: 1.5rem">確認</h2>
            <ul>
                <li><?php print $res['id']?></li>
                <li><?php print $res['title']?></li>
                <li><?php print $res['content']?></li>
            </ul>
                <div>
                    <a href="edit.php?id=<?php echo $res['id'] ?>">編集</a>
                </div>
                <form action=""  method="post">
                    <input type="submit" name="delete_todo" value="削　除">
                </form>
        </div>
            <div class="row form-group">
                    <a href="index.php" class="btn btn-success">戻る</a>
            </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
 </body>
</html>