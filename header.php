<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iknebthem
 */

?>


<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
   
    <meta name="author" content="Super User" />
    <meta name="generator" content="Joomla! - Open Source Content Management" />
    <title>Mahkam Stone - Home</title>
    <link href="index.php/component/search/index.html%3Fid=7&amp;Itemid=101&amp;format=opensearch" rel="search" title="Search Mahkam Stone" type="application/opensearchdescription+xml" />
    <link href="templates/yoo_lykka/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  
  <link rel="apple-touch-icon-precomposed" href="templates/yoo_lykka/apple_touch_icon.png">
    <?php wp_head(); ?>
</head>

<body class="tm-isblog">
    
    <nav class="tm-navbar uk-navbar uk-position-z-index">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-flex-space-between">

            <a class="tm-logo uk-hidden-small" href="index.html">
               <p><?php echo get_the_post_thumbnail(25); ?></p></a>
                      
                   <?php wp_nav_menu('container_class=tm-nav uk-hidden-small&menu_class=uk-navbar-nav uk-hidden-small'); ?>
                <button class="toggle_mnu uk-visible-small">
                  <span class="sandwich">
                    <span class="sw-topper"></span>
                    <span class="sw-bottom"></span>
                    <span class="sw-footer"></span>
                  </span>
                </button>
                <nav class="top_mnu">
                  <?php wp_nav_menu(); ?>
                </nav>
               <!--  <a href="index.html#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a> -->
                
                <div class="uk-navbar-flip tm-nav-search">
                    <div class="uk-navbar-content uk-hidden-small">
                        <form id="search-40-579b04a9c041d" class="uk-search" action="index.php.1.html" method="post" data-uk-search="{'source': '/index.php/component/search/?tmpl=raw&amp;type=json&amp;ordering=&amp;searchphrase=all', 'param': 'searchword', 'msgResultsHeader': 'Search Results', 'msgMoreResults': 'More Results', 'msgNoResults': 'No results found', flipDropdown: 1}">
                           <input class="uk-search-field" type="text" name="searchword" placeholder="search...">
                           <input type="hidden" name="task"   value="search">
                           <input type="hidden" name="option" value="com_search">
                           <input type="hidden" name="Itemid" value="107">
                       </form>
                   </div>
               </div>
               
               
           </nav>
           