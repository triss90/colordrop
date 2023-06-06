 class="large"<?php
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
				<h1 class="linear-wipe funky" style="font-size: 5rem;">AI</h1>
				<p class="large">ColorDrop harnesses the power of ChatGPT, leveraging the cutting-edge AI technology in everything we do, from colormatching to utilizing our scanning tools.</p>
				<div class="ai-toggle">
					<svg id="mainSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600">
						<defs>
							<clipPath id="handMask">
								<rect class="handMask" x="214.68" y="130" width="370.64" height="303.25" rx="51" ry="51" fill="red" stroke="none" stroke-miterlimit="10" stroke-width="2"/>
								</clipPath>
							</defs>
						<g id="whole">
							<circle id="offRing" cx="340" cy="300" r="30" fill="#fff" stroke="#ddd" stroke-miterlimit="10" stroke-width="3"/>
							<g id="AIText">
							<path d="m377.14,228.29c-.72,0-1.48-.15-2.3-.46-.82-.31-1.48-.7-1.99-1.19-.51-.48-.77-1.06-.77-1.72,0-.15.02-.38.08-.69l15.24-49.63c.31-.92.96-1.61,1.95-2.07,1-.46,2.05-.69,3.18-.69s2.26.23,3.25.69c1,.46,1.65,1.15,1.95,2.07l15.17,49.63c.1.31.15.54.15.69,0,.61-.27,1.18-.8,1.69-.54.51-1.2.92-1.99,1.22-.79.31-1.57.46-2.34.46-.66,0-1.24-.13-1.72-.38-.49-.25-.83-.69-1.03-1.3l-3.14-10.88h-18.99l-3.06,10.88c-.15.61-.5,1.05-1.03,1.3-.54.26-1.14.38-1.8.38Zm7.74-19.07h15.32l-7.66-26.27-7.66,26.27Z" fill="#1eafed"/>
							<path d="m423.17,228.29c-1.02,0-1.95-.23-2.8-.69-.84-.46-1.26-1.12-1.26-1.99v-50.7c0-.92.42-1.58,1.26-1.99.84-.41,1.77-.61,2.8-.61s1.95.21,2.79.61c.84.41,1.26,1.07,1.26,1.99v50.7c0,.87-.42,1.53-1.26,1.99-.84.46-1.77.69-2.79.69Z" fill="#1eafed"/>
							</g>
							<g id="offText" fill="#ddd">
							<g>
								<path d="m327.53,372.7c-1.19,0-2.26-.21-3.21-.62-.94-.41-1.69-1.07-2.24-1.99-.55-.92-.83-2.13-.83-3.64v-8.15c0-1.51.27-2.73.83-3.64.55-.91,1.3-1.58,2.24-1.99.94-.41,2.01-.62,3.21-.62s2.24.21,3.19.62c.95.41,1.71,1.07,2.27,1.99.56.92.84,2.13.84,3.64v8.15c0,1.51-.28,2.73-.84,3.64-.56.91-1.32,1.58-2.27,1.99-.95.41-2.02.62-3.19.62Zm0-2.63c1.03,0,1.84-.29,2.44-.88.6-.59.9-1.5.9-2.73v-8.15c0-1.23-.29-2.14-.88-2.73s-1.41-.88-2.45-.88-1.86.29-2.45.88-.88,1.5-.88,2.73v8.15c0,1.23.29,2.14.88,2.73s1.4.88,2.45.88Z" />
								<path d="m338.78,372.53c-.37,0-.71-.08-1.02-.24-.31-.16-.46-.41-.46-.74v-18.51c0-.32.14-.56.42-.73.28-.17.58-.25.9-.25h9.83c.34,0,.58.14.73.42s.22.57.22.87c0,.35-.08.67-.24.94-.16.27-.4.41-.71.41h-8.18v6.41h4.34c.32,0,.55.12.71.36.16.24.24.52.24.84,0,.26-.08.52-.22.77s-.39.38-.73.38h-4.34v8.09c0,.34-.15.58-.46.74-.31.16-.65.24-1.02.24Z" />
								<path d="m352.9,372.53c-.37,0-.71-.08-1.02-.24-.31-.16-.46-.41-.46-.74v-18.51c0-.32.14-.56.42-.73.28-.17.58-.25.9-.25h9.83c.34,0,.58.14.73.42s.22.57.22.87c0,.35-.08.67-.24.94-.16.27-.4.41-.71.41h-8.18v6.41h4.34c.32,0,.55.12.71.36.16.24.24.52.24.84,0,.26-.08.52-.22.77s-.39.38-.73.38h-4.34v8.09c0,.34-.15.58-.46.74-.31.16-.65.24-1.02.24Z" />
							</g>
							</g>
							<g id="onText" fill="#1eafed">
							<path d="m453.08,372.7c-1.19,0-2.26-.21-3.21-.62-.94-.41-1.69-1.07-2.24-1.99-.55-.92-.83-2.13-.83-3.64v-8.15c0-1.51.27-2.73.83-3.64.55-.91,1.3-1.58,2.24-1.99.94-.41,2.01-.62,3.21-.62s2.24.21,3.19.62c.95.41,1.71,1.07,2.27,1.99.56.92.84,2.13.84,3.64v8.15c0,1.51-.28,2.73-.84,3.64-.56.91-1.32,1.58-2.27,1.99-.95.41-2.02.62-3.19.62Zm0-2.63c1.03,0,1.84-.29,2.44-.88.6-.59.9-1.5.9-2.73v-8.15c0-1.23-.29-2.14-.88-2.73s-1.41-.88-2.45-.88-1.86.29-2.45.88-.88,1.5-.88,2.73v8.15c0,1.23.29,2.14.88,2.73s1.4.88,2.45.88Z" />
							<path d="m464.33,372.53c-.37,0-.71-.08-1.02-.25-.31-.17-.46-.41-.46-.73v-18.51c0-.35.15-.61.46-.76.31-.15.65-.22,1.02-.22.35,0,.66.05.91.15.25.1.48.28.69.52.21.24.42.58.64,1.01l6.22,12.12v-12.85c0-.34.15-.58.46-.73s.65-.22,1.02-.22.71.07,1.02.22.46.39.46.73v18.54c0,.32-.15.56-.46.73s-.65.25-1.02.25-.71-.09-1.01-.28c-.3-.19-.55-.46-.76-.81l-6.69-12.74v12.85c0,.32-.15.56-.46.73-.31.17-.65.25-1.02.25Z" />
							</g>
							<circle id="onRing" cx="460" cy="300" r="30" fill="none" stroke="#1eafed" stroke-miterlimit="10" stroke-width="3"/>
						<g clip-path="url(#handMask)">		
							<g id="robotThumb">
							<path d="m345.6,221.86l14.68,42.01-2.07,14.92c-.23,4.56-1.71,13.19-9.22,12.62-4.66-.36-7.4-4.02-6.92-7.55l2.09-14-13.94-36.13s2.53-10.42,15.38-11.87Z" fill="#adc4d9" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.56"/>
							<path d="m343.67,268.69c7.37,2.01,12.83.25,16.6-4.82" fill="none" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.56"/>
							</g>
							</g>
							<circle id="offDot" cx="340" cy="300" r="0" fill="#1eafed"/>
							<circle id="onDot" cx="460" cy="300" r="14" fill="#1eafed"/>
								<g clip-path="url(#handMask)">
									<g id="allRobotHands">
						<path id="palmBlock" d="m283.85,230.1c.72,19.66,17.24,35.01,36.89,34.29,5.9-.22,11.65-1.89,16.74-4.88,5.88-5.02,9.63-13.18,12.03-23.33h.01s-.05-.14-.05-.14c-1.94-4.18-2.76-8.79-2.39-13.38.65-4.82-1.8-9.52-6.12-11.75l-21.2-10.93c-5.16-2.66-11.51-.64-14.17,4.53,0,0,0,0,0,0-5.01,9.73-13.05,9.6-21.77,25.57l.02.03Z" fill="#fff"/>				
							<g id="robotHand">
							<g id="robotIndexFinger">
								<path d="m317.72,266.55l-4.03,22.24,6.69,13.83s2.93,7.1,9.82,5.76,4.83-7.53,4.35-9.24-4.15-12.12-4.15-12.12l6.97-27.99" fill="#fff" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
								<path d="m330.4,287.03c-3.72,5.5-9.48,5.57-16.71,1.76" fill="none" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							</g>
							<path d="m276.02,261.19c-3.89-1.99-5.42-6.76-3.43-10.64,0,0,0-.02.01-.03l9.13-18.97c9.35-18.13,18.01-17.69,23.38-28.06,2.76-5.35,9.33-7.45,14.68-4.69,0,0,0,0,0,0l21.95,11.32c4.47,2.31,7.01,7.18,6.33,12.17-.38,4.75.47,9.53,2.48,13.85l-22.27,7.94c-3.65,7.18-17.06,35.3-17.06,35.3-2.01,3.88-6.8,5.4-10.68,3.39s-5.4-6.8-3.39-10.68l1.82-3.52c-2.01,3.89-6.78,5.42-10.67,3.41-3.89-2.01-5.42-6.78-3.41-10.67l1.82-3.52c-1.99,3.88-6.76,5.42-10.65,3.42-.01,0-.02-.01-.03-.02Z" fill="#fff" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							<path d="m302.1,261.18l-3.16,7.39" fill="none" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							<path d="m289.76,250.54l-3.09,7.25" fill="none" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							<path d="m343.91,211.23l-24.65-12.71,5.66-10.99,24.65,12.71-5.66,10.99Z" fill="#6a7784" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							<path d="m403.11,114.99c-2.51,21.87-19.99,48.22-28.49,59.59l-14.11,23.21c-2.2,3.46-6.67,4.67-10.31,2.79l-25.87-13.34c-3.66-1.87-5.28-6.23-3.72-10.03,0,0,4.55-19.44,6.99-24.56s15.03-34.74,33.46-59.07l42.05,21.41Z" fill="#fff"/>
							<path d="m321.87,184.17l9.09,4.56c-2.48-1.77-3.3-5.47-1.87-8.93l10.78-24.9c4.56-13.38,16.14-42.73,31.18-58.22l-9.83-5.01c-12.59,17.7-27.97,45.3-32.53,58.68l-7.15,22.99c-1.57,3.78-2.58,7.76.34,10.82Z" fill="#f8f8f8"/>
							<path d="m282.6,229.97c.74,20.35,17.85,36.25,38.2,35.51,6.11-.22,12.06-1.96,17.33-5.06l12.45-24.16h.01s-.05-.15-.05-.15c-2-4.33-2.86-9.1-2.48-13.85.68-4.99-1.86-9.86-6.33-12.17l-21.95-11.32c-5.35-2.76-11.92-.66-14.68,4.69,0,0,0,0,0,0-5.19,10.07-13.51,9.95-22.54,26.47l.03.03Z" fill="#fff"/>
							<path d="m282.55,229.81l-.03-.02c4.52-8.26,8.85-12.36,12.71-15.66,3.86-3.29,7.24-5.79,9.83-10.82,2.76-5.35,9.34-7.45,14.68-4.69l7.69,3.97c-5.16-2.09-11.15.06-13.75,5.11-2.59,5.04-5.98,7.52-9.84,10.82s-8.19,7.39-12.71,15.66l.03.02c.45,12.13,6.69,22.68,15.97,29.06-13.86-4.89-24.02-17.86-24.59-33.45Z" fill="#f8f8f8"/>
							<path d="m338.14,260.43l6.99-13.56h0s-6.99,13.56-6.99,13.56h0Z" fill="#f8f8f8" stroke="#585b56" stroke-miterlimit="10" stroke-width="1.99"/>
							<path d="m350.6,236.28h0s0,.02,0,.02v-.02Z" fill="#f8f8f8" stroke="#585b56" stroke-miterlimit="10" stroke-width="1.99"/>
							<path d="m282.6,229.97c.74,20.35,17.85,36.25,38.2,35.51,6.11-.22,12.06-1.96,17.33-5.06l12.45-24.16h.01s-.05-.15-.05-.15c-2-4.33-2.86-9.1-2.48-13.85.68-4.99-1.86-9.86-6.33-12.17l-21.95-11.32c-5.35-2.76-11.92-.66-14.68,4.69,0,0,0,0,0,0-5.19,10.07-13.51,9.95-22.54,26.47" fill="none" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							<path d="m403.11,114.99c-2.51,21.87-19.99,48.22-28.49,59.59l-14.11,23.21c-2.2,3.46-6.67,4.67-10.31,2.79l-25.87-13.34c-3.66-1.87-5.28-6.23-3.72-10.03,0,0,4.55-19.44,6.99-24.56s15.03-34.74,33.46-59.07l42.05,21.41Z" fill="none" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							</g>
									
						<g id="robotHandHorns">
							<g id="robotHornFinger">
							<path d="m317.72,266.55l-4.03,22.24s-2.22,11.59-2.55,13.65.48,8.63,7.17,9.56c5.91.82,8.27-5.33,9.13-9.59s3.43-15.39,3.43-15.39l7.27-27.99" fill="#fff" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							</g>
							<path d="m262.4,283.8c-6.35-3.45-2.9-9.9-.91-13.79,0,0,0-.02.01-.03l20.23-38.44c9.35-18.13,18.01-17.69,23.38-28.06,2.76-5.35,9.33-7.45,14.68-4.69,0,0,0,0,0,0l21.95,11.32c4.47,2.31,7.01,7.18,6.33,12.17-.38,4.75.47,9.53,2.48,13.85l-22.27,7.94c-3.65,7.18-17.06,35.3-17.06,35.3-2.01,3.88-6.8,5.4-10.68,3.39s-5.4-6.8-3.39-10.68l1.82-3.52c-2.01,3.89-6.78,5.42-10.67,3.41-3.89-2.01-3.63-10.3-1.62-14.19l-12.23,19.85c-1.99,3.88-5.69,9.61-12.04,6.16Z" fill="#fff" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							<path d="m302.1,261.18l-3.16,7.39" fill="none" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							<path d="m289.76,250.54l-3.09,7.25" fill="none" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							<path d="m343.91,211.23l-24.65-12.71,5.66-10.99,24.65,12.71-5.66,10.99Z" fill="#6a7784" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							<path d="m403.11,114.99c-2.51,21.87-19.99,48.22-28.49,59.59l-14.11,23.21c-2.2,3.46-6.67,4.67-10.31,2.79l-25.87-13.34c-3.66-1.87-5.28-6.23-3.72-10.03,0,0,4.55-19.44,6.99-24.56s15.03-34.74,33.46-59.07l42.05,21.41Z" fill="#fff"/>
							<path d="m321.87,184.17l9.09,4.56c-2.48-1.77-3.3-5.47-1.87-8.93l10.78-24.9c4.56-13.38,16.14-42.73,31.18-58.22l-9.83-5.01c-12.59,17.7-27.97,45.3-32.53,58.68l-7.15,22.99c-1.57,3.78-2.58,7.76.34,10.82Z" fill="#f8f8f8"/>
							<path d="m282.6,229.97c.74,20.35,17.85,36.25,38.2,35.51,6.11-.22,12.06-1.96,17.33-5.06,6.09-5.2,9.97-13.65,12.45-24.16h.01s-.05-.15-.05-.15c-2-4.33-2.86-9.1-2.48-13.85.68-4.99-1.86-9.86-6.33-12.17l-21.95-11.32c-5.35-2.76-11.92-.66-14.68,4.69,0,0,0,0,0,0-5.19,10.07-13.51,9.95-22.54,26.47l.03.03Z" fill="#fff"/>
							<path d="m282.55,229.81l-.03-.02c4.52-8.26,8.85-12.36,12.71-15.66,3.86-3.29,7.24-5.79,9.83-10.82,2.76-5.35,9.34-7.45,14.68-4.69l7.69,3.97c-5.16-2.09-11.15.06-13.75,5.11-2.59,5.04-5.98,7.52-9.84,10.82s-8.19,7.39-12.71,15.66l.03.02c.45,12.13,6.69,22.68,15.97,29.06-13.86-4.89-24.02-17.86-24.59-33.45Z" fill="#f8f8f8"/>
							<path d="m338.14,260.43h0" fill="#f8f8f8" stroke="#585b56" stroke-miterlimit="10" stroke-width="1.99"/>
							<path d="m350.6,236.28h0s0,.02,0,.02v-.02Z" fill="#f8f8f8" stroke="#585b56" stroke-miterlimit="10" stroke-width="1.99"/>
							<path d="m282.6,229.97c.74,20.35,17.85,36.25,38.2,35.51,6.11-.22,12.06-1.96,17.33-5.06,6.56-4.7,9.53-14.4,12.45-24.16h.01s-.05-.15-.05-.15c-2-4.33-2.86-9.1-2.48-13.85.68-4.99-1.86-9.86-6.33-12.17l-21.95-11.32c-5.35-2.76-11.92-.66-14.68,4.69,0,0,0,0,0,0-5.19,10.07-13.51,9.95-22.54,26.47" fill="none" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							<path d="m403.11,114.99c-2.51,21.87-19.99,48.22-28.49,59.59l-14.11,23.21c-2.2,3.46-6.67,4.67-10.31,2.79l-25.87-13.34c-3.66-1.87-5.28-6.23-3.72-10.03,0,0,4.55-19.44,6.99-24.56s15.03-34.74,33.46-59.07l42.05,21.41Z" fill="none" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							<path d="m313.19,291.43c4.27,4.39,9,6.75,16.05,2.74" fill="none" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							<path d="m316.58,275.11c4.27,4.39,9,6.75,16.05,2.74" fill="none" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							<path d="m263.86,265.51c2.22,6.11,6.12,9.68,12.71,8.67" fill="none" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
							<path d="m271.72,250.54c2.22,6.11,6.12,9.68,12.71,8.67" fill="none" stroke="#585b56" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.99"/>
						</g>
									</g>
									</g>
							<rect id="outline" x="214.68" y="130" width="370.64" height="303.25" rx="32" fill="none" stroke="#f3f3f3" stroke-miterlimit="10" stroke-width="3"/>
						</g>
						</svg>

				</div>

				<h1 class="linear-wipe funky" style="font-size: 5rem;">About ColorDrop</h1>
				<p class="large">At ColorDrop, we believe that color is an essential part of any design or branding project, and that's why we've created a tool that makes it easy to explore and experiment with different hues and shades. Our user-friendly interface is designed to be intuitive and straightforward, so you can quickly create color palettes that are customized to your needs.</p>
				<p class="large">Whether you're a professional designer or a casual user, ColorDrop has everything you need to get started. With our extensive library of colors and the ability to customize hues and shades, you can create a virtually limitless range of palettes that are tailored to your specific needs. Plus, our tool is optimized for both desktop and mobile devices, so you can create on the go or from the comfort of your own workspace.</p>
				<p class="large">One of the things that sets ColorDrop apart is our focus on user experience. We understand that our users have different needs and preferences, and that's why we've created a tool that's versatile and customizable. With the ability to save and organize your color palettes, download them in a variety of formats, and share them with others, you'll always have the resources you need to take your design projects to the next level.</p>
				<p class="large">Whether you're looking to create a new brand identity, redesign your website, or simply add a splash of color to your social media posts, ColorDrop is the perfect tool to help you unleash your creativity and bring your ideas to life. So why wait? Start exploring the wonderful world of color with ColorDrop!</p>
			</div>
		</div>
	</div>
