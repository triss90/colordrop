<?php
include("../_inc/_app.php");
$cd = new ColorDrop;
$title = "ColorDrop | Gradient Colors";
$description = "";
$keywords = "";
include("../_inc/_functions.php");
include("../_inc/header.php");
include("../_inc/loader.php");
?>

<body id="gradients">

<?php include("../_inc/navigation.php"); ?>

<main id="main" style="padding-top: 64px;">
	<div class="row">		
		
		<div id="app">
			<transition name="hide-background">
				<div id='background-display' style="height: calc(100vh - 64px);" v-if="showInfo == false" :class='{"show-social-networks": (showShare == true)}'>
				<no-ie></no-ie>
				<div class='show-gradient' @wheel='toggleControls("wheel", $event)' @click='toggleControls("click", $event)' :style='style'></div>

				<div id='presets-fullview-container' :class='{show: showPresets}'>
					<div class='presets-wrapper'>
					<div v-for='(preset, index) in presets' :style="preset.style" @click='applyGradient(index)'></div>
					</div>
				</div>


				<div id='controls-container' :class='{show: showControls}'>
					<div class='controls-wrapper' style="border-radius: 5px; box-shadow: 0px 10px 40px -10px rgba(0, 64, 128, 0.2);">
					<color-slider :colors='getColors' @add='addColorStop($event)'></color-slider>
					<!-- <div class='title'>
				<h1 data-title='Gradient Generator'>Gradient Generator</h1> 
				</div> -->
					<div class='gradients-stack'>
						<h3>Stack</h3>
						<div class='gradients-stack-container'>
						<div v-for='(gradient, index) in gradients' :class='{highlight: (currentGradient == index), noneed: (gradients.length == 1)}'>
							<div class='gradient-box-container'>
							<div class='gradient-box' @click='setGradient(index)' :style='showGradient(index)'>
							</div>
							</div>
							<div class='delete' @click='deleteGradient(index)'>×</div>
							<div class='hide' :class='{hidden: (gradient.status == "hide"), tall: (gradients.length == 1)}' @click='toggleGradient(index)'></div>
						</div>
						</div>
						<div class='add-gradient' @click='addGradient'>+</div>
					</div>
					<options-container :options='getData'></options-container>
					<div class='color-stops-container'>
						<h3>Colors</h3>
						<div class='color-picker'>
						<chrome-picker :value="currentColor.value" @input="updatePicker"></chrome-picker>
						</div>
					</div>
					<div class='color-presets-container'>
						<h3>Presets</h3>
						<user-presets></user-presets>

						<div class='other-presets'>
						<div class='gradient-div' v-for='(presetObj, index) in presetsFilterd' :style="presetObj.preset.style" @click='applyGradient(presetObj.index)'></div>
						</div>
						<div class="more-presets" @click='showPresets = true'>More</div>

					</div>
					<div class='user-actions-container' style="justify-content: end;">
						<div class='copy-css' style="margin-top:0;" @click='copyCSS'>{{copyCSSText}}</div>
						<div class='reset' style="margin-top:0;" @click='resetGradient'>RESET</div>
					</div>
					</div>
				</div>
				</div>
			</transition>
			</div>

			<template id='user-presets'>
				<div class='user-generated' v-click-outside="deselectPreset">
					<div class='user-presets'>
						<span v-for='(preset, index) in userPresets' :class='{selected: selectedPreset == index}' @click='selectedPreset = index' :style='preset.style'></span>
					</div>
					<div class='presets-actions' :class='enableClass'>
						<div class='apply-preset' @click='applyPreset'><i class="icon ion-md-checkmark-circle-outline"></i></div>
						<div class='save-preset' @click='savePreset'><i class="icon ion-md-save"></i></div>
					</div>
				</div>
			</template>

			<template id='options-container'>
				<div class='colors-options-container'>
					<h3>Options</h3>
					<div class='colors-options-top'>

						<toggle-control :options='options.type' :icons='typeIcons'></toggle-control>

						<toggle-control :options='options.repeating' :boolean-icon='repeatIcon' :type="'boolean'" :tip="'Repeat'"></toggle-control>

						<toggle-control :options='options.shape' v-if="(options.type.selected == 'radial')" :icons="shapeIcons"></toggle-control>
					</div>
					<div class='colors-options-bottom'>
						<div class='linear-direction' v-if="(options.type.selected == 'linear')">
							<circular-control :direction='options.direction'></circular-control>
						</div>

						<div class='radial-size' v-if="(options.type.selected == 'radial')">
							<range :rangedata='options.size.ellipse.width' v-if="(options.shape.selected == 'ellipse')"></range>
							<range :rangedata='options.size.ellipse.height' v-if="(options.shape.selected == 'ellipse')"></range>
							<range :rangedata='options.size.circle.length' v-if="(options.shape.selected == 'circle')"></range>
						</div>
						<div class='radial-position' v-if="(options.type.selected == 'radial')">
							<range :rangedata='options.position.horizontal'></range>
							<range :rangedata='options.position.vertical'></range>
						</div>
					</div>
				</div>
			</template>

			<template id='circular-control'>
				<div class='control circle' @wheel='handleCircleValue'>
					<circle-slider v-model="direction.amount" :min="0" :max="360" circle-color="#2980b9" progress-color="#2980b9" :side=120 knob-color="#2c3e50" :circle-width="4" :progress-width="4" :knob-radius=7></circle-slider>
					<span class='icon spread'></span>
					<span class='amount'>
						<span>
							<input v-model='direction.amount' min="0" max="360" size="3" @keydown.up="increaseValue" @keydown.down="decreaseValue" @input="parseDigits" />
						</span>
						<span>deg</span>
					</span>
				</div>
			</template>

			<template id='range'>
				<div class='control range'>
					<span class='title'>{{rangedata.name}}</span>
					<span class='range'>
						<input type="range" :min="rangedata.min" :max="rangedata.max" :step='rangedata.step' v-model='rangedata.amount' @input="$emit('update')" />
					</span>
					<span class='amount'>{{rangedata.amount}}{{rangedata.unit}}</span>
				</div>
			</template>


			<template id='colors'>
				<div class='control color'>
					<span class='color-box'>
						<span :style='{"background-color": color.value }'></span>
					</span>
					<span class='color-stop'>
						<input v-model='color.stop'>
					</span>
					<span class='color-delete' @click='length > 2 ? $emit("delete") : null' :class='{disabled: length <= 2}'>×</span>
				</div>
			</template>


			<template id='toggle-control'>
				<div class='toggle control'>
					<div v-for='(selection, index) in options.selections' @click='toggleSelection(index)' v-if='options.selected == selection' :class='{on: (selection == true), off: (selection == false)}' :data-tip="(type == 'boolean') ? tip : selection">
						<span class='icon' v-if='showIcon == true' :style="{'background-image': (type == 'boolean') ? 'url('+ booleanIcon +')' : 'url('+ icons[index] +')'}"></span>
						<span class='text' v-if='showText == true'></span>
					</div>
				</div>
			</template>

			<template id='color-slider'>
				<div class='colors-slider'>
					<div class='gradient-bar' :style='displayBarGradient' @click='$emit("add", $event)'></div>
					<color-stop v-for='(color, index) in colors' :color='color' :key='index' :index='index'></color-stop>
				</div>
			</template>


			<template id='color-stop'>
				<div class='color-stop' :style='{left: color.stop + "%" }' :class='{hide: (color.status == "out"), selected: (this.$root.currentColorIndex == index)}'>
					<span class='color-view' :style='opaqueColor' @mousedown="dragStart(index)"></span>
					<span class='stop-input'>
						<input v-model='color.stop' size='3' min="0" max="100" @keydown.up="increaseValue" @keydown.down="decreaseValue" @keyup="parseDigits" @focus='$root.currentColorIndex = index'>
					</span>

				</div>
			</template>
			<template id='no-ie'>
				<div id='dont-use-ie' v-if='showIENotification'>
					<span class='text'>This gradient generator works on IE/Edge but for better performance please consider using <a href="https://www.google.com/chrome/" target="_blank">Chrome</a> or <a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank">Firefox</a>.</span>
					<span class='close' @click="clearNotification">×</span>
				</div>
			</template>
			<


		
	</div>
</main>

<?php // include("../_inc/footer.php"); ?>
<?php // include("../_inc/scripts.php"); ?>
<!-- <script src="../assets/js/gradient.min.js"></script> -->

<script src="https://unpkg.com/vue@2.5.21"></script>
<script src="https://unpkg.com/vue-color@2.7.0"></script>
<script src="https://unpkg.com/vue-circle-slider@1.0.2"></script>
<script src="gradients/gradient.js"></script>

<script src="//m.servedby-buysellads.com/monetization.custom.js"></script>
<script src="../assets/js/bsa.min.js"></script>
