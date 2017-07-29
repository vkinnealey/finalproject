<?php /*Template Name: CustomForm 
	Description: Penscratch Theme
	Author: Victoria Kinnealey
	Template: penscratch
	*/?>

<!DOCTYPE html>
<html>

<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Menu', 'penscratch' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="custom-header" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
			</a>
		<?php endif;  // End header image check. ?>

<!-- form  text COPY OUR GENERAL PAGE TEMPLATE REPLACE PHP CODE-->

<h2>If you would like to request a recipe, please enter your information below and click the "Email Me!" button! </h2>

<form name="Request a Recipe" method="POST" 
onsubmit="return" action="mailto:victoriakinnealey@gmail.com" enctype="multipart/form-data">
Your Name <input value="Name" type="text" name="Name"/><br/><br/>
Recipe Request <input value="Recipe" type="text" name="RecipeRequest"/><br/><br/>
Allergies <input value="Allergies" type="text" name="Allergies"/><br/><br/>
Email <input value="Email" type="text" name="Email"/><br/><br/>
<input type="Submit" value="Email Me!"/>
</form>
<form action="reciperequest.php" method="get>"

<?php

//form components
$name= $_POST["name"];
$recipe_request=$_POST["recipe_request"];
$allergies=$_POST["allergies"];
$email=$_POST["email"];

//  To redirect form on a particular page
//if(isset($_POST["submit"])){
//window.location= "http://www.victoriakinnealey.com/");
//}
?>

<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'penscratch' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'penscratch' ), 'WordPress' ); ?></a>
			<span class="sep"> ~ </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'penscratch' ), 'Penscratch', '<a href="http://wordpress.com/themes/penscratch/" rel="designer">WordPress.com</a>' ); ?>
		</div><!-- .site-info -->
		<?php if ( has_nav_menu ( 'social' ) ) : ?>
			<?php wp_nav_menu( array( 'theme_location' => 'social', 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'container_class' => 'social-links', ) ); ?>
		<?php endif; ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

