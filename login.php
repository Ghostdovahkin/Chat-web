<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <div class="row">
        <div class="col-sm-4">
        <h4>Chat Login:</h4>
        <form method="POST">
        <div class="form-group">
        <?php if($loginError){ ?>
        <div class="alert alert-warning"><?php echo $loginError; ?></div>
        <?php } ?>
        </div>
        <div class="form-group">
        <label for="username">User:</label>
        <input type="username" class="form-control" name="username" required>
        </div>
        <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="pwd" required>
        </div>
        <button type="submit" name="login" class="btn btn-info">Login</button>
        </form>
        </div>
        </div>
</body>
</html>