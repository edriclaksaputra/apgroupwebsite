<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="style/images/favicon.png">
<title>a+pgrp architecture and master planning</title>
<!-- Bootstrap core CSS -->
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/plugins.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link href="style/css/color/blue.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="style/type/icons.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="onepage">
<div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
  <div class="navbar" style="background: rgba(29,29,33,1) !important;">
    <div class="navbar-header">
      <div class="basic-wrapper">
        <div class="navbar-brand"> <a href="/"><img src="#" srcset="style/images/logoapgrp.png 1x, style/images/logoapgrp.png 2x" class="logo-light" alt="" /><img src="#" srcset="style/images/logoapgrp.png 1x, style/images/logoapgrp.png 2x" class="logo-dark" alt="" /></a> </div>
        <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a> </div>
      <!-- /.basic-wrapper --> 
    </div>
    <!-- /.navbar-header -->
    <nav class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="/" title="home">Home</a></li>
        <li><a href="/" title="about">About</a></li>
        <li class="current"><a href="/listprojects" title="portofolio">Projects</a></li>
        <li><a href="/" title="locations">Locations</a></li>
        <li><a href="/" title="jobs">Clients</a></li>
      </ul>
      <!-- /.navbar-nav --> 
    </nav>
    <!-- /.navbar-collapse -->
    <div class="social-wrapper">
      <ul class="social naked" style="margin-right: 2%">
        <li><a href="#"><i class="icon-s-facebook"></i></a></li>
        <li><a href="#"><i class="icon-s-linkedin"></i></a></li>
        <li><a href="#"><i class="icon-s-instagram"></i></a></li>
      </ul>
      <!-- /.social --> 
    </div>
    <!-- /.social-wrapper --> 
  </div>
  <!-- /.navbar -->

  <div class="offset"></div>
  <div class="light-wrapper">
    <div class="container inner">
      <div class="basic-slider">
        <div class="item"><img src="style/images/art/dproject1.jpg" alt="" /> </div>
        <div class="item"><img src="style/images/art/dproject2.jpg" alt="" /> </div>
        <div class="item"><img src="style/images/art/bs3.jpg" alt="" /> </div>
      </div>
      <!-- /.basic-slider -->
      
      <div class="divide30"></div>
      <h2 class="post-title">Nanjing University Hospital, China (*Example)</h2>
      <div class="meta"><span class="date">14 Aug 2015</span><span>Kategori Bangunan</span><span>Nama Client Disini</span></div>
      <p>Nulla vitae elit libero, a pharetra augue. Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.light-wrapper -->
  <div class="dark-wrapper">
    <div class="container inner2 navigation"> 
      <a href="/listprojects"><input type="button" class="btn-customback" style="border-width: 1px" value="Back to Portfolio"></a>
      <a href="/projectdetail"><input type="button" class="btn-customback pull-right" style="border-width: 1px; padding: 14px 15px 14px; margin-right: 5px" value="Next Post"></a>
      <a href="/projectdetail"><input type="button" class="btn-customback pull-right" style="border-width: 1px; padding: 14px 15px 14px; margin-right: 5px" value="Prev Post"></a>
   </div>
   <!-- /.container -->
  </div>
  <!-- /.dark-wrapper -->
@include('layouts.footer')