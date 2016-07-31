<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package iknebthem
 */

?>

<div class="tm-block tm-block-main">
    <div class="uk-container uk-container-center">
        <div class="tm-middle uk-grid" data-uk-grid-match data-uk-grid-margin>
            <div class="tm-main uk-width-medium-1-1">
                <main class="tm-content">
                    <div id="system-message-container">
                    </div>
                    <article class="uk-article" >	
                        <div>		
                            <div class="uk-margin-large-bottom uk-text-center">
                                <h2 class="uk-h1 uk-margin-bottom-remove" style="text-align: center;">Наша галерея</h2>
                            </div>
                            <p style="text-align: center;">
                                <div class="uk-tab-center uk-margin">
                                    <ul id="wk-ba5" class="uk-tab" data-uk-tab>   
                                        <li data-uk-filter="<?php echo get_cat_name(68) ?>"><a href="gallery.html#"><?php echo get_cat_name(68) ?></a></li>
                                        <li data-uk-filter="<?php echo get_cat_name(70) ?>"><a href="gallery.html#"><?php echo get_cat_name(70) ?></a></li>
                                        <li data-uk-filter="<?php echo get_cat_name(82) ?>"><a href="gallery.html#"><?php echo get_cat_name(82) ?></a></li>
                                    </ul>
                                </div>
                                <div class="uk-grid-width-1-1 uk-grid-width-small-1-2 uk-grid-width-medium-1-2 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-3 " data-uk-grid="{gutter: ' 30',controls: '#wk-ba5',filter: 'Exhibition'}"  data-uk-scrollspy="{cls:'uk-animation-fade uk-invisible', target:'> div > .uk-panel', delay:300}">
                                <?php
                                        $a = array(
                                            'cat' => 9,
                                            'order' => ASC
                                        );
                                        $query = new WP_Query($a);
                                        if ( $query->have_posts() ) {
                                            while ( $query->have_posts() ) {
                                        $query->the_post(); ?>

                                    <div data-uk-filter="<?php echo get_cat_name(9) ?>">
                                        <div class="uk-panel uk-invisible">
                                            <figure class="uk-overlay uk-overlay-hover uk-border-rounded">
                                               <?php the_post_thumbnail(array(800, 526)); ?>
                                                <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade"></div>
                                                <div class="uk-overlay-panel uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                                                    <div>
                                                        <h3 class="uk-panel-title uk-margin-small"><?php the_title();?></h3>

                                                        <div class="uk-margin-small"><?php the_content(); ?></div>
                                                    </div>
                                                </div>
                                                <a class="uk-position-cover" href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox-type="image" data-uk-lightbox="{group:'.wk-1ba5'}" title="Mahkam Stone"></a>
                                            </figure>
                                        </div>  
                                    </div>
                                    <?php
                                            }
                                        }
                                        wp_reset_postdata(); ?>
                                    <?php
                                        $a = array(
                                            'cat' => 10,
                                            'order' => ASC
                                        );
                                        $query = new WP_Query($a);
                                        if ( $query->have_posts() ) {
                                            while ( $query->have_posts() ) {
                                        $query->the_post(); ?>

                                    <div data-uk-filter="<?php echo get_cat_name(10) ?>">
                                        <div class="uk-panel uk-invisible">
                                            <figure class="uk-overlay uk-overlay-hover uk-border-rounded">
                                               <?php the_post_thumbnail(array(800, 526)); ?>
                                                <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade"></div>
                                                <div class="uk-overlay-panel uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                                                    <div>
                                                        <h3 class="uk-panel-title uk-margin-small"><?php the_title();?></h3>
                                                        <div class="uk-margin-small"><?php the_content(); ?></div>
                                                    </div>
                                                </div>
                                                <a class="uk-position-cover" href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox-type="image" data-uk-lightbox="{group:'.wk-1ba5'}" ></a>
                                            </figure>
                                        </div> 
                                    </div>
                                    <?php
                                            }
                                        }
                                        wp_reset_postdata(); ?>
                                    <?php
                                        $a = array(
                                            'cat' => 11,
                                            'order' => ASC
                                        );
                                        $query = new WP_Query($a);
                                        if ( $query->have_posts() ) {
                                            while ( $query->have_posts() ) {
                                        $query->the_post(); ?>

                                    <div data-uk-filter="<?php echo get_cat_name(11) ?>">
                                        <div class="uk-panel uk-invisible">
                                            <figure class="uk-overlay uk-overlay-hover uk-border-rounded">
                                                <?php the_post_thumbnail(array(800, 526)); ?>
                                                <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade"></div>
                                                <div class="uk-overlay-panel uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                                                    <div>
                                                        <h3 class="uk-panel-title uk-margin-small"><?php the_title();?></h3>
                                                        <div class="uk-margin-small"><?php the_content(); ?></div>
                                                    </div>
                                                </div>
                                                <a class="uk-position-cover" href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox-type="image" data-uk-lightbox="{group:'.wk-1ba5'}" title="Mahkam Stone"></a>
                                            </figure>
                                        </div>    
                                    </div>
                                    <?php
                                            }
                                        }
                                        wp_reset_postdata(); ?>
                                </div>
                            </p> 	
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
</div>





