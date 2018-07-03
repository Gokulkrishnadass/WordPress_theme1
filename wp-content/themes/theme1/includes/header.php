<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <script src="https://use.fontawesome.com/cec688240a.js"></script>
</head>

<body <?php body_class(); ?>>
<?php global  $theme_option; ?>
<?php if($theme_option ['top_header'] == 1 ) { ?>
<div class="top-header" style="padding-top:<?php echo $theme_option['top_header_padding_top']; ?>; padding-bottom: <?php echo $theme_option['top_header_padding_bottom'] ?>">
  <div class="container">
    <div class="row">
    <div class="col-md-6 col-xs-12 col-sm-12">
          <ul class="list-group-contact">
          <li class="list-item-contact"><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>info@example.com</li>
          <li class="list-item-contact"><span><i class="fa fa-phone" aria-hidden="true"></i></span>+91 99 9999 9999 </li>
          <li class="list-item-contact"><span><i class="fa fa-globe" aria-hidden="true"></i></span>www.example.com</li>
          </ul>
      </div> 
      <div class="col-md-6 col-xs-12 col-sm-12">
          <ul class="list-group-social">
          <li class="list-item-social"><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>info@example.com</li>
          <li class="list-item-social"><span><i class="fa fa-phone" aria-hidden="true"></i></span>+91 99 9999 9999 </li>
          <li class="list-item-social"><span><i class="fa fa-globe" aria-hidden="true"></i>www.example.com</span></li>
          </ul>
      </div>
    </div>
  </div>
</div>
<?php } ?>  

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
                  'theme_location'    => 'primary-menu',
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
<div class="top-logo-info">
    <div class="container">
      <div class="row">
            <div class="col-md-4 col-xs-12">
              <a href="<?php echo home_url('/'); ?>">
                  <?php if($theme_option['logo_upload']['url']){ ?>
                    <img src="<?php echo $theme_option['logo_upload']['url']; ?>" class="img-responsive" alt="<?php bloginfo('name'); ?>"/>
                  <?php } else { ?>
                    <?php bloginfo('name'); ?>
                  <?php } ?>
                  </a>
            </div>
            <div class="col-md-8 col-xs-12">
              <div class="row">
              <div class="col-sm-6 col-xs-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <div class="col-sm-6 col-xs-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              </div>
          </div>
      </div>
    </div>
</div>

  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
    
      </div>
      <div class="collapse navbar-collapse" id="navbar">
      <?php
              wp_nav_menu( array(
                  'theme_location'    => 'primary-menu',
                  'depth'             => 2,
                  'menu_class'        => 'nav navbar-nav navbar-left',
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
          <!-- <?php/*  */ -->
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


<?php //$theme_option['menu_options'] == '1';  ?> 

<?php //switch ($theme_option['menu_options']) {
  // case '1':
  //     echo "";
  //     break;
  // case '2':
  //     echo "Your favorite color is blue!";
  //     break;
  // case "3":
  //     echo "Your favorite color is green!";
  //     break;
  // // default:
  // //     echo "Your favorite color is neither red, blue, nor green!";
//}
?>





  
