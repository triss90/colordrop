// JSColor
jscolor.presets.default = {
   position: 'bottom', 
   width: 181, 
   height: 121,
   palette: '#fff #fcd #fdc #ffc #dfc #dff #cdf #dcf #ccc', 
   paletteCols: 9, 
   paletteHeight: 25,
   padding: 16, 
   sliderSize: 25, 
   borderRadius: 4,
   borderWidth: 0, 
   controlBorderWidth: 1, 
   pointerBorderWidth: 2,
   borderColor: '#f1f1f1', 
   controlBorderColor: '#ddd', 
   backgroundColor: '#f9f9f9', 
   shadowColor: 'rgba(0,0,0,0.2)',
   closeButton: true, 
   closeText: 'OK', 
   buttonColor: '#333',
}

// HEX to HSL
function hexToHSL(hex) {
  var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
	r = parseInt(result[1], 16);
	g = parseInt(result[2], 16);
	b = parseInt(result[3], 16);
	r /= 255, g /= 255, b /= 255;
	var max = Math.max(r, g, b), min = Math.min(r, g, b);
	var h, s, l = (max + min) / 2;
	if(max == min){
	  h = s = 0; // achromatic
	} else {
	  var d = max - min;
	  s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
	  switch(max){
		case r: h = (g - b) / d + (g < b ? 6 : 0); break;
		case g: h = (b - r) / d + 2; break;
		case b: h = (r - g) / d + 4; break;
	  }
	  h /= 6;
	}
  var HSL = new Object();
  HSL['h']=h;
  HSL['s']=s;
  HSL['l']=l;
  return HSL;
}

// RGB to HSL
function RGBToHSL(r,g,b) {
	// Make r, g, and b fractions of 1
	r /= 255;
	g /= 255;
	b /= 255;
	
	// Find greatest and smallest channel values
	let cmin = Math.min(r,g,b),
	  cmax = Math.max(r,g,b),
	  delta = cmax - cmin,
	  h = 0,
	  s = 0,
	  l = 0;
	  
	// Calculate hue
	// No difference
	if (delta == 0) {
		h = 0;
	} else if (cmax == r) {
		// Red is max
		h = ((g - b) / delta) % 6;
	} else if (cmax == g) {
		// Green is max
		h = (b - r) / delta + 2;
	} else {
		// Blue is max
		h = (r - g) / delta + 4;
		h = Math.round(h * 60);	
	}
	 
	// Make negative hues positive behind 360°
	if (h < 0) {
		h += 360;
		// Calculate lightness
		l = (cmax + cmin) / 2;
		// Calculate saturation
		s = delta == 0 ? 0 : delta / (1 - Math.abs(2 * l - 1));
		// Multiply l and s by 100
		s = +(s * 100).toFixed(1);
		l = +(l * 100).toFixed(1);
		return "hsl(" + h + "," + s + "%," + l + "%)";
	}
}

// Update colors
function update(picker, id) {
	var r = document.querySelector(':root');
	document.documentElement.style.setProperty('--color-'+id, picker.toHEXString());
	// Get inputs
	let hexInput = document.getElementById('hex-input-'+id);
	let rgbInput = document.getElementById('rgb-input-'+id);
	let hslInput = document.getElementById('hsl-input-'+id);
	// Hex
	hexInput.value = picker.toHEXString();
	// RBG
	let formattedRGB = picker.toRGBAString().replace("rgba(","");
	formattedRGB = formattedRGB.replace(",1)","");
	formattedRGB = formattedRGB.split(',');
	rgbInput.value = picker.toRGBAString();
	// HSL
	hslInput.value = RGBToHSL(formattedRGB[0],formattedRGB[1],formattedRGB[2]);
}
   
// Slider example   
var rangeSlider = function(){
  var slider = $('.range-slider'),
	  range = $('.range-slider__range'),
	  value = $('.range-slider__value');
  slider.each(function(){
	value.each(function(){
	  var value = $(this).prev().attr('value');
	  $(this).html(value);
	});
	range.on('input', function(){
	  $(this).next(value).html(this.value);
	});
  });
};
rangeSlider();

// Copy color codes
function copyToClipboard(el, button) {
	const textBox = document.getElementById(el);
	const buttonElement = button;
	const notification = document.querySelector('.notification');
	const copyText = `<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-copy"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
	   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
	   <path d="M8 8m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z"></path>
	   <path d="M16 8v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2"></path>
	</svg>`;
	const checkText = "&#10003;";
	
	textBox.select();
	document.execCommand("copy");        
	buttonElement.innerHTML = checkText;
	const timeout = setTimeout(function(){
		buttonElement.innerHTML = copyText;
		clearTimeout(timeout);
	}, 1500);
}