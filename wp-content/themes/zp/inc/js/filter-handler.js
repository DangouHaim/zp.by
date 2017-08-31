(function($){

	function mainFilter() {
		if ($('.cities-list').length > 0) {

			function getByCity(resetQuery) {
				if(resetQuery == "undefined") {
					resetQuery = false;
				}
				var city = '';
				city = $('#shop-filter .filter-text.active').data('value');
				$.ajax({
					type: "POST",
					url: "/wp-admin/admin-ajax.php?action=getByCity",
					data: {'city': city, 'reset' : resetQuery},
					success: function (data) {
						if (data.status == 'success') {
							$('.cities-list').html(data.content);
						} else {
							alert('Произошла ошибка обработки запроса');
						}
					},
					error: function () {
						alert('Произошла ошибка соединения');
					},
				});
			}

			getByCity(true);

			$(document).on('click', '.vacancies-item .title', function () {
				$(this).toggleClass('active');
				$(this).siblings('.vacansies-content').slideToggle();
			})
			$('#shop-filter').find('.filter-text').click(function () {
				if ($(this).is('.active')) {
					return false;
				}
				$(this).closest('ul').find('.active').removeClass('active');
				$(this).addClass('active');
				getByCity();
				return false;
			})
			$('#shop-filter').find('.filter-reset').click(function () {
				getByCity(true);
			})
		}
	}

	$(window).ready(function() {
		mainFilter();
	});

	$(window).load(function(){
		
	});

	$(document).on("scroll", function(){
		
	});

})(jQuery)