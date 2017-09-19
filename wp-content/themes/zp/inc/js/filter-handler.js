(function($){

	function mainFilter() {
		if ($('.filter-result').length > 0) {
			function getByID(tid, resetQuery) {
				if(resetQuery == "undefined") {
					resetQuery = false;
				}
				
				var id = tid;
				//id = $('.filter-item.active').data('value');

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


			function getMoreFilterArgs(tid) {
				var id = tid;

				$.ajax({
					type: "POST",
					url: "/wp-admin/admin-ajax.php?action=getMoreFilterArgs",
					data: {'id': id},
					success: function (data) {
						if (data.status == 'success') {
							if(data.content.length > 0) {
								$('.main-filter-wp .content .additional-filters').html("");
								$('.main-filter-wp .content .additional-filters').append(data.content);
							}
						} else {
							alert('Произошла ошибка обработки запроса');
						}
					},
					error: function () {
						alert('Произошла ошибка соединения');
					},
				});
			}

			function setFilterOnChange() {
				$(".main-filter").on("change", function () {
					getByID($(this).val());
					getMoreFilterArgs($(this).val());
				});
			}

			getByID(-1, true);
			setFilterOnChange();

			$('.main-filter-wp .content .additional-filters').bind("DOMSubtreeModified",function(){
				setFilterOnChange();
			});

			$('.filter-reset').click(function () {
				$('.main-filter-wp .content .additional-filters').html("");
				getByID(-1, true);
			});

			$(".main-filter.master").on("change", function() {
				$('.main-filter-wp .content .additional-filters').html("");
			});
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