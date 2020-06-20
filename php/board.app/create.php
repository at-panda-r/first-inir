


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>create</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
 <body>
        <header style="background-color: #FFCCCC" >
        <h1 class= "text-center">board</h1>
        </header>
        <h2 mt-5 style="font-size: 1.5rem">新規作成</h2>
        <form action="index.php" method="POST" class="form-inline mb-2">
        <label class="col-sm-2">id：</label>
                        <div class="col-sm-10">
                            <input type="text" name="id" class="form-control"  >
                        </div>
                        <label class="col-sm-2">title：</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control"  >
                        </div>
                        <label class="col-sm-2">content：</label>
                        <div class="col-sm-10">
                            <input type="text" name="content" class="form-control"  >
                        </div>
                </div>
            </form>
            <form action="index.php" method="post" >
                <input type="submit" name="create_todo" value="登録">
            </form>
 </body>
</html>