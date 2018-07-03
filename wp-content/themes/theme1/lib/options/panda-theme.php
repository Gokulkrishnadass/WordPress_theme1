 <?php
//$root =dirname(dirname(dirname(dirname(dirname(__FILE__)))));
//if ( file_exists( $root.'/wp-load.php' ) ) {
  //  require_once( $root.'/wp-load.php' );
//} elseif ( file_exists( $root.'/wp-config.php' ) ) {
//    require_once( $root.'/wp-config.php' );
//}
//header("Content-type: text/css; charset=utf-8");
?>   
<?php global $theme_option;  ?>

.top-header{
        background-color: <?php echo $theme_option['top_header_background_color']; ?>;
        padding-top: <?php echo $theme_option['top_header_padding_top']; ?>;
        padding-bottom: <?php echo $theme_option['top_header_padding_bottom']; ?>;
    }
    ul.soical_top li {
    background-color: <?php echo $theme_option['soical_icon_background_color']; ?>;
    
    
    border: 1px solid <?php echo $theme_option ['soical_icon_border_color']; ?>;
    
    border-radius: 50%;
}
    ul.soical_top li a{
        color: <?php echo $theme_option['soical_icon_color']; ?>;
    }
    ul.info_contact li {
    float: right;
    margin-right: 15px;
}

ul.info_contact {
    list-style-type: none;
    padding: 0;
    margin: 0;
}
   
