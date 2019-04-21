<!-- Contents for post, pages etc..-->
<div id="post-<?php the_ID(); ?>" <?php post_class('post-preview'); ?> itemprop="blogPost" itemtype="http://schema.org/BlogPosting" itemscope="itemscope">

    <div class="featured-image postlist">
        <?php the_post_thumbnail(); ?>
    </div>

    <div class="post-meta">
        <?php xylus_post_meta(); ?>
    </div>
    <div class="clearfix"></div>

    <?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
        <br>
        <span class="featured"><?php _e( 'Featured', 'xylus' ) ?></span>
    <?php } ?>

    <h2 class="post-title" itemprop="headline">
        <a href="<?php the_permalink(); ?>" rel="bookmark">
            <?php the_title(); ?>
        </a>
    </h2>

    <h4 class="post-subtitle" itemprop="text">
        <?php the_excerpt();
        echo ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More →', 'xylus') . '</a>';
        ?>
    </h4>

</div>
<hr>
