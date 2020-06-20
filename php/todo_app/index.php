<?php
    try {
    $db = new PDO('mysql:dbname=todo_app;host=localhost;charset=utf8','root','root');
    $res = $db->query('SELECT * FROM tasks');
    } catch(PDOException $e) {
        print 'DB接続エラー:' . $e->getMessage();
    }
    if (isset($_POST['create_todo'])) {
        $sql = 'INSERT INTO tasks (todo) VALUES (:todo)';
        $statement = $db->prepare($sql);
        $statement->execute();

    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>TASKLIST</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <header style="background-color: #FFCCCC" >
            <h1 class= "text-center">TASK LIST</h1>
        </header>

        <h2 mt-5>aikaのタスク一覧</h2>

        <table class=" table table-striped">
            <thead style ="background-color:#FFFF99">
                <tr>
                    <th>id</th>
                    <td>task</td>
                </tr>
            </thead>
            <tbody style ="background-color:#FFFF99">
              <?php
              foreach ($res as $task) {?>
                <tr>
                    <td> <a href="show.php?id=<?php  echo $task['id']?>"> <?php echo $task['id'] ?>
                        </a>
                    </td>
                    <td><?php echo $task['task'] ?></td>
                </tr>
              <?php } ?>
            </tbody>
        </table>
            <div class=" mb-4">
                <a href="create.php" class="btn btn-success">新規作成</a>
            </div>
    </body>
</html>
