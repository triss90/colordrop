<?php
include("../_inc/_app.php");
$cd = new ColorDrop;
include("../_inc/_functions.php");
include("../_inc/header.php");
include("../_inc/loader.php");
?>

<body id="gradients">

<?php include("../_inc/navigation.php"); ?>

<header id="header" class="row center-tiny">
	<div class="tiny">
		<h1 class="linear-wipe funky" style="font-size: 5rem;">Websafe Gradients</h1>
		<h3>Premium curated color palettes</h3>
	</div>
</header>

<main id="main">
	<div class="row">
		<!-- BuySellAds START -->
		<div class="tiny-12 small-8 medium-6 large-4 wide-2">
			<div id="wall-js"></div>
		</div>
		<!-- BuySellAds END -->
		<?php foreach ($cd->DatabasePrepareQuery('SELECT * FROM gradients ORDER BY created DESC', array()) as $gradient) { ?>
			<div id="<?php echo $gradient['id'];?>" class="tiny-6 small-4 medium-3 large-2 wide-1">
				<div class="gradient" style="<?php echo $gradient['color'];?>;<?php echo $gradient['gradient'];?>;">
					<div class="footer">
						<div class="left">
							<a class="code" data-value="COPY CSS" onclick="copyToClipboard(this)" href="#0">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							   	<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							   	<path d="M7 8l-4 4l4 4"></path>
							   	<path d="M17 8l4 4l-4 4"></path>
							   	<path d="M14 4l-4 16"></path>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</main>

<?php include("../_inc/footer.php"); ?>
<?php include("../_inc/scripts.php"); ?>
<script src="../assets/js/gradient.min.js"></script>
<script src="//m.servedby-buysellads.com/monetization.custom.js"></script>
<script src="../assets/js/bsa.min.js"></script>
