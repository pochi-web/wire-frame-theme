<?php get_header();?>
<main class="<?php post_class();?>">
 <?php if(have_posts):
 while(have_posts()):the_post();?>
  <div class="container-fluid ">
			<div class="row main_image">
				<div class="top_message_box">
				<h2 class="message">
					<?php the_title();?>
				</h2>
				</div>
				<img src="https://placehold.jp/1280x330.png" alt="">
			</div>
		</div>
  <div class="container" id="main_section">
			<div class="row">
				<?php the_content();?>
			</div>
		</div>
		<?php endwhile;?>
<?php endif;?>
</main>
<?php get_footer();?>
	
</body>

</html>