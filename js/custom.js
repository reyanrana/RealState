(function ($) {

	'use strict'
	
	var $window   			= $(window),
		$header   			= $('#header'),
		$navigation   		= $('#navbarSupportedContent'),
		$featureProperty   	= $('.carousel-main'),
		$sidebarFeatured   	= $('.featured-property'),
		$partners   		= $('.partners'),
		$recentReviews   	= $('.recent-review'),
		$dropdown  			= $('.dropdown-toggle'),			// 13. Our Partner Logos Slider Auto
		$contact			= $('#contact-form');
	
	function handlePreloader() {
		if($('.page-loader').length){
			$('.page-loader').delay(500).fadeOut(500);
			$('body').removeClass('page-load');
		}
	}
	


	
	
	// LayerSlider Settings
	$('#image-slider').layerSlider({
		sliderVersion: '6.0.0',
		type: 'fullwidth',
		responsiveUnder: 0,
		layersContainer: 1200,
		maxRatio: 1,
		parallaxScrollReverse: true,
		hideUnder: 0,
		hideOver: 100000,
		skin: 'v5',
		showBarTimer: true,
		thumbnailNavigation: 'disabled',
		allowRestartOnResize: true,
		skinsPath: 'skins/',
		height: 900
	});
	
	$('#image-slider-2').layerSlider({
		sliderVersion: '6.0.0',
		type: 'fullwidth',
		responsiveUnder: 0,
		layersContainer: 1200,
		maxRatio: 1,
		parallaxScrollReverse: true,
		hideUnder: 0,
		hideOver: 100000,
		skin: 'v5',
		showBarTimer: false,
		thumbnailNavigation: 'disabled',
		allowRestartOnResize: true,
		skinsPath: 'skins/',
		height: 800
	});
	
	$('#gastronomy-slider').layerSlider({
		sliderVersion: '6.2.2',
		pauseOnHover: 'enable',
		skin: 'numbers',
		globalBGSize: 'cover',
		navStartStop: false,
		navButtons: false,
		showCircleTimer: false,
		skinsPath: 'skins/'
	});
	
	$('#home5-slider').layerSlider({
		sliderVersion: '6.2.1',
		pauseOnHover: 'enable',
		type: 'Responsive',
		responsiveUnder: 0,
		fullSizeMode: 'normal',
		maxRatio: 1,
		parallaxScrollReverse: true,
		hideUnder: 0,
		hideOver: 100000,
		skin: 'v5',
		showBarTimer: false,
		showCircleTimer: false,
		navStartStop: false,
		navButtons: false,
		thumbnailNavigation: 'disabled',
		allowRestartOnResize: true,
		skinsPath: 'skins/',
		height: 800
	});
	
	$('#single-property').layerSlider({
		sliderVersion: '6.5.0b2',
		type: 'popup',
		pauseOnHover: 'disabled',
		skin: 'photogallery',
		globalBGSize: 'cover',
		navStartStop: false,
		hoverBottomNav: true,
		showCircleTimer: false,
		thumbnailNavigation: 'always',
		tnContainerWidth: '100%',
		tnHeight: 70,
		popupShowOnTimeout: 1,
		popupShowOnce: false,
		popupCloseButtonStyle: 'background: rgba(0,0,0,.5); border-radius: 2px; border: 0; left: auto; right: 10px;',
		popupResetOnClose: 'disabled',
		popupDistanceLeft: 20,
		popupDistanceRight: 20,
		popupDistanceTop: 20,
		popupDistanceBottom: 20,
		popupDurationIn: 750,
		popupDelayIn: 500,
		popupTransitionIn: 'scalefromtop',
		popupTransitionOut: 'scaletobottom',
		skinsPath: 'skins/'
	});
	
	$('#single-property-2').layerSlider({
		sliderVersion: '6.0.0',
		responsiveUnder: 0,
		layersContainer: 0,
		slideBGSize: 'auto',
		skin: 'v5',
		thumbnailNavigation: 'always',
		skinsPath: 'skins/'
	});
	
	$('#dynamic-slider').layerSlider({
			sliderVersion: '6.5.0b1',
			type: 'fullwidth',
			allowFullscreen: false,
			pauseOnHover: 'enable',
			maxRatio: 1,
			autoStart: true,
			skin: 'v6',
			globalBGSize: 'cover',
			navStartStop: false,
			showCircleTimer: false,
			thumbnailNavigation: 'disabled',
			skinsPath: 'skins/'
		});



	 // Pricing bar Filter
	 $(".filter-price").slider({ 
	 	from: 0,
	 	to: 1000000,
	 	step: 1000,
	 	smooth: true,
	 	round: 0,
	 	dimension: "Rs",
	 	skin: "plastic" 
	});



	// area Range
	$("#Slider1").slider({
	   from: 1000, 
	   to: 100000, 
	   step: 500, 
	   smooth: true, 
	   round: 0, 
	   dimension: "&nbsp; sqft", 
	   skin: "plastic" 
	});



	//  Bads room range
	$("#beds-room").slider({
	   from: 1, to: 10, 
	   step: 1,
	   round: 1, 
	   format: 
	   { format: '##.0', locale: 'de' },
		dimension: '&nbsp;', skin: "round" 
	});



	//  Bath room range
	$("#bath-room").slider({
	   from: 1, to: 5, 
	   step: 1,
	   round: 1, 
	   format: 
	   { format: '##.0', locale: 'de' },
		dimension: '&nbsp;', skin: "round" 
	});
	


	// Listed Property
	$("#listed-property").slider({
	   from: 50, 
	   to: 150, 
	   step: 10, 
	   smooth: true, 
	   round: 0, 
	   dimension: "&nbsp; Min", 
	   skin: "plastic" 
	});
	
	

	// Price
	$("#price").slider({
	   from: 100000, 
	   to: 1000000, 
	   step: 1000, 
	   smooth: true, 
	   round: 0, 
	   dimension: "&nbsp; $", 
	   skin: "plastic" 
	});
 

 
	//  Panel Massage
	var close = document.getElementsByClassName("closebtn");
	var i;
	for (i = 0; i < close.length; i++) {
	  close[i].onclick = function(){
		var div = this.parentElement;
		div.style.opacity = "0";
		setTimeout(function(){ div.style.display = "none"; }, 600);
	  }
	}
	
	

	//  Chart Dashboard
	if(document.querySelector('#mychart') !== null){
		var canvas = document.getElementById("mychart");
		var ctx = canvas.getContext('2d');
		
		// Data with datasets options
		var data = {
			type: 'bar',
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov","Dec"],
			  datasets: [
				{
					label: 'Growth',
					fill: true,
					backgroundColor: "#def7e0",
					borderColor: "#17c788",
					data: [0, 150, 450, 400, 480, 630, 580, 500, 530, 400, 430, 600, 400],
				}
			]
		}
		
		// Chart declaration with some options:
		var mychart = new Chart(ctx, {
			type: 'line',
			data: data,
		});
	}
	
	// Cal function after window load
	$window.on('load', function() {
		handlePreloader();
	});
	
	
	// 8. Event time counter settings
	  $('[data-countdown]').each(function() {
		var $this = $(this),
			finalDate = $(this).data('countdown');

		$this.countdown(finalDate, function(event) {
		  $this.html(event.strftime('<span>%D<br><i>Days</i></span> <span>%H<br><i>Hour</i></span> <span>%M<br><i>Min</i></span> <span>%S<br><i>Sec</i></span>'));
		});
	  });
	
	// Color and Layout Settings
	$('.color-panel').each(function(){
		$('.on-panel').on('click', function(){
			$('.color-panel').toggleClass('open');
		});
		
		$('.color-box li').on('click', function(){
			$('.color-box li').removeClass('active');
			$(this).addClass('active');
			 var path = $(this).data('path');
			 var logo1 = $(this).data('image');
			 var logo2 = $(this).data('target');
			 $('#color-change').attr('href', path);
			 $('.nav-logo').attr('src', logo1);
			 $('.logo-bottom').attr('src', logo2);
		});	
		
		// Template color change
		$(".color-box li").each( function() {		
			if ($.cookie('homex_color') && $.cookie('homex_color') == $(this).attr('class')) {
				$(this).addClass('active');
				var path = $(this).data('path');
				var logo1 = $(this).data('image');
				var logo2 = $(this).data('target');
				$('#color-change').attr('href', path);
				$('.nav-logo').attr('src', logo1);
				$('.logo-bottom').attr('src', logo2);
			}
		});
		
		$(".color-box li").on('click',function() {
			var file_name = $(this).attr('data-name');
			$.cookie('homex_color', file_name, { path: '/', expires: 365 });
		});
		
		// Layout select with slide button
		$("#layout_type").each( function() {
			var name = $(this).attr('name');
			if ($.cookie(name) && $.cookie(name) == "boxLayout") {
				$(this).prop('checked', true);
				$('#page-wrapper').addClass('box-layout');
			}
		});
		
		$("#layout_type").change(function() {
			var name = $(this).attr('name');
			if($(this).prop('checked')){
				$.cookie(name, 'boxLayout', { path: '/', expires: 365 });
			}
			else {
				$.cookie(name, '', { path: '/', expires: 365 });
			}
		});
		
		$('#layout_type').on('click', function(){	
			if($(this).is(':checked')){
				$('#page-wrapper').addClass('box-layout');
				location.reload();
			}
			else {
				$('#page-wrapper').removeClass('box-layout');
				location.reload();
			}
		});
		
		
		// Background select with check
		$(".box_bg_style li input[type='radio']").on('click', function(){
			$('body').removeAttr('class');
			if($(this).is(':checked')){
				var class_nm = $(this).attr('value');
				$('body').addClass(class_nm);
			}
			var name = $("#bg_over").attr('name');
			if ($.cookie(name) && $.cookie(name) == "true") {
				$(this).prop('checked', $.cookie(name));
				$('body').addClass('body_overlay');
			}
		});
		
		$(".box_bg_style li input[type='radio']").each( function() {		
			if ($.cookie('bg_layout') && $.cookie('bg_layout') == $(this).attr('value')) {
				$(this).prop('checked', true);
				$('body').addClass($.cookie('bg_layout'));
			}
		});
		
		$(".box_bg_style li input[type='radio']").change(function() {
			var name = $(this).attr('value');
			if($(this).prop('checked')){
				$.cookie('bg_layout', name, { path: '/', expires: 365 });
			}
		});
		
		// Background Overly settinhs
		$("#bg_over").each( function() {
			var name = $(this).attr('name');
			if ($.cookie(name) && $.cookie(name) == "true") {
				$(this).prop('checked', $.cookie(name));
				$('body').addClass('body_overlay');
			}
		});
		
		$("#bg_over").change(function() {
			var name = $(this).attr('name');
			$.cookie(name, $(this).prop('checked'), { path: '/', expires: 365 });
		});
		
		$('#bg_over').on('click', function(){	
			if($(this).is(':checked')){
				$('body').addClass('body_overlay');
			}
			else {
				$('body').removeClass('body_overlay');
			}
		});
		
	});

})(jQuery);

