<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="dist/css/styles.min.css" rel="stylesheet">

</head>

<body class="text-center page-signin">
<form action="index.php" method="post" class="form-signin">
    <i class="fas fa-7x fa-heartbeat" style="color: red"></i>
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" name="login-email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="login-password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="remember" value="remember-me"> Se souvenir de moi
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
</form>
</body>
</html>
