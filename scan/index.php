<?php
include("../_inc/_app.php");
$cd = new ColorDrop;
include("../_inc/_functions.php");
include("../_inc/header.php");
?>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

<body id="scan">
<?php include("../_inc/navigation.php"); ?>

<main id="main">
	<div class="container">
		<div class="row">
			<div class="tiny-12 center-tiny">
				<h2>Upload Image</h2>
				<p class="large">Drop an image below and let our AI generate a palette based on the dominant colors in the image.</p>
				<form action="#" id="dropzone" class="dropzone" enctype="multipart/form-data"></form>
			</div>
		</div>
		<div class="row">
			<div class="tiny-12 small-9 medium-9 large-10">
				<div id="previewElement"></div>
			</div>
			<div class="tiny-12 small-3 medium-3 large-2">
				<div class="swatches">
					<div class="swatch" id="Vibrant"></div>
					<input type="text" class="swatch-textbox" id="Vibrant-text" value="">
					<div class="swatch" id="Muted"></div>
					<input type="text" class="swatch-textbox" id="Muted-text" value="">
					<div class="swatch" id="DarkVibrant"></div>
					<input type="text" class="swatch-textbox" id="DarkVibrant-text" value="">
					<div class="swatch" id="DarkMuted"></div>
					<input type="text" class="swatch-textbox" id="DarkMuted-text" value="">
					<div class="swatch" id="LightVibrant"></div>
					<input type="text" class="swatch-textbox" id="LightVibrant-text" value="">
				</div>
			</div>
		</div>
	</div>
</main>

<?php include("../_inc/footer.php"); ?>
<?php include("../_inc/scripts.php"); ?>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script src="/assets/js/vibrant.min.js"></script>
<script src="/assets/js/scan.min.js"></script>
