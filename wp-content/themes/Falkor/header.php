<!DOCTYPE html>
<html lang="en">
    
    <head>
        <?php wp_head(); ?>
		<link href="https://micro.blog/kristianramirez" rel="me" />

		<!-- Open Graph Tags -->
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@dragonamidotcom" />
		<meta name="twitter:title" content="<?php wp_title( '', true, 'right' ); ?>" />
		<meta name="twitter:description" content="by Kristian Ramirez" />
		<meta name="twitter:image" content="<?php echo get_bloginfo( 'template_directory' ); ?>/template-parts/images/thumbnail-img.png" />
		<!-- End Open Graph Tags -->
    </head>
    
    <body>
    	<div id="main-box">
    		<div id="header">

                <a href="/">
                    <img id="header-img" src="<?php echo get_bloginfo( 'template_directory' ); ?>/template-parts/images/header-img.png" alt="dragonami">
                </a>

                <div id="site-author">by Kristian Ramirez</div>

				<div id="navbar" class="navigation">
					<nav id="nav-menu" class="navigation">
                		<a href="/archive">Archive</a>
                		<a href="/about">About</a>
                		<a href="/feeds">Feeds</a>
                		<a href="https://twitter.com/kristianramirez">Twitter</a>
                	</nav>
                </div><!-- /#nav-bar -->

            </div><!-- /#header -->

