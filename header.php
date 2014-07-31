<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=PT+Serif|Open+Sans+Condensed:300|Open+Sans:300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body>
<div class="container">
	<?php
		echo strip_tags(wp_nav_menu( 
			array( 
				'theme_location' => 'top_menu',
				'container' => 'nav',
				'echo' => false,
				'container_class' => 'headNav pull-left hidden-xs',
				'before'          => '<div class="navItem pull-left"><p>',
				'after'           => '</p></div>',
				'items_wrap'      => '%3$s',
				'depth'           => 1
			)), '<nav><div><p><a>' );
	?>
	<nav class="headNavSm btn-group visible-xs">
		<button type="button" class="col-xs-12 btn btn-default dropdown-toggle" data-toggle="dropdown">
			<span class="glyphicon glyphicon-list"></span> Menu
			<span class="caret"></span>
		</button>
		<?php wp_nav_menu( 
			array(
				'theme_location'  => 'top_menu',
				'container'       => false, 
				'menu_class' => 'col-xs-12 dropdown-menu',
				'depth' => 1
			));
		?>
	</nav>
	
	<div class="socialButtons pull-right hidden-xs">
		<div class="socialItem pull-left">
			<a href="http://plus.google.com/117102011431957802744"><img src="<?php print IMAGES; ?>/google_plus.png" alt="Google+"></a>
		</div>
		<div class="socialItem pull-left">
			<a href="http://twitter.com/michakpl"><img src="<?php print IMAGES; ?>/twitter.png" alt="Twitter"></a>
		</div>
	</div>
</div>
<div id="header" class="text-center">
	<div class="container">
		<h1>michak</h1>
		<p class="shadowed col-sm-5 col-md-5">web developer, programista i fan Linuksa</p>
	</div>
</div>