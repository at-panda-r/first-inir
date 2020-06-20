
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>MessageBoard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>

    <body>
        <header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="/">MessageBoard</a>
         
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
            </ul>
        </div>
    </nav>
</header>        
        <div class="container">
                        
            
    <h1>メッセージ新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            <form method="POST" action="http://serene-everglades-62163.herokuapp.com/messages" accept-charset="UTF-8"><input name="_token" type="hidden" value="a6HlvCQNOW1JiWTaqXxpYNh9CvebKKYvTbwIfxcS">
                <div class="form-group">
                    <label for="title">タイトル:</label>
                    <input class="form-control" name="title" type="text" id="title">
                </div>
                <div class="form-group">
                    <label for="content">メッセージ:</label>
                    <input class="form-control" name="content" type="text" id="content">
                </div>
        
                <input class="btn btn-primary" type="submit" value="投稿">
        
            </form>
        </div>
    </div>
        </div>        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>