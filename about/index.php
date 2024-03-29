<?php
include("../_inc/_app.php");
$cd = new ColorDrop;
$title = "ColorDrop | About";
$description = "";
$keywords = "";
include("../_inc/_functions.php");
include("../_inc/header.php");
?>

<style>
svg {
 width: 100%;
 height: auto;
 visibility: hidden;
 margin: -4rem 0;
}

#robotHandHorns {
	opacity: 0;
}

#offRing {
	cursor: pointer;
}
</style>

<body id="about">
<?php include("../_inc/navigation.php"); ?>

<main id="main">
	<div class="container">
		<div class="row center-tiny">
			<div class="tiny-12 small-10 medium-8 large-6">
				<h1 class="linear-wipe funky" style="font-size: 5rem;">About ColorDrop</h1>
				<p class="large">ColorDrop harnesses the power of ChatGPT, leveraging the cutting-edge AI technology in everything we do, from generation and colormatching to utilizing our scanning tools.</p>
				<p class="large">At ColorDrop, we believe that color is an essential part of any design or branding project, and that's why we've created a tool that makes it easy to explore and experiment with different hues and shades. Our user-friendly interface is designed to be intuitive and straightforward, so you can quickly create color palettes that are customized to your needs.</p>
				<p class="large">Whether you're a professional designer or a casual user, ColorDrop has everything you need to get started. With our extensive library of colors and the ability to customize hues and shades, you can create a virtually limitless range of palettes that are tailored to your specific needs. Plus, our tool is optimized for both desktop and mobile devices, so you can create on the go or from the comfort of your own workspace.</p>
				<p class="large">One of the things that sets ColorDrop apart is our focus on user experience. We understand that our users have different needs and preferences, and that's why we've created a tool that's versatile and customizable. With the ability to save and organize your color palettes, download them in a variety of formats, and share them with others, you'll always have the resources you need to take your design projects to the next level.</p>
				<p class="large">Whether you're looking to create a new brand identity, redesign your website, or simply add a splash of color to your social media posts, ColorDrop is the perfect tool to help you unleash your creativity and bring your ideas to life. So why wait? Start exploring the wonderful world of color with ColorDrop!</p>
			</div>
		</div>
	</div>
</main>

<?php include("../_inc/footer.php"); ?>
<?php include("../_inc/scripts.php"); ?>

