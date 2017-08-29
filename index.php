<!DOCTYPE html>
  <html lang="ja">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WordPressでワイヤー組めたらよくない？</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
  
  <!-- Bootstrap -->
  <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.css" rel="stylesheet">
    
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <h1 class="site_title"><?php bloginfo();?></h1>
  <p class="site_description"><?php bloginfo('description');?></p>
  <nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				<img src="https://placehold.jp/120x40.png" class="logo" alt="">
			</a>
		</div>
		
		<div class="collapse navbar-collapse" id="navbarEexample">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">メニューＡ</a></li>
				<li><a href="#">メニューＢ</a></li>
				<li><a href="#">メニューＣ</a></li>
			</ul>
		</div>
	</div>
</nav>
  <div class="container-fluid">
    <img src="https://placehold.jp/1980x660.png" alt="" class="main_visual">	
  </div>
 
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-3">カラム</div>
    <div class="col-md-3">カラム</div>
    <div class="col-md-3">カラム</div>
    <div class="col-md-3">カラム</div>
  </div>
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="<?php echo get_template_directory_uri();?>/js/jquery-1.11.3.min.js"></script>
    
  <!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.js"></script>
  </body>
  </html>
