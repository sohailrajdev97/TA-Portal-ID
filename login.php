<?php
require_once(__DIR__ . "/includes/functions.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-signin-client_id" content="289322729020-s3kuiemg06568d5n0ehlmp1e1dmdstra.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<title>Login</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/login.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body style="padding-top: 70px">
<div class="container">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="#">Teacher Assistantship Application</a></div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="topFixedNavbar1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://id.bits-hyderabad.ac.in">Home</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container-fluid --> 
  </nav>
  <div class="row">
    <div class="col-md-12"><img src="img/bits-banner.png" class="img-responsive" alt="Placeholder image"> </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h1>Student Login</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="g-signin2" data-onsuccess="onSignIn"></div>
    </div>
  </div>
</div>
<script>
	function onSignIn(googleUser) {
  		var profile = googleUser.getBasicProfile();
		console.log(profile);
 /* console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.*/
}
</script> 
<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.js"></script>
</body>
</html>
