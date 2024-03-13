<?php
/**
 * Template Name: Skill point Template
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
            <button class="Download_Guide"><a href="#ebook_jump">Download Guide</a></button>
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
        <div class="inner_banner_second-row" style="background-image: url(<?php the_field('video_thumbnail'); ?>)">
        <a href="<?php the_field('video_url'); ?>" data-lity class="pop-link"></a>
            <a href="<?php the_field('video_url'); ?>" data-lity>
                <img src="/wp-content/uploads/2023/01/Vector2.svg">
            </a>
        </div>
        <div class="what_guide_text">
            <h2><img src="/wp-content/uploads/2023/01/Vector4.svg"> What’s in the guide?</h2>
            <?php the_field('what’s_in_the_guide'); ?>
            <div class="whats_guide_image">
                <img src="<?php the_field('whats_guide_image'); ?>">
            </div>
            <h2 class="conteht_last_below"><img src="/wp-content/uploads/2023/01/Vector3.svg"> Contents</h2>
            <ul class="content_box-data">
                <?php if( have_rows('content_box') ): ?>    
                    <?php while( have_rows('content_box') ): the_row(); ?>
                        <li class="enter_value">
                            <?php the_sub_field('enter_value'); ?>
                        </li>  
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div class="sidebar_guide">
        <div class="inner_sidebar_guide">
            <a id="ebook_jump"></a>
            <h2><img src="/wp-content/uploads/2023/01/icons8-downloading-updates-11.svg"> Download</h2>
            <p><span class="we_dont_gate">We don’t gate our content,</span> so the guide is available to download with no strings attached. If you like what you see, sign up to see what else we’re working on. We’ve got some seriously exciting projects coming over the year, so keep your eyes peeled.</p>
            <div class="gravity_mailchimp">
                <?php echo do_shortcode('[gravityform id="3" title="true"]'); ?>
            </div>
        </div>
        <div class="podcast_notion_sidebar">
            <div class="sidebar_notion_podcast_image">
                <img src="<?php the_field('sidebar_notion_podcast_image'); ?>">
            </div>
            <div class="img-row-free-template">
                <img src="/wp-content/uploads/2023/01/Notion_app_logo-1.svg">
                <h2>Free Notion Podcast <br>strategy template.</h2>
                <p><?php the_field('free_notion_desc'); ?></p>
            </div>
        </div>
    </div>

</div>



<script src="/wp-content/themes/searchstack/js/lity-2.4.1/dist/lity.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery(".dont_subscribe input[type=checkbox]").click(function(){
            jQuery("#field_3_6,#field_3_5,#field_3_4,#field_3_3").toggle();
        });
    });
</script>
<script src="/wp-content/themes/searchstack/js/rellax.min.js"></script>
<script>
    jQuery(document).ready(function(){
        var rellax = new Rellax('.rellax', {
            center: true
        });
    });
</script>
<?php get_footer(); ?>