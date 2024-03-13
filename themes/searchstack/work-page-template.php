<?php
/**
 * Template Name: Work Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>

<?php get_header(); ?>

<div class="homepage-header-block-row" style="background-image: url('/wp-content/uploads/2021/12/circle-banner-hq.jpg')">
    <div class="hpnp-text-block">
        <div class="hp-h-tag-block">
            <div class="hph-tag">Work <img src="/wp-content/uploads/2021/08/surface2163179.svg" alt="" class="hph-arrow"></div>
       </div>
        <h1>Outstanding work for bloody good Recruitment Agencies.</h1>
        <p class="sp-subtitle">We're proud of the work we've delivered for our awesome clients. See some of our latest builds below. </p>
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


<div class="project-row">
    <div class="project-slider">
    <?php if( have_rows('add_project') ): ?>   
    <?php while( have_rows('add_project') ): the_row(); ?>
        <div class="project-block">
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



<?php get_footer(); ?>
