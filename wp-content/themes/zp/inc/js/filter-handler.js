(function($){

	function mainFilter() {
		if ($('.filter-result').length > 0) {
			function getByID(resetQuery) {
				if(resetQuery == "undefined") {
					resetQuery = false;
				}
				
				var id = '';
				id = $('.filter-item.active').data('value');

				$.ajax({
					type: "POST",
					url: "/wp-admin/admin-ajax.php?action=getByID",
					data: {'id': id, 'reset' : resetQuery},
					success: function (data) {
						if (data.status == 'success') {
							$('.filter-result').html(data.content);
						} else {
							alert('Произошла ошибка обработки запроса');
						}
					},
					error: function () {
						alert('Произошла ошибка соединения');
					},
				});
			}

			getByID(true);

			$('.filter-item').click(function () {
				if ($(this).is('.active')) {
					return false;
				}
				$(this).closest('div').find('.active').removeClass('active');
				$(this).addClass('active');
				getByID();
				return false;
			})
			$('.filter-reset').click(function () {
				getByID(true);
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