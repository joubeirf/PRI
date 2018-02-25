<php>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIGN-UP</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="sign_up.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home_page.php">IONIS</a>        
    </div>

   
 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      
      </div>
    </div> 
  <form class="form-horizontal" action="api_sign.php" method="post">
    <div class="container">

        <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label"><span class="details">First Name</span></label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="inputEmail3" placeholder="First Name" name="firstname">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label"><span class="details">Last Name</span></label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="inputEmail3" placeholder="Last Name" name="lastname">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label"><span class="details">Email</span></label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><span class="details">Password</span></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <!-- <button type="submit" class="btn btn-default">Sign in</button> -->
      <button type="submit" class="btn btn-primary">SIGN UP</button>
    </div>
  </div>
</form>




    </div>


  <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</php>










