$(document).ready(function() {

	$('.b5').parallax();


	//Показуємо потрібні роботи в портфоліо 
	$('.b-nav .b-nat_item').click(function(event) {
		event.preventDefault();
		$('.b-nat_item--active').removeClass('b-nat_item--active');
		$(this).addClass('b-nat_item--active')
		console.log($(this).index());
		$('.pt_item').show();
		switch ($(this).index()) {
			case 0:
				$('.pt_item').show();
				break;
			case 1:

				$('.pt_item:not(".pt_item[data-type=pt]")').hide();
				break;
			case 2:
				$('.pt_item:not(".pt_item[data-type=wt]")').hide();
				break;
			case 3:
				$('.pt_item:not(".pt_item[data-type=ui]")').hide();
				break;
			case 4:
				$('.pt_item:not(".pt_item[data-type=mu]")').hide();
				break;
			default:
				break;
		}
	});
	//Показати карточку члена команди
	$(".people-row_man").click(function(event) {
		event.preventDefault();
		$(".people_main").attr("src", $(this).find(".img-responsive").attr("src"));
		$(".people-r_titile").text($(this).children(".people-row_name").text());
		$(".people-r_text").text($(this).children(".people-row_about").text());
		$(".people-r_fb").attr("href", $(this).find(".people-row_fb").text());
		$(".people-r_db").attr("href", $(this).find(".people-row_db").text());
		$(".people-r_be").attr("href", $(this).find(".people-row_be").text());
		$(".people-r_tw").attr("href", $(this).find(".people-row_tw").text());

	});

	$('.menu-main-menu-container .menu-item a').click(function(){
		var el = $(this).attr('href');
		$('html,body').animate({
			scrollTop: $(el).offset().top}, 700);
		return false; 
	});
});