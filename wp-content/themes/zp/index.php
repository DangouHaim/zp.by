<?php get_header(); ?>

<section class="sect-teaser">

	<div class="container">

		<div class="row">

			<div class="col-sm-3">

				<div class="teaser-item">
					<div class="teaser-count">
						<div class="teaser-count-wrap">
							<i class="fa fa-star" aria-hidden="true"></i>
							<span class="teaser-number">8</span>
						</div>
					</div>
					<div class="teaser-text">Мы имеем порядка восьми единиц техники</div>
				</div>

			</div>

			<div class="col-sm-3">

				<div class="teaser-item">
					<div class="teaser-count">
						<div class="teaser-count-wrap">
							<i class="fa fa-star" aria-hidden="true"></i>
							<span class="teaser-number">24</span>
						</div>
					</div>
					<div class="teaser-text">Эвакуация 24 часа в сутки</div>
				</div>

			</div>

			<div class="col-sm-3">

				<div class="teaser-item">
					<div class="teaser-count">
						<div class="teaser-count-wrap">
							<i class="fa fa-star" aria-hidden="true"></i>
							<span class="teaser-number">3</span>
						</div>
					</div>
					<div class="teaser-text">Мы работаем в 3 странах: РБ, РФ, Украина</div>
				</div>

			</div>

			<div class="col-sm-3">

				<div class="teaser-item">
					<div class="teaser-count">
						<div class="teaser-count-wrap">
							<i class="fa fa-star" aria-hidden="true"></i>
							<span class="teaser-number">5</span>
						</div>
					</div>
					<div class="teaser-text">Мы оказываем свои услуги уже более пяти лет</div>
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
					<a href="#" class="button">Все новости</a>
				</div>

			</div>

			<div class="col-md-3">

				<div class="new-item">
					<a href="#" class="new-item-img" style="background-image: url(img/services/_1.jpg);">
						<i class="fa fa-eye" aria-hidden="true"></i>
					</a>
					<div class="new-item-text">
						<h4>У нас новый сайт</h4>
						<p>Будем рады каждому посетителю</p>
					</div>
					<a href="#" class="button hidden">Подробнее</a>
				</div>

			</div>

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

					<div class="col-lg-4 col-md-6">

						<a href="http://deal.by/cs/33412" class="link-item">
							<img src="img/site.png" alt="link">
							<span class="h4">deal.by</span>
						</a>

					</div>

					<div class="col-lg-4 col-md-6">

						<a href="http://186.by/company/evakuator.html" class="link-item">
							<img src="img/site.png" alt="link">
							<span class="h4">186.by</span>
						</a>

					</div>

					<div class="col-lg-4 col-md-6">

						<a href="http://gomel.propartner.by/offers/prestige-car-i1732268.html" class="link-item">
							<img src="img/site.png" alt="link">
							<span class="h4">gomel.propartner.by</span>
						</a>

					</div>

					<div class="col-lg-4 col-md-6">

						<a href="http://gomel-prazdnik.by/svadba.php?id_position=628" class="link-item">
							<img src="img/site.png" alt="link">
							<span class="h4">gomel-prazdnik.by</span>
						</a>

					</div>

				</div>
			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>