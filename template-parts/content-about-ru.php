<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package iknebthem
 */

?>

<div class="tm-block tm-block-top-a">
    <div class="uk-container uk-container-center">
        <section class="tm-top-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
            <div class="uk-width-1-1"><div class="uk-panel"> 
                <div class="tm-fullscreen-slideshow" data-uk-slideshow="{autoplay: true ,kenburns: '25s', kenburnsanimations: 'uk-animation-bottom-center'}">
                    <div class="uk-slidenav-position">
                        <ul class="uk-slideshow uk-slideshow-fullscreen uk-overlay-active">                                   
                           <?php
                           $a = array(
                            'cat' => 3,
                            'order' => ASC
                            );
                           $query = new WP_Query($a);
                           if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post(); ?>
                                <li style="min-height: 300px;">   
                                  <?php the_post_thumbnail(array(1600, 725)); ?>                                                                 
                                  <div class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle uk-text-center uk-overlay-fade">
                                    <div>                                                
                                        <h3 class="uk-heading-large"><?php the_title();?><span class="uk-text-bold"><?php the_content(); ?></span></h3>                                                
                                    </div>
                                </div>                                                                   
                            </li>
                            <?php
                        }
                    }
                    wp_reset_postdata(); ?>
                </ul>
                <a href="index.html#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous uk-hidden-touch" data-uk-slideshow-item="previous"></a>
                <a href="index.html#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next uk-hidden-touch" data-uk-slideshow-item="next"></a>
            </div>                                
        </div>
    </div>
</div>
</section>
</div>
</div>


<div class="tm-block tm-block-main">
    <div class="uk-container uk-container-center">
        <div class="tm-middle uk-grid" data-uk-grid-match data-uk-grid-margin>
            <div class="tm-main uk-width-medium-1-1">
                <main class="tm-content">
                    <div id="system-message-container">
                    </div>
                    <article class="uk-article" >
                      <div>
                        <div class="tm-panel-header uk-margin-large-bottom uk-text-center">
                            <h2 class="uk-panel-title"><?php echo get_cat_name(58) ?></h2>
                            <p class="tm-panel-header-subtitle uk-margin-small-top"><h1><?php echo category_description(58)?></h1></p>
                        </div>
                        <p>
                            <div class="uk-grid uk-grid-width-1-1 uk-grid-width-small-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-1 uk-grid-width-xlarge-1-2 uk-grid-collapse " >
                                <?php
                                $a = array(
                                    'cat' => 12,
                                    'order' => ASC
                                    );
                                $query = new WP_Query($a);
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post(); ?>
                                        <div class="uk-overlay-hover ">
                                            <div class="uk-panel" data-uk-grid-match="{row: false, ignorestacked: true, target: '> div'}">
                                             <div class="uk-panel uk-panel-box uk-flex uk-flex-column uk-flex-center uk-text-center">
                                                <div>
                                                    <p class="uk-text-justify"><?php the_content(); ?></p> 
                                                </div>
                                            </div>
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

