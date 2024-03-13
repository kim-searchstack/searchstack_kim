<?php
/**
 * Template Name: Podcast Service Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>

<?php get_header(); ?>


<div class="podcast-servicebanner">
    <div class="inner_servicebanner">
        <div class="banner_pod_text">
            <?php the_field('podcast_service_banner'); ?>
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
        <div class="right_banner-pod">
            <img src="<?php the_field('banner_mic_image'); ?>">
        </div>
    </div>
</div>

<div class="spend_time_guest">
    <div class="inner_time_guest">
        <div class="under_banner_img">
            <img src="<?php the_field('podcast_image'); ?>">
        </div>
        <div class="spend_time_text-row">
            <?php the_field('spend_your_time'); ?>
        </div>
    </div>
</div>

<div class="take_next_level">
    <div class="inner_take_next_level">
        <div class="take_level">How we take your podcast to<br> the <span style="color: #8600FF;">next level</span>
        </div>
        <div class="col-md-12 podcast_next_level">
            <div class="col-md-9 left_episodes">
                <div class="col-md-12 inner_left_episodes">
                    <div class="col-md-7">
                        <div class="col-row-main">
                            <div class="full_episode">
                                <div class="inner-full_episode">
                                    Full episode editing and audio tuning
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="Strategy_Coaching">
                            Strategy Coaching and support
                        </div>
                    </div>
                </div>
                <div class="col-md-12 build_keystone">
                   <div class="inner_build_keystone">
                       <div class="build_title">
                        Build a keystone content marketing machine
                    </div>   
                </div>   
            </div>
        </div>
        <div class="col-md-3 onlyright_episode">
            <div class="best_soundbites">
                The best soundbites into social assets
            </div>
            <div class="phone_img">
                <img src="/wp-content/uploads/2023/04/phone.png">
            </div>
        </div>
    </div>
</div>
</div>


<div class="video_section">
    <div class="inner_video_section">
        <div class="help_ambitious">How we’re helping ambitious<br> creators, just like you.</div>
    </div>
    <div class="vidoe_thumbnail_repeater">
        <?php if( have_rows('podcast_next_level') ): ?>   
            <?php while( have_rows('podcast_next_level') ): the_row(); ?>
              <div class="right_video_lightbox" style="background-image: url(<?php the_sub_field('video_thumbnail'); ?>);">
                <a href="<?php the_sub_field('video_url'); ?>" data-lity="">
                    <img class="play_btn_video" src="/wp-content/uploads/2023/04/Vector.svg"></a>
                    <div class="shadow-overlay"></div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<div class="our_plans">
    <div class="inner_our_plans">
        <div class="title_plan_row">
            Our plans
        </div>
        <div class="plans_desc">
        We’ve got three tiers of management for you. We recommend the middle tier as it can really make a huge difference to your podcast, being able to consistently promote and stretch the content of the episode is key to building an audience.</div>

        <div class="all_plansfeatured">
            <div class="col-md-4 plans_inner">
                <div class="inner_plans_row">
                    <div class="title_row-plan">Starter</div>
                    <div class="desc_row-plan">Getting started? We'll help you get going.</div>
                    <div class="plan_price">£500 <span class="month_year">/month [Max 5 episodes] </span></div>
                    <div class="if_not">or <span class="priceper_episode">£150</span> <span class="month_year">/Per episode </span></div>
                    <div class="plus_vat">+VAT</div>
                    <div class="plans_featured">
                        <?php if( have_rows('stater_plan') ): ?>   
                            <?php while( have_rows('stater_plan') ): the_row(); ?>
                                <ul class="starer_plan">
                                    <li><?php the_sub_field('add_text'); ?></li>
                                </ul>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div id="most_pop-center" class="col-md-4 plans_inner">
                <div class="Most_popular">Most Popular</div>
                <div class="inner_plans_row">
                    <div class="title_row-plan">Podcaster</div>
                    <div class="desc_row-plan">Take your podcast to the next level.</div>
                    <div class="plan_price">£1300 <span class="month_year">/month [Max 15 episodes] </span></div>
                    <div class="if_not">or <span class="priceper_episode">£350</span> <span class="month_year">/Per episode </span></div>
                    <div class="plus_vat">+VAT</div>
                    <div class="plans_featured">
                        <?php if( have_rows('podcaster_plan') ): ?>   
                            <?php while( have_rows('podcaster_plan') ): the_row(); ?>
                               <ul class="starer_plan">
                                <li><?php the_sub_field('add_features'); ?></li>
                            </ul>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="free_podcast">Free  Podcast website build and maintained. [Podcaster + Advanced]
            </div> 
        </div>  

        <div class="col-md-4 plans_inner">
            <div class="inner_plans_row">
                <div class="title_row-plan">Advanced</div>
                <div class="desc_row-plan">Start to build leads from your Podcast efforts.</div>
                <div class="plan_price">£1800 <span class="month_year">/month [Max 30 episodes] </span></div>
                <div class="if_not">or <span class="priceper_episode">£500</span> <span class="month_year">/Per episode </span></div>
                <div class="plus_vat">+VAT</div>
                <div class="plans_featured">
                    <?php if( have_rows('advanced_plan') ): ?>   
                        <?php while( have_rows('advanced_plan') ): the_row(); ?>
                            <ul class="starer_plan">
                                <li>
                                    <?php the_sub_field('enter_feature'); ?>
                                </li>
                            </ul>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="podcast_Service_bottom" class="skillpoint-banner">
    <div class="inner_skillpoint-banner" style="background-image: linear-gradient(101.74deg, rgba(217, 217, 217, 0.1) 11.8%, rgba(217, 217, 217, 0) 46.17%);">
        <div class="banner_skill_text">
            <img src="/wp-content/uploads/2023/01/studio-microphone_1f399-fe0f-7.svg">
            <?php the_field('skill_point_banner_text'); ?>
            <button class="Download_Guide"><a href="https://searchstack.co.uk/recruitment-podcast-ebook/">Download Guide</a></button>
        </div>
        <div class="right_coverimg">
            <img src="/wp-content/uploads/2023/01/Magazine-03-1.svg">
        </div>
    </div>
</div>



<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.vidoe_thumbnail_repeater').slick({
            centerMode: true,
            slidesToShow: 3,
            autoplay: true,
            arrows: true,
            autoplaySpeed: 3000,

            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    arrows: true,
                    centerMode: true,
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    centerMode: true,
                    slidesToShow: 1
                }
            }
            ]
        });
    });
</script>
<script type="text/javascript" src="/wp-content/themes/searchstack/js/slick-1.8.1/slick-1.8.1/slick/slick.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="/wp-content/themes/searchstack/js/lity-2.4.1/dist/lity.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<?php get_footer(); ?>