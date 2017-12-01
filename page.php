<?php
/**
 * The template for displaying all pages
 *
 * @package Tyros
 */

$tyros_options     = tyros_get_options();
$is_alternate       = get_post_meta( get_the_ID(), 'tyros_layout_style', true ) && get_post_meta( get_the_ID(), 'tyros_layout_style', true ) == 'alternate' && function_exists( 'tyros_strap_pl' ) && tyros_strap_pl() ? true : false;  
$sidebar_override   = get_post_meta( get_the_ID(), 'tyros_sidebar_location', true );
if ( empty( $sidebar_override ) ) {
    $sidebar_override = isset( $tyros_options['tyros_single_layout'] ) && $tyros_options['tyros_single_layout'] == 'col2r' ? 'right' : 'none';
}

get_header(); ?>

<div id="primary" class="content-area">

    <main id="main" class="site-main">

        <div class="container">
    
            <?php while ( have_posts() ) : the_post(); ?>
    
                <?php if ( is_active_sidebar( 'sidebar-above-page' ) ) : ?>

                    <div class="row">
                        
                        <div class="col-md-12">
                        
                            <div class="above-page-area top-banner-text">
                                <?php get_sidebar( 'above-page' ) ?>
                            </div>           
                            
                        </div>            
                        
                    </div>

                    <div class="clear"></div>            

                <?php endif; ?>
            
                <div class="page-content row">
                    
                    <?php if ( ( $sidebar_override == 'left' || $sidebar_override == 'leftright' || $sidebar_override == 'default' ) && is_active_sidebar( 'sidebar-left' ) ) : ?>
                    
                        <div class="col-md-4 tyros-sidebar">
                            <?php get_sidebar( 'left' ); ?>
                        </div>
                    
                    <?php endif; ?>
                    
                    <div class="col-md-<?php echo esc_attr( tyros_main_width( $sidebar_override ) ); ?>">
                    
                        <?php get_template_part( 'template-parts/content', 'page' ); ?>
                        
                    </div>

                    <?php if ( ( $sidebar_override == 'right' || $sidebar_override == 'leftright' || $sidebar_override == 'default' ) && is_active_sidebar( 1 ) ) : ?>

                        <div class="col-md-4 tyros-sidebar">
                            <?php get_sidebar( '1' ); ?>
                        </div>

                    <?php endif; ?>

                </div>
                    
                <?php if ( is_active_sidebar( 'sidebar-below-page' ) ) : ?>

                    <div class="row">
                        
                        <div class="col-md-12">
                        
                            <div class="below-page-area top-banner-text">
                                <?php get_sidebar( 'below-page' ) ?>
                            </div>           
                            
                        </div>            
                        
                    </div>

                    <div class="clear"></div>            

                <?php endif; ?>

            <?php endwhile; // end of the loop. ?>

        </div>
        
    </main><!-- #primary -->
    
</div><!-- #primary -->

<?php get_footer();
