<?php
/**
 * Template Name: Podcast Download Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>


<?php get_header(); ?>


<div class="skillpoint-banner">
    <div class="inner_skillpoint-banner" style="background-image: linear-gradient(101.74deg, rgba(217, 217, 217, 0.1) 11.8%, rgba(217, 217, 217, 0) 46.17%);">
        <div class="banner_skill_text">
            <img src="/wp-content/uploads/2023/01/studio-microphone_1f399-fe0f-7.svg">
            <?php the_field('skill_point_banner_text'); ?>
        </div>
        <div class="right_coverimg">
            <img src="/wp-content/uploads/2023/01/Magazine-03-1.svg">
        </div>
    </div>
</div>


<div class="img-rep-container-01 rellax" data-rellax-speed="2">
    <img src="/wp-content/uploads/2023/01/Podcast-Mic-1.svg">
</div>
<div class="under_banner_second-row">

    <div class="under_popup-row">
    <div class="inner_banner_second-row" style="background-image: url(<?php the_field('whats_guide_image'); ?>)">
        </div>
        <div class="what_guide_text">
            <h2><img src="/wp-content/uploads/2023/01/Vector4.svg"> Download the Ebook</h2>
            <?php the_field('what’s_in_the_guide'); ?>
            <button class="Download_Guide"><a href="/wp-content/uploads/2023/01/The-ultimate-guide-to-starting-a-recruitment-podcast..pdf" download>Download now</a></button>
        </div>
    </div>

    <div class="sidebar_guide">
        <div class="podcast_notion_sidebar">
            <div class="sidebar_notion_podcast_image">
                <img src="<?php the_field('sidebar_notion_podcast_image'); ?>">
            </div>
            <div class="img-row-free-template">
                <img src="/wp-content/uploads/2023/01/Notion_app_logo-1.svg">
                <h2>Free Notion Podcast <br>strategy template.</h2>
                <p><?php the_field('free_notion_desc'); ?></p>
                <button class="Download_Guide"><a href="https://mini-spectrum-079.notion.site/Podcast-Strategy-Template-b1091f77a7f341abbbc790a2cf32affe" target="_blank">Access Guide</a></button>
            </div>
        </div>
    </div>

</div>



<?php get_footer(); ?>