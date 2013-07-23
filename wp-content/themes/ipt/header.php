<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
  <head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name'); ?></title>
    
    <link rel="stylesheet" href="/wp-content/themes/ipt/css/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/wp-content/themes/ipt/css/text.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/wp-content/themes/ipt/css/960_12_col.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="container_12" id="header_container">
        <nav class="social">
            <script src="http://platform.linkedin.com/in.js" type="text/javascript">
            lang: en_US
           </script>
           <script type="IN/FollowCompany" data-id="3117218" data-counter="none"></script>
           
        </nav>
        <nav class="site-search">
            <form method="GET" action="/">
                <fieldset>
                    <input type="text" value="" name="s" id="query" placeholder="Site Search">
                    <input type="submit" value="Search">
                </fieldset>
            </form>
        </nav>
      <hgroup class="grid_12">
        <h1><a href="/"><img src="/wp-content/themes/ipt/img/header-logo.jpg" alt="International Produce Training" /></a></h1>
      </hgroup>
      <nav class="nav">
        <?php
          $currenturl = explode('/', $_SERVER['REQUEST_URI']);
        ?>
        <ul>
          <li <?php if($currenturl[1] == ""){ echo "class='active'"; } ?>><a href="/">Home</a></li>
          <li <?php if($currenturl[1] == "produce-inspection-products"){ echo "class='active'"; } ?>><a href="/produce-inspection-products">Products</a></li>
          <li <?php if($currenturl[1] == "produce-inspection-services"){ echo "class='active'"; } ?>><a href="/produce-inspection-services">Services</a></li>
          <li <?php if($currenturl[1] == "produce-inspection-resources"){ echo "class='active'"; } ?>><a href="/produce-inspection-resources">Resources</a></li>
          <li <?php if($currenturl[1] == "contact-us"){ echo "class='active'"; } ?>><a href="/contact-us">Contact</a></li>
        </ul>
      </nav>
    </header>