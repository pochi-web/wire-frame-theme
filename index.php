<!DOCTYPE html>
  <html lang="ja">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WordPressでワイヤー組めたらよくない？</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
  <!-- Bootstrap -->
  <link href="<?php echo get_template_directory_uri();?>/css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-6">
<h1 class="site_title"><?php bloginfo();?></h1>
 </div>
   <div class="col-md-6">
  <p class="site_description"><?php bloginfo('description');?></p>
	  </div>
  </div>
  </div>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">LOGO</a>
        </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="defaultNavbar1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link<span class="sr-only">(current)</span></a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
<div class="container-fluid main_image">
 <div class="row">
  <img src="https://placehold.jp/1280x660.png" alt="">
  <h1><?php bloginfo('description');?></h1>
  </div>
  </div>
  <div class="container " id="main_section">
  <div class="row">
   
    <div class="col-lg-3 col-md-6 col-xs-12">
    <img src="http://placehold.jp/280x280.png" alt="" class="img-rounded img-responsive center-block" >
    <p class="caption">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </div>
<div class="col-lg-3 col-md-6 col-xs-12">
    <img src="http://placehold.jp/280x280.png" alt="" class="img-rounded img-responsive center-block" >
    <p class="caption">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </div> 
<div class="col-lg-3 col-md-6 col-xs-12">
    <img src="http://placehold.jp/280x280.png" alt="" class="img-rounded img-responsive center-block" >
    <p class="caption">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </div>
<div class="col-lg-3 col-md-6 col-xs-12">
    <img src="http://placehold.jp/280x280.png" alt="" class="img-rounded img-responsive center-block" >
    <p class="caption">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </div>  </div>
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="<?php echo get_template_directory_uri();?>/js/jquery-1.11.3.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script src="<?php echo get_template_directory_uri();?>/js/bootstrap-3.3.7.js"></script>
</body>
  </html>