</main>

<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.co/gsap@3/dist/Draggable.min.js"></script>
<script>
	gsap.config({trialWarn: false});
	let select = s => document.querySelector(s),
			q = gsap.utils.selector(document),
			toArray = s => gsap.utils.toArray(s),
			mainSVG = select('#mainSVG'),
			toggle = select('#offRing')

	gsap.set('svg', {
		visibility: 'visible'
	})
	function setToggledEnabled(state) {
		if(state) {
			toggle.addEventListener('click', click);
			toggle.style.pointerEvents = 'auto'
		} else {
			toggle.removeEventListener('click', click);
			toggle.style.pointerEvents = 'none'
		}
	}

	let tl = gsap.timeline({
		defaults: {
			duration: 0.3
		},
		paused: true,
		onComplete: setToggledEnabled,
		onCompleteParams: [true]	
	});
	tl.add('offSelected')
	.to('#onDot', {
		attr: {
			r: 0
		},
		//ease: 'elastic(0.6, 0.4)'
	}, 'offSelected')
	.to('#onRing', {
		stroke: '#ddd'
	}, 'offSelected')
	.to('#onText', {
		fill: '#ddd'
	}, 'offSelected')

	.to('#offDot', {
		attr: {
			r: 14
		},
		duration: 0.6,
		ease: 'elastic(0.6, 0.4)'
	}, 'offSelected')
	.to('#offRing', {
		stroke: '#1789f2'
	}, 'offSelected')
	.to('#offText', {
		fill: '#1789f2'
	}, 'offSelected')


	.add('handIn', '+=1')
	.from(['#allRobotHands', '#robotThumb'], {
		x: 60,
		y: -180,
		duration: 0.4,
		ease: 'back(0.3)'
	}, 'handIn')
	.from('#robotThumb', {
		rotation: -20,
		transformOrigin: '20% 20%',
		duration: 0.4,
		ease: 'expo.inOut'
	}, 'handIn+=0.1')
	.from('#robotIndexFinger', {
		rotation: 15,
		transformOrigin: '100% 0%',
		duration: 0.4,
		ease: 'expo.inOut'
	}, 'handIn+=0.1')

	.add('handAcross')
	.to(['#allRobotHands', '#robotThumb'], {
		x: 120,
		y: 0,
		ease: 'back.inOut(0.53)'
	}, 'handAcross')
	.to(['#allRobotHands', '#robotThumb, #offDot'], {
		y: '-=50',	
		duration: 0.15,
		ease: 'sine.in'
	}, 'handAcross')
	.to(['#allRobotHands', '#robotThumb, #offDot'], {
		y: '+=50',		
		duration: 0.15,
		ease: 'sine'
	}, 'handAcross+=0.15')
	.to('#offDot', {
		x: 120,
		ease: 'back.inOut(0.3)'
	}, 'handAcross')
	.to('#robotThumb', {
		rotation: -10,
		transformOrigin: '20% 20%',
		duration: 0.4,
		ease: 'expo.inOut'
	}, 'handAcross+=0.3')
	.to('#robotIndexFinger', {
		rotation: 5,
		transformOrigin: '100% 0%',
		duration: 0.4,
		ease: 'expo.inOut'
	}, 'handAcross+=0.3')
	.to(['#allRobotHands', '#robotThumb'], {
		duration: 0.4,
		y: '-=20',
		ease: 'sine.inOut'
	}, 'handAcross+=0.3')
	.add('hornHands', '+=0.35')
	.to(['#allRobotHands', '#robotThumb'], {
		duration: 0.166,
		y: '+=20'
	},'hornHands')
	.to(['#robotHand', '#robotHandHorns','#robotThumb'], {
		opacity: gsap.utils.wrap([0, 1, 0]),
		duration: 0.06,
	}, 'hornHands')
	.to(['#allRobotHands'], {
		rotation: '+=12',
		//scale:1.1,
		transformOrigin: '80% 30%',
		//repeat: 9,
		//yoyo: true,
		duration: 0.08,
		ease: 'sine.inOut'
	}, 'hornHands')

	.to(['#allRobotHands'], {
		rotation: '-=12',
		scale:1.1,
		transformOrigin: '100% 30%',
		repeat: 9,
		yoyo: true,
		duration: 0.08,
		ease: 'sine.inOut'
	}, 'hornHands+=0.166')
	.to('#robotThumb', {
		rotation: 20,
		scaleY: 0.75,
		transformOrigin: '20% 20%',
		duration: 0.1,
		ease: 'expo.in'
	}, 'hornHands-=0.1')

	.add('handOut', '+=0')
	.to(['#allRobotHands', '#robotThumb'], {
		x: 160,
		y: -200,
		ease: 'sine.in'
	}, 'handOut')
	.to('#allRobotHands', {
		//rotation: -45,
		ease: 'sine'
	}, 'handOut')

	.to('#onRing', {
		stroke: '#1789f2'
	}, 'hornHands-=0.5')
	.to('#onText', {
		fill: '#1789f2'
	}, 'hornHands-=0.5')


	.to('#offRing', {
		stroke: '#ddd'
	}, 'hornHands-=0.5')
	.to('#offText', {
		fill: '#ddd'
	}, 'hornHands-=0.5')
	.set(['#onDot', '#offDot'], {
		attr: {
			r: gsap.utils.wrap([14, 0])
		},
		x: 0
	}, 'handOut')

	function click (e) {
		setToggledEnabled(false)
		tl.play(0);
	}

	setToggledEnabled(true)

</script>

<?php include("../_inc/footer.php"); ?>
<?php include("../_inc/scripts.php"); ?>

