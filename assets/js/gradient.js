function copyToClipboard(el) {
	const checkIcon = '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>';	
	const copyIcon = '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 8l-4 4l4 4"></path><path d="M17 8l4 4l-4 4"></path><path d="M14 4l-4 16"></path></svg>';	
	const backgroundColor = el.parentElement.parentElement.parentElement.style.backgroundColor;
	const backgroundImage = el.parentElement.parentElement.parentElement.style.backgroundImage;
	const css = `background-color: ${backgroundColor};
background-image: ${backgroundImage};`;
	
	navigator.clipboard.writeText(css).then(function() {
		el.innerHTML = checkIcon;
		el.setAttribute('data-value', 'COPIED');
		setTimeout(() => {
			el.innerHTML = copyIcon;
			el.setAttribute('data-value', 'COPY CSS');
		}, 1500);
	}, function(err) {
		console.error('Could not copy text: ', err);
	});
}