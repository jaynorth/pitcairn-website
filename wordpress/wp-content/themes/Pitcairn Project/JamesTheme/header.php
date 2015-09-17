<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lustria' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style.css" />

		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<script type="text/javascript">
$(function() {
	$('.map').maphilight();
});

$.fn.maphilight.defaults = {
	fill: true,
	fillColor: 'FF9E0D',
	fillOpacity: 0.2,
	stroke: true,
	strokeColor: 'FF9E0D',
	strokeOpacity: 1,
	strokeWidth: 1,
	fade: true,
	alwaysOn: false,
	neverOn: false,
	groupBy: false,
	wrapClass: true,
	shadow: false,
	shadowX: 0,
	shadowY: 0,
	shadowRadius: 6,
	shadowColor: '000000',
	shadowOpacity: 0.8,
	shadowPosition: 'outside',
	shadowFrom: false
}

$(document).ready(function(){
	$('#mapChart area').mouseover(function(){
		var file=$(this).attr("data-load");
		//console.log(file);
		$('#mapDescription').load("mapDescription/"+file);
	});
});

</script>

	</head>
<body <?php body_class(); ?>>


<!-- site header -->
	<header>
		<h1><a href="<php echo home_url(); ?>"><?php  bloginfo('name'); ?></a></h1> 
		<p>expeditions</p>

	<div class="centerImage"></div>

		<nav>
			<?php 
			$args = array('theme_location' => 'primary');
			?>
			<?php wp_nav_menu($args); ?>

		</nav>
		<div class="clear"></div>
	</header>