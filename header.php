<!DOCTYPE html>
<!-- Gridly WordPress Theme by Eleven Themes (http://www.eleventhemes.com) - Proudly powered by WordPress (http://wordpress.org) -->

	<!-- meta -->
    <html <?php language_attributes();?>> 
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('sitename'); ?> <?php wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <!-- styles -->
<!--	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />

    <?php  $options = get_option('plugin_options');
			$gridly_color_scheme = $options['gridly_color_scheme'];
			$gridly_logo = $options['gridly_logo'];
			$gridly_responsive = $options['gridly_responsive'];?> 
   
   <?php if ($gridly_color_scheme == 'dark') { ?>
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dark.css" /> 
	<?php  } elseif ($gridly_color_scheme == 'custom') {  ?>
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css"/> 
    <?php  } else {?>
         <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/light.css"/> 
    <?php  } ?>
    
    <?php if ($gridly_responsive != 'no') { ?>
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
<!--      	<link rel="stylesheet" type="text/css" media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="--><?php //echo get_template_directory_uri(); ?><!--/css/mobile.css" />-->
    <?php  } ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>

    <!-- start Mixpanel --><script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
    typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,
    e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
    mixpanel.init("5f92307092a1710b6f501b21ed870a29");</script><!-- end Mixpanel -->
 	<!-- wp head -->
	<?php wp_head(); ?>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	
</head>

<body <?php body_class('body-width'); ?>>
	
<div id="wrap">
	<div id="header">
        
    	<div id="logo">
        	<a href="<?php echo home_url( '/' ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            
                 <?php if ($gridly_logo != '') {?>
                 	 <img src="<?php echo $gridly_logo; ?>" alt="<?php bloginfo('sitename'); ?>">
                 <?php } else { ?>
                       <img src="<?php echo get_template_directory_uri(); ?>/images/light/logo.png" alt="<?php bloginfo('sitename'); ?>">
                 <?php } ?>
            </a>
            
       </div>


       <?php if ( has_nav_menu( 'main_nav' ) ) { ?>
<!--  		 <div id="nav">--><?php //wp_nav_menu( array( 'theme_location' => 'main_nav' ) ); ?><!--</div>-->
       <?php } else { ?>
<!-- 	 	 <div id="nav"><ul>--><?php //wp_list_pages("depth=1&title_li=");  ?><!--</ul></div>-->
	   <?php } ?>

   </div>
<!-- // header -->           