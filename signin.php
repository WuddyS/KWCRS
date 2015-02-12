<?php

  session_start();




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>

        Kw &bullet; Computer Repair Service

    </title>
    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!--Customize style with CSS-->
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- body -->
    <div class="main-wrapper">

      <div class="main-wrapper-inner">

        <div class="main-container">

          <div class="navhead-box clearfix">
            <div class="inner">
              <h2 class="masthead-brand logo">Computer Repair Service</h2>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Sign In</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner">
            <div class="wrapper">
              <form class="form-signin">       
                <h2 class="form-signin-heading">Please login</h2>
                <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
                <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
                <label class="checkbox">
                  <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                </label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
              </form>
            </div>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>© Copyright @2015 Service for <a href="www.kw.ac.th">Kanlayanawat school</a> by <a href="http://www.fb.com/Wuddy.Sarawut">WuddyS.</a> ,Powered by <a href="http://getbootstrap.com">Bootstrap</a></p>
            </div>
          </div>

        </div>

      </div>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
