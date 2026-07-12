/**
 * EvoLve Featured Slider Settings
 * Travelify temasindaki slider-settings.js'ten uyarlanmistir.
 */
jQuery(window).on('load', function () {
	var transition_effect = evolve_slider_value.transition_effect;
	var transition_delay = evolve_slider_value.transition_delay;

	jQuery('.slider-cycle').cycle({
		fx: transition_effect,
		pager: '#controllers',
		activePagerClass: 'active',
		next: '#slider-next',
		prev: '#slider-prev',
		timeout: transition_delay,
		speed: 500,
		pause: 1,
		pauseOnPagerHover: 1,
		width: '100%',
		containerResize: 0,
		fit: 1,
		after: function () {
			jQuery(this).parent().css('height', jQuery(this).height());
		},
		cleartypeNoBg: true
	});

	// #slider-next/#slider-prev <a href="#"> - jQuery Cycle kendi click handler'ini
	// bağlıyor ama href="#" varsayılan davranışı sayfayı yukarı kaydırır, bunu engelle.
	jQuery('#slider-next, #slider-prev').on('click', function (e) {
		e.preventDefault();
	});
});
