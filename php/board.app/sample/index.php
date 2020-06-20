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
                        
            
    <h1>メッセージ一覧</h1>

            <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                                <tr>
                    <td><a href="http://serene-everglades-62163.herokuapp.com/messages/5">5</a></td>
                    <td>sasa</td>
                    <td>asasa</td>
                </tr>
                                <tr>
                    <td><a href="http://serene-everglades-62163.herokuapp.com/messages/1">1</a></td>
                    <td>aa</td>
                    <td>aaaa2</td>
                </tr>
            </tbody>
        </table>
        
    <a href="http://serene-everglades-62163.herokuapp.com/messages/create" class="btn btn-primary">新規メッセージの投稿</a>
        </div>        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>