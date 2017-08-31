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
							<div class="service-item-image" style="background-image: url(img/services/_1.jpg);">
								<i class="fa fa-eye" aria-hidden="true"></i>
							</div>
							<h4>Автопомощь</h4>
							<div class="service-item-stars">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="service-item-price">
								<i class="fa fa-tags" aria-hidden="true"></i> от <span>300 000</span> бр
							</div>
							<a href="#order" class="button popup-with-move-anim">Заказать</a>
						</div>

						<div class="top-panel-box">
									<h4>Другие услуги:</h4>
									<ul class="menu-type-2">
										<li class="active"><a href="#"><span class="fa fa-check"></span>Автопомощь</a></li>
										<li><a href="shinomontage.html"><span class="fa fa-check"></span>Шиномонтаж</a></li>
										<li><a href="remont_motorov.html"><span class="fa fa-check"></span>Ремонт моторов</a></li>
										<li><a href="remont_akpp.html"><span class="fa fa-check"></span>Ремонт АКПП</a></li>
										<li><a href="avtopomoshch_na_doroge.html"><span class="fa fa-check"></span>Автопомощь на дороге</a></li>
										<li><a href="vip_taxi.html"><span class="fa fa-check"></span>Вип такси</a></li>
									</ul>
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