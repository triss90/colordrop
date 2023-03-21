// Copy color codes
function backgroundColor(el) {
	let colorRGB = el.style.backgroundColor
	colorRGB = colorRGB.slice(4);
	colorRGB = colorRGB.slice(0,-1);
	colorRGB = colorRGB.replace(/\s/g, '');
	const colorRGBArray = colorRGB.split(",");
	const colorHEX = rgbToHex(parseInt(colorRGBArray[0]), parseInt(colorRGBArray[1]), parseInt(colorRGBArray[2]));
	return colorHEX;
}

function copyToClipboard(el) {
	const checkIcon = '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>';	
	navigator.clipboard.writeText(backgroundColor(el)).then(function() {
		// console.log("Copied: "+colorHEX);
		el.innerHTML = checkIcon;
		setTimeout(() => {
			el.innerHTML = "";
		}, 1500);
	}, function(err) {
		console.error('Could not copy text: ', err);
	});
}


