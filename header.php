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
    <?php wp_head();?>
</head>

<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<h1 class="site_title col-md-6">
					<?php bloginfo();?>
				</h1>
				<p class="site_description col-md-6">
					<?php bloginfo('description');?>
				</p>
			</div>
			<!--row-->
			
			<!--row-->
		</div>
		<!--.container-fluid-->
	</header>