<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title><?php echo the_title();?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <?php wp_enqueue_script("jquery");?>
    <?php wp_head();?>
    <script>
	var j = jQuery.noConflict();
	</script>
</head>