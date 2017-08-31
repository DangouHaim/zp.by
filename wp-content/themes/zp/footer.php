
		<footer class="main-foot" id="footer">
			
			<div class="container">
				<div class="rrow">
					
					<div class="col-md-2 col-sm-6">
						
						<a href="#" class="logo"><img src="<?php echo themePath(); ?>/img/logo.png" alt="Эвокуатор"></a>
						<p class="footer-about">Автопомощь. Эвакуация 24 часа аварийных и неисправных автомобилей: джипов, микроавтобусов, легковых авто. Работаем на территории РБ, РФ, Украина. Форма оплаты любая. Помощь в организации ремонта автомобилей.</p>

					</div>

					<div class="col-md-3 col-md-push-7 col-sm-6">
						
						<div class="text-right">
							<div class="top-phone"><span><i class="fa fa-phone" aria-hidden="true"></i> +375 29</span> 687-54-69 </div>
							<div class="top-email"><span><i class="fa fa-envelope" aria-hidden="true"></i> E-Mail: </span><a href="mailto:nx100@yandex.ru">nx100@yandex.ru</a></div>
							<div class="top-button">
								<a href="#callback" class="button button-small popup-with-move-anim" data-form="Нижняя форма">Заказать звонок</a>
							</div>
						</div>

						<div class="developer text-right hidden-xs ">
							<a href="http://vk.com/id193705724">
								<span>Создание сайта</span>
								<img src="img/cwebs.jpg" alt="developer">
							</a>
						</div>

					</div>

					<div class="col-md-6 col-md-offset-1 col-md-pull-3 col-sm-12">
						
						<div class="row">

							<div class="col-sm-6">
							
								<div class="top-panel-box">
									<h4>Адреса организации:</h4>
									<ul>
										<li><i class="fa fa-map-marker" aria-hidden="true"></i> Гомельский р-он, г/п Урицкое, ул. 50 лет Октября, д. 44</li>
									</ul>
								</div>

								<div class="top-panel-box">
									<h4>Время работы:</h4>
									<ul>
										<li><i class="fa fa-clock-o" aria-hidden="true"></i> Эвакуация круглосуточно</li>
									</ul>
								</div>

							</div>
							
							<div class="col-sm-6">

								<div class="top-panel-box">
									<h4>Услуги компании:</h4>
									<ul class="menu-type-2">
										<li><a href="avtopomoshch.html"><span class="fa fa-check"></span>Автопомощь</a></li>
										<li><a href="shinomontage.html"><span class="fa fa-check"></span>Шиномонтаж</a></li>
										<li><a href="remont_motorov.html"><span class="fa fa-check"></span>Ремонт моторов</a></li>
										<li><a href="remont_akpp.html"><span class="fa fa-check"></span>Ремонт АКПП</a></li>
										<li><a href="avtopomoshch_na_doroge.html"><span class="fa fa-check"></span>Автопомощь на дороге</a></li>
										<li><a href="vip_taxi.html"><span class="fa fa-check"></span>Вип такси</a></li>
									</ul>
								</div>
								
							</div>

						</div>

					</div>



				</div>
			</div>

		</footer>

	</header>
	
	<div class="hidden">
		<form class="popup-form callback zoom-anim-dialog" id="callback">

			<div class="success">Спасибо за заявку!<br>
			Мы свяжемся с вами.</div>

			<input type="hidden" name="project_name" value="Эвакуатор">
			<input type="hidden" name="admin_email" value="nx100@yandex.ru">
			<input type="hidden" name="form_subject" value="Заявка с сайта эвакуатор">
			

			<h3>Заказать звонок</h3>
			<label>
				<span>Ваше имя:</span>
				<input type="text" name="Имя" placeholder="Введите ваше имя..."></input>
			</label>
			<label>
				<span>Ваш телефон:</span>
				<input type="text" name="Телефон" placeholder="Введите ваш телефон..." required></input>
			</label>
			<div class="text-center">
				<button class="button">Отправить</button>
			</div>
		</form>
	</div>

	<!-- Load Scripts Start
	<script>var scr = {"scripts":[
		{"src" : "<?php echo themePath(); ?>/js/libs.js", "async" : false},
		{"src" : "<?php echo themePath(); ?>/js/common.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
	Load Scripts End -->
<?php wp_footer(); ?>
</body>
</html>