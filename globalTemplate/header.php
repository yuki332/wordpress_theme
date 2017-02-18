<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Global Theme <?php wp_title (); ?> </title>

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});
		});
	</script>
	<!-- general css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<!-- for sns icons font awesome. -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php remove_filter('the_content', 'wpautop'); ?>
</head>
<body>
	<header>
		<div class="sns show--lg">
			<i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
			<i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
			<i class="fa fa-tumblr-square fa-2x" aria-hidden="true"></i>
		</div>
		<nav>
			<button class="nav-button show--sm"></button>
			<div class="logo hidden--sm">
				<img class="logo__img" src="/img/logo.png" alt="">
				<p>it Must be Global.</p>
			</div>
			
			<?php wp_nav_menu(array('menu_class' => 'primary-nav nav')); ?>

			<div class="nav--25">
				<input class="nav__search hidden--sm" type="text" placeholder="Search">
			</div>
		</nav>
	</header>
	<div class="container">
		<input class="nav__item nav__search show--sm" type="text" placeholder="Search">