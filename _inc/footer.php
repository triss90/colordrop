<footer>
	<p>Designed, built, and maintained by <a href="https://triss.dev">Tristan White</a> &copy; 2015-<?php echo date("Y"); ?></p>
	<p>Powered by <a href="https://cloudservers.dk" target="_blank">cloudservers.dk</a></p>
</footer>
<div class="totop" id="totop" onclick="scrollToTop();">^</div>
<div class="ad" id="carbonAd">
	<div class="close-button" onclick="carbonAdToggle(this)">&#10005;</div>
	<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CKYIP2QL&placement=colordropio" id="_carbonads_js"></script>
</div>
<script>
	// Display scroll-to-top link
	function toTop() {
		let scrollTop = window.pageYOffset;
		const toTop = document.querySelector('#totop');    
		
		window.addEventListener('scroll', function() {
			scrollTop = window.pageYOffset;
			if(scrollTop >= 350) {
				toTop.classList.add('active');
			}
			if(scrollTop < 350) {
				toTop.classList.remove('active');
			}
		});
	}
	toTop();
</script>
</body>
</html>