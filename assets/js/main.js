$(function () {
	/*
		https://www.jqueryscript.net/animation/Smooth-Mouse-Wheel-Scrolling-Plugin-With-jQuery-easeScroll.html
		===========================*/
	$("html").easeScroll({
		frameRate: 60,
		animationTime: 1000,
		stepSize: 90,
		pulseAlgorithm: 1,
		pulseScale: 8,
		pulseNormalize: 1,
		accelerationDelta: 20,
		accelerationMax: 1,
		keyboardSupport: true,
		arrowScroll: 50,
		touchpadSupport: true,
		fixedBackground: true
	});

	let slider = function () {
		if($('#js-slider__wrap').length > 0){
			$('#js-slider__wrap').slick({
				arrows: false,
				fade: true,
				responsive: [
					{
						breakpoint: 720,
						settings: {
							dots: true,
							slidesToShow: 1,
							slidesToScroll: 1
						}
					},
				]
			});

			$('.slider-button__left').on('click', function (e) {
				e.preventDefault();
				$('#js-slider__wrap').slick('slickPrev');
			});

			$('.slider-button__right').on('click', function (e) {
				e.preventDefault();
				$('#js-slider__wrap').slick('slickNext');
			});
		}
	};
	slider();

	let sandwitch = function () {
		$('.sandwitch').on('click', function () {
			$('#js-main-menu').toggleClass('fixed');
			$('body').toggleClass('fixed');
			$(this).toggleClass('sandwitch--active');
			$(this).closest('.sandwitch-wrapper').toggleClass('sandwitch--active');
		});
	};
	sandwitch();

	let showPoup = function () {
		$('#js-show-popup').on('click', function (e) {
			e.preventDefault();
			$('body').addClass('fixed');
			$('#js-popup').fadeIn();
			$('#js-overlay').fadeIn();
		});

		$('#js-overlay, #js-close-popup').on('click', function (e) {
			e.preventDefault();
			$('body').removeClass('fixed');
			$('#js-popup').fadeOut();
			$('#js-overlay').fadeOut();
		});
	};
	showPoup();
});




