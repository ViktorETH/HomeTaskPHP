
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users Messages</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form action="action.php" method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">Ваше имя</label>
            <input type="text" name="user" class="form-control" id="formGroupExampleInput" placeholder="Имя" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Ваше сообщение</label>
            <textarea type="text" name="comment" class="form-control" id="formGroupExampleInput2" placeholder="Коментарий" rows="5" required></textarea>
        </div>

    <input type="submit" name="submit">
    </form>


    </div>

</body>
</html>