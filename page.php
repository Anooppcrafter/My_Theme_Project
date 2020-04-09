<?php
get_header();
?>

<style type="text/css">
	
	.anoop1{

		margin: 15px;
		padding:15px;
	}
</style>


<div>
	<?php
	if (have_posts()){
		while(have_posts()){
			the_post();
			?>
			<h3><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
			<p>
				<?php echo get_the_content(); ?>
			</p>
			<?php

		}
	}
	?>

</div>
<?php
get_footer();
?>