//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJtYWluLmpzIl0sInNvdXJjZXNDb250ZW50IjpbIiQoZnVuY3Rpb24gKCkge1xyXG5cdC8qXHJcblx0XHRodHRwczovL3d3dy5qcXVlcnlzY3JpcHQubmV0L2FuaW1hdGlvbi9TbW9vdGgtTW91c2UtV2hlZWwtU2Nyb2xsaW5nLVBsdWdpbi1XaXRoLWpRdWVyeS1lYXNlU2Nyb2xsLmh0bWxcclxuXHRcdD09PT09PT09PT09PT09PT09PT09PT09PT09PSovXHJcblx0JChcImh0bWxcIikuZWFzZVNjcm9sbCh7XHJcblx0XHRmcmFtZVJhdGU6IDYwLFxyXG5cdFx0YW5pbWF0aW9uVGltZTogMTAwMCxcclxuXHRcdHN0ZXBTaXplOiA5MCxcclxuXHRcdHB1bHNlQWxnb3JpdGhtOiAxLFxyXG5cdFx0cHVsc2VTY2FsZTogOCxcclxuXHRcdHB1bHNlTm9ybWFsaXplOiAxLFxyXG5cdFx0YWNjZWxlcmF0aW9uRGVsdGE6IDIwLFxyXG5cdFx0YWNjZWxlcmF0aW9uTWF4OiAxLFxyXG5cdFx0a2V5Ym9hcmRTdXBwb3J0OiB0cnVlLFxyXG5cdFx0YXJyb3dTY3JvbGw6IDUwLFxyXG5cdFx0dG91Y2hwYWRTdXBwb3J0OiB0cnVlLFxyXG5cdFx0Zml4ZWRCYWNrZ3JvdW5kOiB0cnVlXHJcblx0fSk7XHJcblxyXG5cdGxldCBzbGlkZXIgPSBmdW5jdGlvbiAoKSB7XHJcblx0XHRpZigkKCcjanMtc2xpZGVyX193cmFwJykubGVuZ3RoID4gMCl7XHJcblx0XHRcdCQoJyNqcy1zbGlkZXJfX3dyYXAnKS5zbGljayh7XHJcblx0XHRcdFx0YXJyb3dzOiBmYWxzZSxcclxuXHRcdFx0XHRmYWRlOiB0cnVlLFxyXG5cdFx0XHRcdHJlc3BvbnNpdmU6IFtcclxuXHRcdFx0XHRcdHtcclxuXHRcdFx0XHRcdFx0YnJlYWtwb2ludDogNzIwLFxyXG5cdFx0XHRcdFx0XHRzZXR0aW5nczoge1xyXG5cdFx0XHRcdFx0XHRcdGRvdHM6IHRydWUsXHJcblx0XHRcdFx0XHRcdFx0c2xpZGVzVG9TaG93OiAxLFxyXG5cdFx0XHRcdFx0XHRcdHNsaWRlc1RvU2Nyb2xsOiAxXHJcblx0XHRcdFx0XHRcdH1cclxuXHRcdFx0XHRcdH0sXHJcblx0XHRcdFx0XVxyXG5cdFx0XHR9KTtcclxuXHJcblx0XHRcdCQoJy5zbGlkZXItYnV0dG9uX19sZWZ0Jykub24oJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcclxuXHRcdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XHJcblx0XHRcdFx0JCgnI2pzLXNsaWRlcl9fd3JhcCcpLnNsaWNrKCdzbGlja1ByZXYnKTtcclxuXHRcdFx0fSk7XHJcblxyXG5cdFx0XHQkKCcuc2xpZGVyLWJ1dHRvbl9fcmlnaHQnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xyXG5cdFx0XHRcdGUucHJldmVudERlZmF1bHQoKTtcclxuXHRcdFx0XHQkKCcjanMtc2xpZGVyX193cmFwJykuc2xpY2soJ3NsaWNrTmV4dCcpO1xyXG5cdFx0XHR9KTtcclxuXHRcdH1cclxuXHR9O1xyXG5cdHNsaWRlcigpO1xyXG5cclxuXHRsZXQgc2FuZHdpdGNoID0gZnVuY3Rpb24gKCkge1xyXG5cdFx0JCgnLnNhbmR3aXRjaCcpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcclxuXHRcdFx0JCgnI2pzLW1haW4tbWVudScpLnRvZ2dsZUNsYXNzKCdmaXhlZCcpO1xyXG5cdFx0XHQkKCdib2R5JykudG9nZ2xlQ2xhc3MoJ2ZpeGVkJyk7XHJcblx0XHRcdCQodGhpcykudG9nZ2xlQ2xhc3MoJ3NhbmR3aXRjaC0tYWN0aXZlJyk7XHJcblx0XHRcdCQodGhpcykuY2xvc2VzdCgnLnNhbmR3aXRjaC13cmFwcGVyJykudG9nZ2xlQ2xhc3MoJ3NhbmR3aXRjaC0tYWN0aXZlJyk7XHJcblx0XHR9KTtcclxuXHR9O1xyXG5cdHNhbmR3aXRjaCgpO1xyXG5cclxuXHRsZXQgc2hvd1BvdXAgPSBmdW5jdGlvbiAoKSB7XHJcblx0XHQkKCcjanMtc2hvdy1wb3B1cCcpLm9uKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XHJcblx0XHRcdGUucHJldmVudERlZmF1bHQoKTtcclxuXHRcdFx0JCgnYm9keScpLmFkZENsYXNzKCdmaXhlZCcpO1xyXG5cdFx0XHQkKCcjanMtcG9wdXAnKS5mYWRlSW4oKTtcclxuXHRcdFx0JCgnI2pzLW92ZXJsYXknKS5mYWRlSW4oKTtcclxuXHRcdH0pO1xyXG5cclxuXHRcdCQoJyNqcy1vdmVybGF5LCAjanMtY2xvc2UtcG9wdXAnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xyXG5cdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XHJcblx0XHRcdCQoJ2JvZHknKS5yZW1vdmVDbGFzcygnZml4ZWQnKTtcclxuXHRcdFx0JCgnI2pzLXBvcHVwJykuZmFkZU91dCgpO1xyXG5cdFx0XHQkKCcjanMtb3ZlcmxheScpLmZhZGVPdXQoKTtcclxuXHRcdH0pO1xyXG5cdH07XHJcblx0c2hvd1BvdXAoKTtcclxufSk7XHJcblxyXG5cclxuXHJcbiJdLCJmaWxlIjoibWFpbi5qcyJ9
