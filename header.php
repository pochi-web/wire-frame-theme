<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>some-titles</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <?php wp_head();?>
</head>

<body>
<header>
<?php
wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
?>
</header>
