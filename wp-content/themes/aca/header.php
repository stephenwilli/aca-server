<!DOCTYPE html class="js">
<!--[if lt IE 7]><html class="ie ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9]><html class="ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1, user-scalable=no">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <link rel="icon" type="image/png" href="<?php echo(get_template_directory_uri()) ?>/favicon.ico" />

    <script src="https://use.typekit.net/bjo7pmz.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>


    <title><?php wp_title(' | ', true, 'right'); ?></title>

    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>  id="page-top">

	<?php get_template_part('partials/global/preloader'); ?>

	<?php get_template_part('partials/header/navigation'); ?>
