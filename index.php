<?php
session_start();
require_once(__DIR__ . "/includes/functions.php");
if(!isset($_SESSION['studentName']) || !isset($_SESSION['studentMail'])){
	header("Location: login.php");
	die();
}
?>
<!doctype html>
<!-- InstanceBeginEditable name="phpIncludes" --><!-- InstanceEndEditable -->
<html><!-- InstanceBegin template="/Templates/student.dwt" codeOutsideHTMLIsLocked="true" -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Template</title>
<!-- InstanceEndEditable -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

</head>

<body style="padding-top: 70px">
<div class="container">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="#">Teacher Assistantship Application</a></div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="topFixedNavbar1">
<ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Home</a></li>
          <li class="dropdown"><a href="a" class="dropdown-toggle" data-toggle="dropdown">Apply Online<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="apply-ta-divison.php">Division Work</a></li>
          <li><a href="apply-ta-course.php">Course Work</a></li>
        </ul>
          </li>
          <li><a href="#">Application Status</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
<div class="row">
    <div class="col-md-12"><img src="img/bits-banner.png" class="img-responsive" alt="Placeholder image"></div>
  </div>
  <div class="row">
    <div class="col-md-12">
    <!-- InstanceBeginEditable name="EditRegion3" -->
      <h1>Heading</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet doloremque cum maxime architecto veritatis id omnis magni dignissimos sint eius, ea, iure praesentium aspernatur error incidunt, quos harum blanditiis quo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit quidem possimus molestiae rerum incidunt iste, consequatur laborum ullam accusantium cumque in, voluptas porro autem repudiandae ipsum, officiis fugiat debitis voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa quaerat, quo unde quod eos delectus cupiditate eligendi quia iusto repudiandae corporis dignissimos optio! Numquam dicta vero, corporis quis, recusandae doloribus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat enim suscipit, ullam minus. Sapiente qui quas, cupiditate quo quos libero quidem? Nobis, earum, laudantium minus incidunt natus expedita placeat non.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque optio veritatis quam iure rem culpa sequi beatae natus ab dolorum, temporibus, alias in nemo vel quaerat aut ullam quas officiis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, quisquam consequatur esse quasi perspiciatis inventore velit saepe dolore hic aliquid tempora nisi sunt deleniti, iusto itaque dicta omnis earum. Accusamus.Lorem ipsum door sit amet, consectetur adipisicing elit. Soluta sunt facere praesentium corporis odio vitae ab fugiat ut, earum nisi, natus, error incidunt cupiditate fugit minima quae doloribus repudiandae obcaecati.</p>
      <!-- InstanceEndEditable -->
 </div>
  </div>
</div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
<!-- InstanceBeginEditable name="PostBody" --><!-- InstanceEndEditable -->
<!-- InstanceEnd --></html>
