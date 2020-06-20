<?php
    try {
    $db = new PDO('mysql:dbname=todo_app;host=localhost;charset=utf8','root','root');
    } catch(PDOException $e) {
        print 'DB接続エラー:' . $e->getMessage();
    }

    $sql ='SELECT * FROM tasks WHERE id = :id';
    $statement = $db->prepare($sql);
    $statement->bindParam(':id',$_GET['id'],PDO::PARAM_INT);
    $statement->execute();
    $res = $statement->fetch();

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>edit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <header style="background-color: #FFCCCC" >
            <h1 class= "text-center">TASK LIST</h1>
        </header>
            <h2 mt-5 style="font-size: 1.5rem">taskの編集</h2>
            <form action="show.php?id=<?php echo $res['id'] ?>" method="POST">
                <input type="text" name="update" value="<?php echo $res['task']?>">
                <input type="submit" value="更新">
           </form>
    </body>
</html>