<?php get_header("single"); ?>

		<div class="content">

			<div class="container">
				<div class="row">
					<div class="col-md-9">
						
						<article>
							<h1><?php echo the_title(); ?></h1>
							<p>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<?php echo the_content(); ?>
								<?php endwhile; ?>
									
								<?php else: ?>
									
								<?php endif; ?>
							</p>
						</article>

					</div>		
					<div class="col-md-3">
						
					<aside class="main-aside">
						
						<div class="service-item">
							<div class="service-item-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
								<i class="fa fa-eye" aria-hidden="true"></i>
							</div>
							<h4><?php echo the_title(); ?></h4>
							<div class="service-item-stars">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="service-item-price">
								<i class="fa fa-tags" aria-hidden="true"></i> от <span><?php echo get_the_excerpt(); ?></span> бр
							</div>
							<a href="#callback" class="button popup-with-move-anim">Заказать</a>
						</div>

						<div class="top-panel-box">
							<h4>Другие услуги:</h4>
							<?php
								$all_pages = get_pages(array(
									'sort_order' => 'asc',
									'sort_column' => 'post_title',
									'hierarchical' => 0,
									'parent' => 0,
									'post_type' => 'page',
									'post_status' => 'publish',
									'meta_key' => 'type',
									'meta_value' => 'service',
								));

								if ($all_pages) :
									echo '<ul class="menu-type-2">';
									foreach ($all_pages as $page) :
								?>
									<li><a href="<?php echo esc_url(get_permalink($page->ID)); ?>"><span class="fa fa-check"></span><?php echo esc_html($page->post_title); ?></a></li>
								<?php
									endforeach;
									echo '</ul>';
								else :
									echo '<p>No pages found.</p>';
								endif;
							?>
						</div>
						
					</aside>

					</div>
				</div>
			</div>

		</div>


		<section class="sect-news sect-universal" id="news">

			<div class="container">
				<div class="row">

					<div class="col-md-3 clearfix">
						
						<div class="first-col">
							<h2>Новости компании:</h2>
							<a href="#" class="button">Все новости</a>
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