<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="c-header">
    <?php 
        wp_nav_menu([
          'theme_location' => 'primary_nav',
          'container' => 'nav',
        ]);    
    ?>
  </header>
  <main>

    <?php if (has_post_thumbnail()) :?>
    <div class="home">
        <?php the_post_thumbnail(); ?>
        <h1><?php the_title(); ?></h1>
    </div>
    <?php endif; ?>
