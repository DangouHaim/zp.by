<?php
/*
Template Name: main-filter
*/
?>
<?php get_header(); ?>

<div id="main-info" class="otherpage">
	<div class="container-fluid">
		<?php the_breadcrumb() ?>

		<div class="row">
			<div class="content col-md-12">
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
		</div>
		
		


		<?php
		$args = array(
			'taxonomy' => 'filter_cities',
			'hide_empty' => true,
			'parent' => get_term_by('slug', 'city_mark', 'filter_cities')->term_id
			);
		$cities = get_terms($args);
		$activeCity = false;
		$activeCityClass = '';
		foreach ($cities as $city) {
			if (empty($activeCity) && $city->name == "Минск") {
				$activeCityClass = 'active';
				$activeCity = true;
			} else {
				$activeCityClass = '';
			}
			echo "

			<li>
				<label>
					<input type='radio'>
					<span class=\"filter-text {$activeCityClass}\" data-value=\"{$city->term_id}\" >
						{$city->name}
					</span>
				</label>
			</li>";
		}
		?>


		
		<tbody class="cities-list"></tbody>



	</div>
</div>
</div>
<?php get_footer(); ?>