<div class="tm-block tm-block-bottom-a">
    <div class="uk-container uk-container-center">
        <section class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
            <div class="uk-width-1-1"><div class="uk-panel">
             <p style="text-align: center;">
                <div class="uk-slidenav-position tm-overlay-lykka" data-uk-slider="{}">

                    <div class="uk-slider-container">
                        <ul class="uk-slider uk-grid uk-grid-match uk-flex-center uk-grid-width-1-2 uk-grid-width-small-1-3 uk-grid-width-medium-1-4 uk-grid-width-large-1-6 uk-grid-width-xlarge-1-6 uk-grid-collapse">
                            <?php
                            $a = array(
                                'cat' => 13,
                                'order' => ASC
                                );
                            $query = new WP_Query($a);
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post(); ?>
                                    <li>
                                        <div class="uk-panel uk-overlay uk-overlay-hover uk-cover-background" style="height: 450px;background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                                            <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade"></div>
                                            <div class="uk-overlay-panel uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                                                <div>
                                                    <h3 class="uk-h3 uk-margin-top-remove uk-margin-top-remove">
                                                     <?php the_title();?>                           
                                                 </h3>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <?php
                             }
                         }
                         wp_reset_postdata(); ?>
                     </ul>
                 </div>
                 <a href="about.html#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous uk-hidden-touch" data-uk-slider-item="previous"></a>
                 <a href="about.html#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next uk-hidden-touch" data-uk-slider-item="next"></a>
             </div></p></div></div>
         </section>
     </div>
 </div>


 <div class="tm-block tm-block-bottom-c">
    <div class="uk-container uk-container-center">
        <section class="tm-bottom-c uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
            <div class="uk-width-1-1">
                <div class="uk-panel">

                  <br>
                  <h3 class="uk-panel-title" style="text-align: center;">Контакты</h3>
                  <p class="tm-panel-header-subtitle uk-text-center" style="text-align: center;"><?php echo get_cat_name(72) ?></p>
                  <?php
                  $a = array(
                    'cat' => 7,
                    'order' => ASC
                    );
                  $query = new WP_Query($a);
                  if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post(); ?>
                        <p style="text-align: center;">
                            <div class="uk-grid-width-1-1 uk-grid-width-small-1-2 uk-grid-width-medium-1-4 uk-grid uk-grid-match uk-text-left uk-text-center-small" data-uk-grid-match="{target:'> div > .uk-panel', row:true}" data-uk-grid-margin >
                                <div>
                                    <div class="uk-panel">
                                      <h3 class="uk-panel-title">
                                        <?php the_title();?>                                                          
                                    </h3>
                                    <div class="uk-margin"><?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-panel">
                                    <h3 class="uk-panel-title">
                                        Мы работаем                                                              
                                    </h3>
                                    <div class="uk-margin">
                                        <span class="uk-text-primary">Saturday - Wednesday :</span> 
                                        <br class="uk-visible-medium"><?php echo get_post_meta($post->ID,'saturday-wednesday',true);?><br>
                                        <span class="uk-text-primary">Thursday :</span> 
                                        <br class="uk-visible-medium"><?php echo get_post_meta($post->ID,'thursday',true);?>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-panel">
                                    <h3 class="uk-panel-title">
                                       Контакты                                                                    
                                    </h3>
                                    <div class="uk-margin">
                                        <span class="uk-text-primary">Phone :</span> 
                                        <br class="uk-visible-medium"><?php echo get_post_meta($post->ID,'phone',true);?><br>
                                        <span class="uk-text-primary">Email :</span>
                                        <br class="uk-visible-medium"><?php echo get_post_meta($post->ID,'email',true);?>
                                        <span class="uk-link-muted"></span><br>
                                        <span class="uk-link-muted">
                                            <span id="cloak49934"></span>
                                        </span>
                                        <br class="uk-visible-medium">
                                        <span class="uk-link-muted">
                                            <span id="cloak20540"></span>
                                        </span>
                                        <br class="uk-visible-medium"><span class="uk-link-muted">
                                        <span id="cloak53846">
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-panel">
                                <h3 class="uk-panel-title">
                                   Соц                         
                                </h3>        
                                <div class="uk-margin">
                                    <div data-uk-margin>
                                        <a href="<?php echo get_post_meta($post->ID,'facebook',true);?>" class="uk-icon-button uk-icon-facebook"></a>
                                        <a href="<?php echo get_post_meta($post->ID,'twitter',true);?>" class="uk-icon-button uk-icon-twitter"></a>
                                        <a href="<?php echo get_post_meta($post->ID,'instagram',true);?>" class="uk-icon-button uk-icon-instagram"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </p>
                <hr/>

                <?php
            }                               
        }
        wp_reset_postdata(); ?>                               
    </div>
</div>
</section>
</div>
</div>
<div class="tm-block tm-block-bottom-d">
    <div class="uk-container uk-container-center">
        <section class="tm-bottom-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
            <div class="uk-width-1-1"><div class="uk-panel">
                <script type="widgetkit/map" data-id="wk-map579b04cc8bb2f" data-class="tm-frontpage-map uk-img-preserve" data-style="width:auto;height:350px;">
                    {"width":"auto","height":"350","maptypeid":"roadmap","maptypecontrol":true,"mapctrl":true,"zoom":"13","marker":2,"markercluster":false,"popup_max_width":300,"zoomwheel":true,"draggable":true,"directions":true,"disabledefaultui":true,"styler_invert_lightness":false,"styler_hue":"","styler_saturation":"10","styler_lightness":"-10","styler_gamma":"0","media":true,"image_width":"auto","image_height":"auto","media_align":"top","media_width":"1-2","media_breakpoint":"medium","media_border":"none","media_overlay":"icon","overlay_animation":"fade","media_animation":"scale","title":true,"content":true,"social_buttons":true,"title_size":"h3","text_align":"left","link":true,"link_style":"button","link_text":"Read more","link_target":false,"class":"tm-frontpage-map","markers":[{"lat":32.6784799832,"lng":52.0287232744,"title":"Mahkam Stone Co.","content":"\n<div class=\"uk-text-left\">\n\n    \n    \n        <h3 class=\"uk-h3 uk-margin-top-remove\">Mahkam Stone Co.<\/h3>\n    \n    \n        <div class=\"uk-margin\">Mahkam Stone Co.<\/div>\n    \n    \n    \n    \n<\/div>"}]}</script>
                </div></div>
            </section>
        </div>
    </div>
    

    
