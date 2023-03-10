/*******************/
/* Infinite Scroll */
/*******************/
let i = 1;
let processing;
$(window).scroll(function() {
	if (processing) {
		return false;
	}
	if($(window).scrollTop()+10 >= $(document).height() - $(window).height()) {
		processing = true;
		$.ajax(
			'/_inc/_scroll.php?p='+i,
			{
				success: function(data) {
					if (data.trim() !== '') {
						document.querySelector('#main .row').innerHTML += data;
						i++;
						processing = false;
						checkLikes();
					} else {
						document.querySelector('#loader').classList.add('hide');
					}
				},
				error: function() {
					console.log('Error loading colors');
				}
			}
		);
	}
});

/**************/
/* BuySellAds */
/**************/
(function() {
  if (typeof _bsa !== 'undefined' && _bsa) {
	_bsa.init('custom', 'CKYI42JJ', 'placement:wallcard-demo', {
	  target: '#wall-js',
	  template:
		`
		<a href="##statlink##" class="wall" style="background-color: ##backgroundColor##; color: ##textColor##" rel="sponsored noopener" target="_blank" title="##company## — ##tagline##">
		  <div class="wall__sponsor">Sponsored by ##company##</div>
		  <div class="wall__tagline">##companyTagline##</div>
		  <div class="wall__description">##description##</div>
		  <div class="wall__footer">
			<div class="wall__image"><img src="##logo##"></div>
			<div class="wall__cta" style="background-color: ##ctaBackgroundColor##; color: ##ctaTextColor##;">##callToAction##</div>
		  </div>
		</a>
		`
	});
  }
})();