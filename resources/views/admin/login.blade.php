
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/bootstrap/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/bootstrap/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="container">
        <form class="form-signin" action="" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
            @if ($errors->all())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name='email' id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name='password' id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
              <label>
                <input type="checkbox"name='remember' value="remember-me"> Remember me
              </label>
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
        
    </div> <!-- /container -->
   

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
