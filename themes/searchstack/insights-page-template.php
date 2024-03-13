<?php
/**
 * Template Name: Insight Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>

<?php get_header(); ?>

<div class="homepage-header-block-row" style="background-image: url('/wp-content/uploads/2021/12/finger-upwards-point-hq.jpg')">
    <div class="hpnp-text-block">
        <div class="hp-h-tag-block">
            <div class="hph-tag">Insights <img src="/wp-content/uploads/2021/08/surface2163179.svg" alt="" class="hph-arrow"></div>
       </div>
        <h1>We share the latest insights thoughts and company news.</h1>
        <div class="schedule-call-block">
        <img src="/wp-content/uploads/2022/10/Haydn.png" alt="" class="scb-img">
        <p class="scb-para">Schedule a call with Haydn our Director</p>
            <a href="https://calendly.com/haydn-searchstack/website-meeting" target="_blank" class="book-call-link">
                <button class="book-call-button"><span class="bc-p">Book a call</span>
                    <span class="bcb-icon-block"><img src="/wp-content/uploads/2021/05/white-arrow.svg" alt="" class="icon-block"></span>
                </button>
            </a>
        </div>
    </div>
    <img src="/wp-content/uploads/2021/12/ss-mark.svg" alt="" class="ss-mark-hero">
    <div class="sp-block-container">
        <div class="sp-divider-block"></div>
        <div class="sp-divider-block"></div>
        <div class="sp-divider-block"></div>
    </div>
</div>


<div class="blog-display-row">
<div class="latest-blog-container">
        <?php 
            $args = array (
                'post_type'              => 'post',
                'nopaging'               => false,
                'posts_per_page'         => '50',
                'order'                  => 'DESC',
                'orderby'                => 'DATE',
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="blog-card  rp-blog-card">
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="bc-link-ov">

                    <div class="blog-visual">
                        <div class="blog-image"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?></a></div>
                    </div>
                    <div class="blog-text">
                        <div class="blog-card-meta">
                        <div class="bc-cat"><?php the_category(); ?></div>

                            <div class="bc-date"><?php echo get_the_date('M j, Y') ?></div>
                        </div>
                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                            <p class="blog-title"><?php the_title(); ?></p>
                            <div class="blog-excerpt"><?php the_excerpt(__('(more…)')); ?></div>
                        </a>
                        <div class="bc-link">
                            View article <img src="/wp-content/uploads/2021/05/surface2163179.svg" alt="" class="va-arrow">
                        </div>
                    </div>
                </div>
        <?php endwhile; wp_reset_postdata(); ?>
        <!-- show pagination here -->
        <!-- show 404 error here -->
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>
