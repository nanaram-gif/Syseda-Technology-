<!doctype html>
<html <?php language_attributes(); ?>>
<head><meta charset="<?php bloginfo('charset'); ?>"><meta name="viewport" content="width=device-width, initial-scale=1"><?php wp_head(); ?></head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header"><div class="container header-inner">
  <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
    <?php if (file_exists(get_template_directory() . '/assets/syseda-logo.png')): ?>
      <span class="logo"><img src="<?php echo esc_url(syseda_logo_url()); ?>" alt="SYSEDA Technology logo"></span>
    <?php endif; ?>
    <span>SYSEDA TECHNOLOGY<small>Engineering Smarter, Building Better</small></span>
  </a>
  <div class="header-right"><a href="tel:+919500044070">+91 9500044070</a><nav class="nav"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a><a href="<?php echo esc_url(home_url('/#services')); ?>">Services</a><a href="<?php echo esc_url(home_url('/get-a-quote/')); ?>">Get a Quote</a></nav></div>
</div></header>
