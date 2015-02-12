<?php

  session_start();

  include ("check_login.php");





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
                  <li><a data-toggle="modal" data-target="#login">Sign in</a></li>
                </ul>
              </nav>
            </div>
          </div>
        <form action="index.php" method="POST">
          <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="color:black;text-shadow:none">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title"  id="myModalLabel">Please Sign In</h4>
                </div>
                <div class="modal-body">                  
                    <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" /></br>
                    <input type="password" class="form-control" name="password" placeholder="Password" required=""/> 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" name="submit1" class="btn btn-primary">Sign In</button>
                </div>
              </div>
            </div>
          </div>
        </form>

          <div class="inner cover">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="dist/image/picture-show1.jpg" alt="...">
                  <div class="carousel-caption">
                    1
                  </div>
                </div>
                <div class="item">
                  <img src="dist/image/picture-show2.jpg" alt="...">
                  <div class="carousel-caption">
                    2
                  </div>
                </div>
                <div class="item">
                  <img src="dist/image/picture-show3.jpg" alt="...">
                  <div class="carousel-caption">
                    3
                  </div>
                </div>
                <div class="item">
                  <img src="dist/image/picture-show4.jpg" alt="...">
                  <div class="carousel-caption">
                    4
                  </div>
                </div>
              </div>
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              </ol>
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
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
