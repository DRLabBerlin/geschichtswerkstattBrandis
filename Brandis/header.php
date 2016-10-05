<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name') ?></title>              
    <link rel="profile" href="http://gmpg.org/xfn/11" />        
   
    <?php 
        wp_head(); 
       // show_admin_bar( false );
    ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/materialdesignicons.min.css">
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/leaflet.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/MarkerCluster.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/timeline.css" />
    
    
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/assets/js/jquery-1.11.2.min.js"></script>
   
   <!--JQRangeslider -->
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/jquery-ui.min.css" />
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/classic.css" />
   
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/style.css" />
    
    
    
</head>
<body >
<header role="banner">

	<div class="container">
	<!--
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		-->
		<div class="row">			
			<div id="logo" class="col-md-6 col-sm-6 col-xs-8">				
				
			        <a  href="<?php echo esc_url(home_url()); ?>">
			            <?php /* <img src="<?php bloginfo('stylesheet_directory') ?>/img/logo-brandis.png" alt="<?php bloginfo('name'); ?>">    */ ?>
			            <h1><?php bloginfo('name'); ?></h1>
			        </a>
			    
			</div>		
			<div class="col-md-4 col-sm-4 col-xs-4 pull-right" >				

				    <ul id="switch-view">
				        <li><a href="<?php echo home_url('/'); ?>about" title="über die Geschichtswerkstatt" ><i class="mdi mdi-information-variant icon"></i></a></li>
				        <li><a href="<?php echo home_url('/'); ?>" title="zur Map-Ansicht" ><i class="mdi mdi-google-maps icon"></i></a></li>
				        <li><a href="<?php echo home_url('/'); ?>list" title="zur Listen-Ansicht"><i class="mdi mdi-view-list icon"></i></a></li>
				    </ul>
				
			</div>
			<!--
			<nav class="col-md-4 pull-right" role="navigation">				
				<div class="collapse navbar-collapse">
				    <ul id="main-navigation">
				        <li>Über uns</li>
				        <li>Impressum</li>
				    </ul>
				</div>
			</nav>
			-->
		</div>
	</div>

</header>