<?php if($theme_option['menu_options'] == '1') { ?>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
        <?php if($theme_option['logo_upload']['url']){ ?>
          <img src="<?php echo $theme_option['logo_upload']['url']; ?>" class="img-responsive" alt="<?php bloginfo('name'); ?>"/>
        <?php } else { ?>
          <?php bloginfo('name'); ?>
        <?php } ?>
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar">
        <?php
              wp_nav_menu( array(
                  'theme_location'    => 'navbar-left',
                  'depth'             => 2,
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?>
          <?php get_template_part('includes/navbar-search'); ?>
          <?php
              wp_nav_menu( array(
                  'theme_location'    => 'navbar-right',
                  'depth'             => 2,
                  'menu_class'        => 'nav navbar-nav navbar-right',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

<?php } elseif ($theme_option['menu_options'] == '2') { ?>
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
        <?php if($theme_option['logo_upload']['url']){ ?>
          <img src="<?php echo $theme_option['logo_upload']['url']; ?>" class="img-responsive" alt="<?php bloginfo('name'); ?>"/>
        <?php } else { ?>
          <?php bloginfo('name'); ?>
        <?php } ?>
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar">
        <?php
              wp_nav_menu( array(
                  'theme_location'    => 'navbar-left',
                  'depth'             => 2,
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?>
          <?php get_template_part('includes/navbar-search'); ?>
          <?php
              wp_nav_menu( array(
                  'theme_location'    => 'navbar-right',
                  'depth'             => 2,
                  'menu_class'        => 'nav navbar-nav navbar-right',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

<?php } elseif ($theme_option['menu_options'] == '3') {?>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
        <?php if($theme_option['logo_upload']['url']){ ?>
          <img src="<?php echo $theme_option['logo_upload']['url']; ?>" class="img-responsive" alt="<?php bloginfo('name'); ?>"/>
        <?php } else { ?>
          <?php bloginfo('name'); ?>
        <?php } ?>
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar">
        <?php
              wp_nav_menu( array(
                  'theme_location'    => 'navbar-left',
                  'depth'             => 2,
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?>
          <?php get_template_part('includes/navbar-search'); ?>
          <?php
              wp_nav_menu( array(
                  'theme_location'    => 'navbar-right',
                  'depth'             => 2,
                  'menu_class'        => 'nav navbar-nav navbar-right',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

<?php } ?>
