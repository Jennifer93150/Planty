<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php get_stylesheet_directory_uri(); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
	<header>
		<nav class="header-container">
			<span class="">
				<a href="<?php echo home_url(); ?>/" class="" rel="home" aria-current="page">
					<img width="191" height="18" src="http://localhost:8888/planty/wp-content/uploads/2023/03/Logo-1-191x18.png" class="" alt="Planty">
				</a>
			</span>

			
			<?php wp_nav_menu(array(
				'menu' => 'Principal',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',

			));
			?>
		</nav>
	</header>