
/*--------------------------------------------------------------------------
onload add
--------------------------------------------------------------------------*/
function addOnload(func) {
	try {
		window.addEventListener("load", func, false);
	} catch (e) {
		window.attachEvent("onload", func);
	}
}

/* --------------------------------------------------------
user agent
-------------------------------------------------------- */

var ua = {};
ua.name = window.navigator.userAgent.toLowerCase();
ua.ver = window.navigator.appVersion.toLowerCase();


;(function($){

/*--------------------------------------------------------------------------
common effect
--------------------------------------------------------------------------*/

	//scroll
	$.fn.smoothScroll = function(options){
		var c = $.extend({
			speed : 400,
			easing : 'swing'
		}, options);
		this.on('click',function(e){
			e.preventDefault();
			var $elmHash = this.hash;
			if(!$elmHash || $elmHash === "#") {
				return false;
			};
			var targetOffset = $($elmHash).offset().top - $('.suwarikuHeader').innerHeight();
			$('html,body').animate({scrollTop: targetOffset}, c.speed, c.easing);
		});
	}
	$("a[href^='#']").smoothScroll();

	function ankerSet(){
		var urlHash = location.hash.replace(/<[^>]+>/g, '');
		if(urlHash.indexOf('#') != -1 && $(urlHash)[0]){
			$('html,body').animate({scrollTop: $(urlHash).offset().top - $('.suwarikuHeader').innerHeight()}, 1);
		}
	}
	addOnload(ankerSet);

	//popup sns
	$('.js-puwin').on("click",function(e){
		e.preventDefault();
		window.open(this.href,"WindowName","width=520,height=520,resizable=yes,scrollbars=yes");
		return false;
	});

	//global nav
	$('.suwarikuHeaderMenu').on("click",function(e){
		e.preventDefault();
		$(this).toggleClass('is-active');
		$('.suwarikuHeader').toggleClass('is-active');
		$('.suwarikuHeadernav').toggleClass('is-active');
		return false;
	});

	//scroll anima
	function scrollHeader(){
		var scrollH = $(window).scrollTop();
		var pos = 240;
		if(scrollH > pos){
			$('.suwarikuHeader').addClass('is-scrolled');
		}else{
			$('.suwarikuHeader').removeClass('is-scrolled');
		}
		var pos2 = 640;
		if(scrollH > pos2){
			$('.suwarikuPageTop').addClass('is-active');
		}else{
			$('.suwarikuPageTop').removeClass('is-active');
		}
	}
	scrollHeader();
	$(window).on('scroll resize',function(){
		scrollHeader();
	});

	$('.suwarikuHeadernav-list__item--toggle >a').on("click",function(e){
		if( window.matchMedia('(max-width:767px)').matches ){
			e.preventDefault();
			$(this).toggleClass('is-active');
			$(this).next('.suwarikuHeadernav-child').slideToggle(150);
			return false;
		}
	});

	//slider

	function warehouseDetailSlider() {
		if($('.m-service-warehouse-detail-slider')[0]){
			$('.m-service-warehouse-detail-slider').slick({
				fade: true,
				slidesToShow: true,
				slidesToScroll:1,
				// centerMode: true,
				adaptiveHeight: true,
				initialSlide: 0, //start number
				cssEase: 'ease-in-out',
				infinite: true,
				arrows: false,
				dots: true,
				autoplay: true,
				autoplaySpeed: 2000,
				speed: 500,
				slide: '.m-service-warehouse-detail-slider__item',
				// prevArrow: '<i class="m-icon-slide-prev">前へ</i>',
				// nextArrow: '<i class="m-icon-slide-next">次へ</i>',
				pauseOnHover: false,
				draggable: false,
				touchThreshold: 10,
				swipe: false,
				// swipeToSlide: false,
				touchMove: false
			});
			// $('.suwarikuHomeMv-list').slick("slickPause");
			// $('.suwarikuHomeMv-list').addClass('is-load');
			// $('.suwarikuHomeMv-list').slick("slickPlay");
		}
	}
	warehouseDetailSlider();


	function realestateDetailSlider() {
		if($('.m-service-realestate-image')[0]){
			$('.m-service-realestate-image').slick({
				fade: true,
				slidesToShow: true,
				slidesToScroll:1,
				// centerMode: true,
				adaptiveHeight: true,
				initialSlide: 0, //start number
				cssEase: 'ease-in-out',
				infinite: true,
				arrows: false,
				dots: true,
				autoplay: true,
				autoplaySpeed: 2000,
				speed: 500,
				slide: '.m-service-realestate-image__item',
				// prevArrow: '<i class="m-icon-slide-prev">前へ</i>',
				// nextArrow: '<i class="m-icon-slide-next">次へ</i>',
				pauseOnHover: false,
				draggable: false,
				touchThreshold: 10,
				swipe: false,
				// swipeToSlide: false,
				touchMove: false
			});
			// $('.suwarikuHomeMv-list').slick("slickPause");
			// $('.suwarikuHomeMv-list').addClass('is-load');
			// $('.suwarikuHomeMv-list').slick("slickPlay");
		}
	}
	realestateDetailSlider();


	function csrSlider() {
		if($('.m-csr-slider')[0]){
			$('.m-csr-slider').slick({
				fade: true,
				slidesToShow: true,
				slidesToScroll:1,
				// centerMode: true,
				adaptiveHeight: true,
				initialSlide: 0, //start number
				cssEase: 'ease-in-out',
				infinite: true,
				arrows: false,
				dots: false,
				autoplay: true,
				autoplaySpeed: 2000,
				speed: 1500,
				slide: '.m-csr-slider__item',
				// prevArrow: '<i class="m-icon-slide-prev">前へ</i>',
				// nextArrow: '<i class="m-icon-slide-next">次へ</i>',
				pauseOnHover: false,
				draggable: false,
				touchThreshold: 10,
				swipe: false,
				// swipeToSlide: false,
				touchMove: false
			});
			// $('.suwarikuHomeMv-list').slick("slickPause");
			// $('.suwarikuHomeMv-list').addClass('is-load');
			// $('.suwarikuHomeMv-list').slick("slickPlay");
		}
	}
	csrSlider();


	function historySlider() {
		if($('.m-history-present-slider')[0]){
			$('.m-history-present-slider').slick({
				fade: true,
				slidesToShow: true,
				slidesToScroll:1,
				// centerMode: true,
				adaptiveHeight: true,
				initialSlide: 0, //start number
				cssEase: 'ease-in-out',
				infinite: true,
				arrows: false,
				dots: false,
				autoplay: true,
				autoplaySpeed: 2500,
				speed: 1500,
				slide: '.m-history-present-slider__item',
				// prevArrow: '<i class="m-icon-slide-prev">前へ</i>',
				// nextArrow: '<i class="m-icon-slide-next">次へ</i>',
				pauseOnHover: false,
				draggable: false,
				touchThreshold: 10,
				swipe: false,
				// swipeToSlide: false,
				touchMove: false
			});
			// $('.suwarikuHomeMv-list').slick("slickPause");
			// $('.suwarikuHomeMv-list').addClass('is-load');
			// $('.suwarikuHomeMv-list').slick("slickPlay");
		}
	}
	historySlider();



	//scroll anima
	function historyAmina(){
		if($('body').hasClass('t-history')){
			var scroll = $(window).scrollTop();

			$('.js-history-item').each(function(i) {
				var item = $(this).offset().top - $(window).height() + 100;
				if(scroll > item){
					$(this).addClass('is-active');
				}
			});

			var containerStart = $('.m-history-bg').offset().top - $('.suwarikuHeader').innerHeight() - 1;
			var containerEnd = $('.l-container').innerHeight() + $('.suwarikuHeader').innerHeight() - $(window).height();
			if((scroll > containerStart) && (scroll < containerEnd)){
				$('.m-history-nav').addClass('is-active');
			}else{
				$('.m-history-nav').removeClass('is-active');
			}

			$('.m-history-block-item').each(function(i) {
				var blockStart = $(this).offset().top - $('.suwarikuHeader').innerHeight() - 1;
				var blockEnd = blockStart + $(this).innerHeight();
				if((scroll > blockStart) && (scroll < blockEnd)){
					$(this).find('.m-history-list-line--on').css({'height': scroll - blockStart});
					$('.m-history-nav__item').eq(i).addClass('is-active');
				}else{
					$('.m-history-nav__item').eq(i).removeClass('is-active');
				}
			});


		}
	}
	historyAmina();
	$(window).on('scroll resize',function(){
		historyAmina();
	});


	//scroll anima
	function homeAmina(){
		if($('body').hasClass('suwarikuHome')){
			var scroll = $(window).scrollTop();

			$('.suwarikuHeader').delay(500).queue(function() {
				$(this).addClass('is-on').dequeue();
			});
			$('.suwarikuHomeMv').addClass('is-on');

			$('.suwarikuJsHome-anima').each(function(i) {
				var item = $(this).offset().top - $(window).height() + 200;
				if(scroll > item){
					$(this).find('.suwarikuJsHome-anima-item').each(function(i) {
						$(this).delay(i * 150).queue(function() {
							$(this).addClass('is-on').dequeue();
						});
						if($(this).find("video")[0] && !$(this).find("video").hasClass('played')){
							$(this).find("video")[0].play();
							$(this).find("video").addClass('played');
						}
					});
				}
			});

			setTimeout(function(){ 
				$('.suwarikuHomeIntro').addClass('on');
			},500);
			setTimeout(function(){ 
				//YouTube読み込まれなくても時間経過でロゴ消す
				$('.suwarikuHomeIntro').addClass('off');
				$('.suwarikuHome').removeClass('suwarikuNoScroll');
			},3000);


		}
	}
	homeAmina();
	$(window).on('scroll resize',function(){
		homeAmina();
	});



	//scroll anima
	function serviceAnima(){
		if($('.js-service-anima')[0]){
			var scroll = $(window).scrollTop();

			$('.js-service-anima').each(function(i) {
				var item = $(this).offset().top - $(window).height() + 200;
				if(scroll > item){
					$(this).find('.js-service-anima-item').each(function(i) {
						$(this).delay(i * 150).queue(function() {
							$(this).addClass('is-active').dequeue();
						});
						if($(this).find("video")[0] && !$(this).find("video").hasClass('played')){
							$(this).find("video")[0].play();
							$(this).find("video").addClass('played');
						}
					});
				}
			});

		}
	}
	serviceAnima();
	$(window).on('scroll resize',function(){
		serviceAnima();
	});

	
	//mail spam protection
	
	function secretaddress(){
		var ma = String.fromCharCode(51,107,97,110,114,105,64,102,117,107,117,121,97,109,97,45,115,111,117,107,111,46,99,111,46,106,112);
		var mt = String.fromCharCode(109,97,105,108,116,111,58);
		document.write('<a href="'+ mt + ma + '">' + ma + '</a>');
	}
	

/*--------------------------------------------------------------------------
heightLine * have to write last line
--------------------------------------------------------------------------*/

	function heightLineSet() {
		$('.js-hline').matchHeight();
	}
	addOnload(heightLineSet);


})(jQuery);