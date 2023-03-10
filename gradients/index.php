<?php
include("../_inc/_app.php");
$app = new MyApp;
include("../_inc/_functions.php");
include("../_inc/header.php");
?>

<body id="gradients">

<?php include("../_inc/navigation.php"); ?>

<!--
	background: linear-gradient(287deg, rgba(63,94,251,1) 0%, rgba(66,163,235,1) 44%, rgba(68,203,225,1) 63%, rgba(70,252,213,0.955641631652661) 100%);
-->

<main id="main">
	<div class="row">
	<?php foreach ($app->DatabasePrepareQuery('SELECT * FROM gradients ORDER BY created DESC', array()) as $gradient) { ?>
		<?php
		$gradient_colors = "";
		$color_array = explode(" ", $gradient['colors']);
		$location_array = explode(" ", $gradient['location']);
		
		for ($i = 0; $i <= count($color_array)-1; $i++) {
			$gradient_colors .= $color_array[$i]." ".$location_array[$i].", ";
		}
		$gradient_colors = substr($gradient_colors, 0, -2);
		?>
		<div id="<?php echo $gradient['id'];?>" class="tiny-6 small-4 medium-3 large-2">
			<div class="gradient" style="background:<?php echo $gradient['gradient_type'];?>(<?php echo $gradient['direction']?>, <?php echo $gradient_colors; ?>)">
				<div class="footer">
					<div class="left">
						<button class="likes" onclick="like(this)">
							<svg class="heart" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
								<title>heart</title>
								<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
							</svg>
							<span class="like-count">
								<?php echo $app->DatabasePrepareQueryReturnFirstField("SELECT likes FROM likes WHERE palette = ?", array($gradient['id']))[0];?>
							</span>
						</button>
						<!-- <a class="view" href="/palette/?id=<?php echo $gradient['id'];?>">
							<svg class="eye" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
								<title>eye</title>
								<path d="M16 6c-6.979 0-13.028 4.064-16 10 2.972 5.936 9.021 10 16 10s13.027-4.064 16-10c-2.972-5.936-9.021-10-16-10zM23.889 11.303c1.88 1.199 3.473 2.805 4.67 4.697-1.197 1.891-2.79 3.498-4.67 4.697-2.362 1.507-5.090 2.303-7.889 2.303s-5.527-0.796-7.889-2.303c-1.88-1.199-3.473-2.805-4.67-4.697 1.197-1.891 2.79-3.498 4.67-4.697 0.122-0.078 0.246-0.154 0.371-0.228-0.311 0.854-0.482 1.776-0.482 2.737 0 4.418 3.582 8 8 8s8-3.582 8-8c0-0.962-0.17-1.883-0.482-2.737 0.124 0.074 0.248 0.15 0.371 0.228v0zM16 13c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3z"></path>
							</svg>
						</a> -->
					</div>
					<date class="date"><?php echo timeago($gradient['created']);?></date>
				</div>
			</div>
		</div>
	<?php } ?>
	</div>
</main>


<?php include("../_inc/scripts.php"); ?>


<?php include("../_inc/footer.php"); ?>

