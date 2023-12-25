<?php get_header(); ?>

<section class="sect-teaser">

	<div class="container">

		<div class="row">

			<div class="col-sm-3">

				<div class="teaser-item">
					<div class="teaser-count">
						<div class="teaser-count-wrap">
							<i class="fa fa-star" aria-hidden="true"></i>
							<span class="teaser-number"><?php echo $_SESSION['blog_meta']['star_rating'][0]['count']; ?></span>
						</div>
					</div>
					<div class="teaser-text"><?php echo $_SESSION['blog_meta']['star_rating'][0]['description']; ?></div>
				</div>

			</div>

			<div class="col-sm-3">

				<div class="teaser-item">
					<div class="teaser-count">
						<div class="teaser-count-wrap">
							<i class="fa fa-star" aria-hidden="true"></i>
							<span class="teaser-number"><?php echo $_SESSION['blog_meta']['star_rating'][1]['count']; ?></span>
						</div>
					</div>
					<div class="teaser-text"><?php echo $_SESSION['blog_meta']['star_rating'][1]['description']; ?></div>
				</div>

			</div>

			<div class="col-sm-3">

				<div class="teaser-item">
					<div class="teaser-count">
						<div class="teaser-count-wrap">
							<i class="fa fa-star" aria-hidden="true"></i>
							<span class="teaser-number"><?php echo $_SESSION['blog_meta']['star_rating'][2]['count']; ?></span>
						</div>
					</div>
					<div class="teaser-text"><?php echo $_SESSION['blog_meta']['star_rating'][2]['description']; ?></div>
				</div>

			</div>

			<div class="col-sm-3">

				<div class="teaser-item">
					<div class="teaser-count">
						<div class="teaser-count-wrap">
							<i class="fa fa-star" aria-hidden="true"></i>
							<span class="teaser-number"><?php echo $_SESSION['blog_meta']['star_rating'][3]['count']; ?></span>
						</div>
					</div>
					<div class="teaser-text"><?php echo $_SESSION['blog_meta']['star_rating'][3]['description']; ?></div>
				</div>

			</div>

		</div>

	</div>
</section>

<section class="main-filter-wp">
	<div class="content">
		<span class='filter-reset'>Сбросить</span>
		<?php
			$args = array(
				'taxonomy' => 't_post',
				'hide_empty' => true,
				'parent' => get_term_by('slug', 'post', 't_post')->term_id
				);
			get_term_by( $field, $value, $taxonomy, $output, $filter );
			$slides = get_terms($args);

			echo "<div class='filter-title'>Фильтр</div>";
			echo "<select class='main-filter master' name='main-filter'>";
			echo "<option value='' default selected disabled hidden>Выбрать</option>";
			foreach ($slides as $slide) {
				echo "<option class='filter-item' value='{$slide->term_id}'>{$slide->name}</option>";
			}
			echo "</select>";
		?>
		<div class="additional-filters"></div>
	</div>
</section>

<section class="sect-services">

	<div class="container">

		<div class="row">

			<div class="filter-result"></div>

		</div>
	</div>

</section>

<section class="sect-news sect-universal" id="news">

	<div class="container">
		<div class="row">

			<div class="col-md-3 clearfix">

				<div class="first-col">
					<h2>Новости компании:</h2>
					<a href="#" class="button hidden">Все новости</a>
				</div>

			</div>

				<?php
					$args = array(
						'sort_order' => 'desc',
						'sort_column' => 'post_title',
						'hierarchical' => 0,
						'parent' => 0,
						'post_type' => 'page',
						'post_status' => 'publish',
						'meta_key' => 'type',
						'meta_value' => 'news',
						'number' => 3,
					);

					$all_pages = get_pages($args);

					if ($all_pages) :
						echo '<ul class="menu-type-2">';
						foreach ($all_pages as $page) :
					?>
						<div class="col-md-3">
							<div class="new-item">
								<a href="<?php echo esc_url(get_permalink($page->ID)); ?>" class="new-item-img" style="background-image: url(<?php echo get_the_post_thumbnail_url($page->ID, 'full'); ?>);">
									<i class="fa fa-eye" aria-hidden="true"></i>
								</a>
								<div class="new-item-text">
									<h4><?php echo esc_html($page->post_title); ?></h4>
									<p><?php echo get_post_meta($page->ID, 'short', true); ?></p>
								</div>
								<a href="<?php echo esc_url(get_permalink($page->ID)); ?>" class="button">Подробнее</a>
							</div>
						</div>
					<?php
						endforeach;
						echo '</ul>';
					else :
						echo '<p>No pages found.</p>';
					endif;
				?>

		</div>
	</div>		

</section>

<section class="sect-universal sect-links" id="links">

	<div class="container">
		<div class="row">
			<div class="col-sm-3">

				<div class="first-col clearfix">
					<h2>Ещё сайты компании:</h2>
					<a href="#" class="button hidden">Все порталы</a>
				</div>

			</div>
			<div class="col-sm-9">
				<div class="row">

					<?php
						$args = array(
							'sort_order' => 'asc',
							'sort_column' => 'post_title',
							'hierarchical' => 0,
							'parent' => 0,
							'post_type' => 'page',
							'post_status' => 'publish',
							'meta_key' => 'type',
							'meta_value' => 'site',
						);

						$all_pages = get_pages($args);

						if ($all_pages) :
							echo '<ul class="menu-type-2">';
							foreach ($all_pages as $page) :
						?>
							<div class="col-lg-4 col-md-6">

								<a href="<?php echo esc_url(get_permalink($page->ID)); ?>" class="link-item">
									<img src="<?php echo get_the_post_thumbnail_url($page->ID, 'full'); ?>" alt="link">
									<span class="h4"><?php echo esc_html($page->post_title); ?></span>
								</a>

							</div>
						<?php
							endforeach;
							echo '</ul>';
						else :
							echo '<p>No pages found.</p>';
						endif;
					?>

				</div>
			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>