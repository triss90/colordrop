/**************/
/* BuySellAds */
/**************/
(function() {
	if (typeof _bsa !== 'undefined' && _bsa) {
		_bsa.init('custom', 'CKYI42JJ', 'placement:wallcard-demo', {
			target: '#wall-js',
			template: `
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

/****************************/
/* Fallback CloudServers Ad */
/****************************/
function BSANativeCallback(a) { 
  if(a.ads.length == 0) {
	console.log("No Ads")
	const adContainer = document.querySelector('#wall-js');
	adContainer.innerHTML = `
	<div class="cloudservers">
		<b>Sponsored by cloudservers.dk</b><br>
		<small>Cloudservers.dk. Designed for Performance. Built for everything!</small><br>
		<div class="cloudservers-footer">
			<img src="/assets/img/cloudservers.png" alt="Cloudservers Logo">
			<a href="https://cloudservers.dk?referral=colordrop" target="_blank" class="button">Try for free</a>
		</div>
	</div>
	`;
  }
}
