<?php
include("../_inc/_app.php");
$cd = new ColorDrop;
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
	<?php foreach ($cd->DatabasePrepareQuery('SELECT * FROM gradients ORDER BY created DESC', array()) as $gradient) { ?>
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
						
						<a class="code" href="#0">
							<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							   <path d="M7 8l-4 4l4 4"></path>
							   <path d="M17 8l4 4l-4 4"></path>
							   <path d="M14 4l-4 16"></path>
							</svg>
						</a>
					</div>
					<date class="date"><?php echo timeago($gradient['created']);?></date>
				</div>
			</div>
		</div>
	<?php } ?>
	</div>
</main>

<?php include("../_inc/footer.php"); ?>
<?php include("../_inc/scripts.php"); ?>
