// Scan Colors
function colorScan() {
  const imgFile = document.querySelector(".dropzone .dz-preview .dz-image img");
  const image = imgFile;
  image.onload = () => { 
    var vibrant = new Vibrant(image);
    var swatches = vibrant.swatches();
    for (var swatch in swatches) {
      if (swatches.hasOwnProperty(swatch) && swatches[swatch]) {
        // console.log(swatch, swatches[swatch].getHex());
        const swatchElement = document.getElementById(swatch);
        const swatchText = document.getElementById(swatch+"-text");
        swatchText.value = swatches[swatch].getHex();
        swatchElement.style.backgroundColor = swatches[swatch].getHex();
        swatchElement.innerHTML  = "<p onclick='copyToClipboard(\""+swatch+"\-text\",this)'>"+swatches[swatch].getHex()+"</p>";
      }	
    }
  };
  image.src = imgFile;
};

// Dropzone
Dropzone.autoDiscover = false;
var myDropzone = new Dropzone("#dropzone", {
    acceptedFiles: "image/*",
    maxFiles: 1,
    thumbnailWidth: 350,
    thumbnailHeight: 350,
    dictDefaultMessage: "Drop .png or .jpg here",
});

myDropzone.on("success", function(file) {
  const previewElement = document.querySelector('#previewElement');
  const image = new Image();
  image.src = file.dataURL;
  previewElement.innerHTML = "";
  previewElement.appendChild(image);
});

myDropzone.on("complete", function(file) {
  colorScan();
  myDropzone.removeFile(file);
});


// Copy color codes
function copyToClipboard(el, button) {
  const textBox = document.getElementById(el);
  const textBoxValue = textBox.value;
  const buttonElement = button;
  const notification = document.querySelector('.notification');
  const checkText = "&#10003;";
  textBox.select();
  document.execCommand("copy");        
  buttonElement.innerHTML = checkText;
  const timeout = setTimeout(function(){
    buttonElement.innerHTML = textBoxValue;
    clearTimeout(timeout);
  }, 1500);
}

