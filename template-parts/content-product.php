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
                        <p style="text-align: center;">
                            <div class="uk-grid-width-1-1 uk-grid-width-small-1-2 uk-grid-width-medium-1-2 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-3 uk-grid uk-grid-match uk-grid-collapse tm-overlay-lykka" data-uk-grid-match="{target:'> div > .uk-panel', row:true}" data-uk-grid-margin >    
                                
                                <?php
                                $a = array(
                                    'cat' => 8,
                                    'order' => ASC
                                    );
                                $query = new WP_Query($a);
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post(); ?>

                                        <div>  
                                            <div class="uk-panel">
                                                <figure class="uk-overlay uk-overlay-hover ">
                                                    <?php the_post_thumbnail(array(992, 992)); ?> 
                                                    <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade"></div>        
                                                    <div class="uk-overlay-panel uk-ignore uk-flex uk-flex-center uk-flex-middle uk-text-center">
                                                        <div>
                                                            <h3 class="uk-panel-title uk-margin-small"><?php the_title();?></h3>                
                                                            <div class="uk-margin-small"><?php the_content(); ?></div>                                
                                                        </div>
                                                    </div>
                                                    <a class="uk-position-cover" href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox-type="image" data-uk-lightbox="{group:'.wk-1ac2'}" title="Mahkam Stone"></a>                    
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






