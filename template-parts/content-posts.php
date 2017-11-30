<?php
/*
 * Posts Template
 * @author bilal hassan <info@smartcatdesign.net>
 * 
 */
?>

<div class="item-post carousel-blog-item">
    
    <div class="post-thumb">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'large' ); ?>
        </a>
    </div>
    
    <div class="clear"></div>
    
    <div class="inner">
    
        <h2 class="post-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

        <div class="post-content">
            <?php the_excerpt(); ?>
        </div>
        
    </div>
    
</div>