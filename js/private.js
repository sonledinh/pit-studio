
$(document).ready(function(){
	$('.head-tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');
		$('.head-tabs li').removeClass('active');
		$('.tab-content').removeClass('active');
		$(this).addClass('active');
		$("#"+tab_id).addClass('active');
	})
})


$('.slide-avarta').slick({
    autoplay: true,
    arrow: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1, 
    prevArrow: '',
    nextArrow: '',
}); 