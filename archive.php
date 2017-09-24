<?php get_header();?>
<main <?php post_class();?> >
	<?php if(have_posts()):?>
	<?php while(have_posts()):the_post();?>
	<?php
	$categories = get_the_category();
	if ( !empty( $categories ) ): ?>
	<?php foreach($categories as $category ):?>
	<ul>
		<li class="category_name">
			<a href="<?php echo get_category_link($category->term_id);?>">
				<?php echo $category->name;?>
			</a>
		</li>
	</ul>
	<?php endforeach;?>
	<?php endif;?>
	<?php the_time('Y年n月j日'); ?>
	<?php the_title();?>
	<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			}else {
	echo '<img src="https://placehold.jp/250x250.png" />';
}
?>
	<?php the_excerpt();?>
	<?php endwhile;?>
	<?php endif;?>
</main>
<?php get_footer();?>