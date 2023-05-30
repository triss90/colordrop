<?php
    if (!isset($title) || $title == "") {
        $title = "ColorDrop";
    }
    if (!isset($description) || $description == "") {
        $description = "Explore thousands of color palettes or create your own. Ideal for designers and artists seeking inspiration. Start your color journey now!";
    }
    if (!isset($keywords) || $keywords == "") {
        $keywords = "Colors, Palettes, Webdesign Colors, Project Colors, Web Colors, Website Palette, Color Palette Generator, Online Color Tool, Custom Palettes, Color Inspiration, Design Tool, Color Selection, Color Scheme Creator, Web Design Colors, Graphic Design Colors, Color Matching Tool, Digital Art Colors, UI Design Colors, RGB Color Tool, HEX Color Tool, Color Gradient Generator, Color Combinations, Color Picker Online, Color Wheel Tool, Color Harmony Tool.";
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/gridder.min.css">
    <link rel="stylesheet" href="/assets/css/app.css">

    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="Tristan White">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/site.webmanifest">
    <link rel="mask-icon" href="/assets/img/safari-pinned-tab.svg" color="#f782a9">
    <link rel="shortcut icon" href="/assets/img/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="/assets/img/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
