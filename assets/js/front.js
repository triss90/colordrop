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