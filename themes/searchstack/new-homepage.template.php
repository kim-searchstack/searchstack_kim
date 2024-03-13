<?php
/**
 * Template Name: Homepage Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>

<?php get_header(); ?>

<div class="homepage-header-block-row" style="background-image: url('/wp-content/uploads/2021/05/hand-hero-searchstack.png')">
    <div class="hpnp-text-block">
        <div class="hp-h-tag-block">
            <div class="hph-tag">Purposeful brands <img src="/wp-content/uploads/2021/08/surface2163179.svg" alt="" class="hph-arrow"></div>
            <div class="hph-tag">Engaging Websites <img src="/wp-content/uploads/2021/08/surface2163179.svg" alt="" class="hph-arrow"></div>
            <div class="hph-tag">Impactful Content <img src="/wp-content/uploads/2021/08/surface2163179.svg" alt="" class="hph-arrow"></div>
        </div>
        <h1><span class="head-reveal">We help <span class="colour-change">recruitment </span></span></br> 
            <span class="head-reveal-2">companies find their<span class="colour-change"> voice</span></span></br>
            <span class="head-reveal-3">and build their <span class="colour-change">tribe.</span></span>
        </h1>        
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
    <div class="hph-social-block">
        <a href="https://www.linkedin.com/company/search-stack-web-agency/" title="LinkedIn"  target="_blank" class=""><img src="/wp-content/uploads/2021/08/icons8-linkedin-3.svg" alt="" class="social-icon-h"></a>
        <a href="https://www.instagram.com/searchstack/" title="Instagram" target="_blank" class=""><img src="/wp-content/uploads/2021/08/icons8-instagram-logo.svg" alt="" class="social-icon-h"></a>
        <a href="https://www.facebook.com/SearchStack" title="Facebook" target="_blank" class=""><img src="/wp-content/uploads/2021/08/icons8-facebook-logo-1.svg" alt="" class="social-icon-h"></a>
    </div>
    <div class="mobile-shadow"></div>
    <img src="/wp-content/uploads/2021/12/ss-mark.svg" alt="" class="ss-mark-hero">
</div>

<div class="hp-tab-row">
    <div class="hp-tab-head">
        <h2 >We're on a mission to <span>level up</span> the recruitment industry.</br> One brand at a time.</h2>
    </div>
    <div class="tab-container" >
        <!-- Tab links -->
        <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Website')" id="defaultOpen">Websites</button>
        <button class="tablinks" onclick="openTab(event, 'Personal')">Personal Branding</button>
        <button class="tablinks" onclick="openTab(event, 'Branding')">Branding</button>
        <button class="tablinks" onclick="openTab(event, 'Podcasts')">Podcasts</button>
        <button class="tablinks" onclick="openTab(event, 'Content')">Content Marketing</button>
        </div>

        <!-- Tab content -->
        <div id="Website" class="tabcontent">
            <div class="tab-block">
                <div class="tb-left">
                    <p class="tb-subtitle">Websites</p>
                    <div class="tab-content-container">
                        <?php the_field('website_tab'); ?>
                    </div>
                    <a href="https://calendly.com/haydn-searchstack/website-meeting" target="_blank">
                        <button class="tb-button">Book a call <img src="/wp-content/uploads/2021/08/surface2163179.svg" alt="" class="hph-arrow"></button>
                    </a>
                </div>
                <div class="tb-right">
                    <div class="tab-grid-image">
                        <div class="tab-grid-one" style="background-image: url('<?php the_field('website_image'); ?>')"></div>
                        <div class="tab-grid-two" style="background-image: url('<?php the_field('website_image'); ?>')"></div>
                        <div class="tab-grid-three" style="background-image: url('<?php the_field('website_image'); ?>')"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Personal" class="tabcontent">
            <div class="tab-block">
                <div class="tb-left">
                    <p class="tb-subtitle">Personal Branding</p>
                    <div class="tab-content-container">
                        <?php the_field('personal_branding_tab'); ?>
                    </div>
                    <a href="https://calendly.com/haydn-searchstack/website-meeting" target="_blank">
                        <button class="tb-button">Book a call <img src="/wp-content/uploads/2021/08/surface2163179.svg" alt="" class="hph-arrow"></button>
                    </a>
                </div>
                <div class="tb-right">
                    <div class="tab-grid-image">
                        <div class="tab-grid-one" style="background-image: url('<?php the_field('personal_branding_image'); ?>')"></div>
                        <div class="tab-grid-two" style="background-image: url('<?php the_field('personal_branding_image'); ?>')"></div>
                        <div class="tab-grid-three" style="background-image: url('<?php the_field('personal_branding_image'); ?>')"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Branding" class="tabcontent">
            <div class="tab-block">
                <div class="tb-left">
                    <p class="tb-subtitle">Branding</p>
                    <div class="tab-content-container">
                        <?php the_field('branding_tab'); ?>
                    </div>
                    <a href="https://calendly.com/haydn-searchstack/website-meeting" target="_blank">
                        <button class="tb-button">Book a call <img src="/wp-content/uploads/2021/08/surface2163179.svg" alt="" class="hph-arrow"></button>
                    </a>
                </div>
                <div class="tb-right">
                    <div class="tab-grid-image">
                        <div class="tab-grid-one" style="background-image: url('<?php the_field('branding_image'); ?>')"></div>
                        <div class="tab-grid-two" style="background-image: url('<?php the_field('branding_image'); ?>')"></div>
                        <div class="tab-grid-three" style="background-image: url('<?php the_field('branding_image'); ?>')"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Podcasts" class="tabcontent">
            <div class="tab-block">
                <div class="tb-left">
                    <p class="tb-subtitle">Podcasts</p>
                    <div class="tab-content-container">
                        <?php the_field('podcasts_tab'); ?>
                    </div>
                    <a href="https://calendly.com/haydn-searchstack/website-meeting" target="_blank">
                        <button class="tb-button">Book a call <img src="/wp-content/uploads/2021/08/surface2163179.svg" alt="" class="hph-arrow"></button>
                    </a>
                </div>
                <div class="tb-right">
                    <div class="tab-grid-image">
                        <div class="tab-grid-one" style="background-image: url('<?php the_field('podcast_image'); ?>')"></div>
                        <div class="tab-grid-two" style="background-image: url('<?php the_field('podcast_image'); ?>')"></div>
                        <div class="tab-grid-three" style="background-image: url('<?php the_field('podcast_image'); ?>')"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Content" class="tabcontent">
            <div class="tab-block">
                <div class="tb-left">
                    <p class="tb-subtitle">Content Marketing</p>
                    <div class="tab-content-container">
                        <?php the_field('content_marketing_tab'); ?>
                    </div>
                    <a href="https://calendly.com/haydn-searchstack/website-meeting" target="_blank">
                        <button class="tb-button">Book a call <img src="/wp-content/uploads/2021/08/surface2163179.svg" alt="" class="hph-arrow"></button>
                    </a>
                </div>
                <div class="tb-right">
                    <div class="tab-grid-image">
                        <div class="tab-grid-one" style="background-image: url('<?php the_field('content_marketing_image'); ?>')"></div>
                        <div class="tab-grid-two" style="background-image: url('<?php the_field('content_marketing_image'); ?>')"></div>
                        <div class="tab-grid-three" style="background-image: url('<?php the_field('content_marketing_image'); ?>')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hp-service-row" style="display: none;">
    <div class="hp-sr-head">
        <h2>Our Services</h2>
        <p>We'll meet, discuss your project, and understand your needs. We understand your market, goals of your website and where your web project needs to position you in the market.</p>
    </div>
    <div class="hpsr-flex">
    <?php if( have_rows('add_service_block') ): ?>   
    <?php while( have_rows('add_service_block') ): the_row(); ?>
        <div class="hpsr-block">
            <a href="<?php the_sub_field('page_link'); ?>" title="<?php the_sub_field('title'); ?>" class="hpsb-link">
                <div class="hspb-arrow"></div>
                <div class="hpsb-text">
                    <p class="hpsb-title"><?php the_sub_field('title'); ?></p>
                    <p class="hpsb-para"><?php the_sub_field('textarea'); ?></p>
                    <div class="hspb-button">View service <div class="hspb-icon"></div></div>
                </div>
                <div class="hspb-bg-image">
                    <img src="<?php the_sub_field('background_image'); ?>" class="hspb-img">
                    <div class="hspb-shadow"></div>
                    <div class="hspb-overlay"></div>
                </div>
            </a>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
</div>

<div class="project-row">
    <div class="hp-sr-head">
        <h2 data-aos="fade-up">Featured Projects</h2>
        <div class="view-all-button" data-aos="fade-up" data-aos-delay="300">
            <a href="/work/" title="View all projects" class="">View all projects <img src="/wp-content/uploads/2021/05/white-arrow.svg" alt="" class="va-icon"></a>
        </div>
    </div>
    <div class="project-slider">
    <?php if( have_rows('add_project') ): ?>   
    <?php while( have_rows('add_project') ): the_row(); ?>
        <div class="project-block" data-aos="fade-up" data-aos-delay="<?php the_sub_field('delay'); ?>">
            <div class="project-image" style="background-image: url('<?php the_sub_field('project_image'); ?>')"></div>
            <div class="project-block-text">
                <a href="<?php the_sub_field('project_link'); ?>" class="pb-b-link" target="_blank">View project <img src="/wp-content/uploads/2021/05/white-arrow.svg" class="vp-img"></a>
                <p class="pb-title"><?php the_sub_field('project_title'); ?></p>
                <p class="pb-para"><?php the_sub_field('project_subtitle'); ?></p>
            </div>
            <div class="project-gradient"></div>
            <a href="<?php the_sub_field('project_link'); ?>" class="pb-link" target="_blank"></a>
    
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
</div>

<div class="blog-display-row">
    <div class="hp-sr-head">
        <h2 data-aos="fade-up">Latest Insights</h2>
        <div class="view-all-button" data-aos="fade-up" data-aos-delay="300">
            <a href="/insights/" title="View all projects" style="color: #05020E">View all articles <img src="/wp-content/uploads/2021/05/surface2163179.svg" alt="" class="va-icon"></a>
        </div>
    </div>
<div class="latest-blog-container">
        <?php 
            $args = array (
                'post_type'              => 'post',
                'nopaging'               => false,
                'posts_per_page'         => '2',
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

<div class="hp-about-row">
    <div class="hp-about-container" style="background-image: url('/wp-content/uploads/2021/08/about-trees-row.jpg');">
        <div class="hp-about-text">
            <h2 data-aos="fade-up">Making a difference</h2>
            <p class="ar-arrow-block" data-aos="fade-up">
                <span class="at-txt">Charity</span><span class="at-arrow"></span>
                <span class="at-txt">environment</span><span class="at-arrow"></span>
                <span class="at-txt">Sustainability</span>
            </p>
            <p data-aos="fade-up" class="ar-content">Using our platform and privileged position to bring actionable change and opportunities to those in need - see what we stand for.</p>
            <a href="/about/" class="book-call-link">
                <button data-aos="fade-up" class="book-call-button"><span class="bc-p">About us</span>
                    <span class="bcb-icon-block"><img src="/wp-content/uploads/2021/05/white-arrow.svg" alt="" class="icon-block"></span>
                </button>
            </a>
        </div>
        <div class="hp-about-shadow"></div>
    </div>
</div>

<div class="feedback-slider-row">
    <div class="testimonial-slider">
    <?php if( have_rows('add_testimonial') ): ?>   
    <?php while( have_rows('add_testimonial') ): the_row(); ?>
        <div class="testimonial-quote-block">
            <p class="testimonial-quote">"<?php the_sub_field('quote'); ?>"</p>
            <p class="testimonial-name"><?php the_sub_field('name'); ?></p>
            <p class="testimonial-title"><?php the_sub_field('title'); ?></p>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="/wp-content/themes/searchstack/js/tilt.js-master/src/tilt.jquery.js"></script>
<script src="/wp-content/themes/searchstack/js/dragscroll.js"></script>

<script>

    window.onscroll = function() {mouseScroll()};

    function mouseScroll() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("mouse-scroll").style.opacity = "0";
    } else {
        document.getElementById("mouse-scroll").style.opacity = "1";            
    }
    }

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("masthead").style.background = "#05011e";
        document.getElementById("masthead").style.border = "none";
    } else {
        document.getElementById("masthead").style.background = "transparent";
        document.getElementById("masthead").style.borderBottom = "solid 1px rgb(255, 255, 255, 0.1)";
    }
    }


</script>


<?php get_footer(); ?>
