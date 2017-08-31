<?php
/*
Template Name: main-filter
*/
?>
<?php get_header(); ?>



<div class="content">
	<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>

	<span class='filter-reset'>reset</span>
	<?php
	$args = array(
		'taxonomy' => 't_slider',
		'hide_empty' => true,
		'parent' => get_term_by('slug', 'slider', 't_slider')->term_id
		);
	$slides = get_terms($args);
	$activeClass = "active";
	foreach ($slides as $slide) {
		echo "<p class='filter-item {$activeClass}' data-value='{$slide->term_id}'>{$slide->name}</p>";
		$activeClass = "";
	}
	?>

	<div class="filter-result"></div>
</div>



<?php get_footer(); ?>