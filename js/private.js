
$(document).ready(function(){

  setTimeout(function(){
    $('.loading-svg').addClass('hide-load');
    $('html').addClass('un-hidd');
  }, 2500);


	$('.clc-tab').click(function(){
		var tab_id = $(this).attr('data-tab');
		$('.clc-tab').removeClass('active');
		$('.tab-content').removeClass('active');
		$(this).addClass('active');
		$("#"+tab_id).addClass('active');
	})

  $('.translate a').click(function(){
    $('.translate ul').toggleClass('active');
    $('.translate a').removeClass('active');
    $(this).addClass('active');
  })
})

 


// var eff_1 = new TimelineMax({ delay: 0.35 });
// $(document).ready(function () {
//     eff_1.from($(".caption h1"), 0.35, { opacity: 0, autoAlpha: 0, skewX: 10, y: "+=30px" }, 0.35)
//     	 .from($(".btn-apply"), 0.55, { opacity: 0, autoAlpha: 0, y: "+=30px" }, 0.55)

// }); 

if($(window).innerWidth() >= 1024){
    new WOW().init();
}

var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
      $('.header-top').addClass('up-menu');
   } else {
      $('.header-top').removeClass('up-menu');
   }
   lastScrollTop = st;
});

$(window).bind('scroll', function() {
     if ($(window).scrollTop() > 0) {
         $('.header-top').addClass('fixed');
     }
     else {
         $('.header-top').removeClass('fixed');
     }
});


$(document).ready(function() {
  $(document).on("mousemove", function(event) {
    var mouseX = event.pageX,
        mouseY = event.pageY
  });
  $(".link-inter").on("mousemove", function(event) {
    var offset = $( this ).offset();
    var mouseX = event.pageX - offset.left,
        mouseY = event.pageY - offset.top   
    $(".link-inter span").css({
      "left": mouseX,
      "top": mouseY
    });
  });
});
 


// let rellax = new Rellax(".rellax"); 