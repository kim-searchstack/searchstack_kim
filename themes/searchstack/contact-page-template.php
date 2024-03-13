<?php
/**
 * Template Name: Contact Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>

<?php get_header(); ?>

<div class="homepage-header-block-row" style="background-image: url('/wp-content/uploads/2021/12/point-banner-hq.jpg')">
    <div class="hpnp-text-block">
        <div class="hp-h-tag-block">
            <div class="hph-tag">Contact <img src="/wp-content/uploads/2021/08/surface2163179.svg" alt="" class="hph-arrow"></div>
       </div>
        <h1>Let's have a chat. We love to talk shop so let's get something booked in.</h1>
        <p class="sp-subtitle">If you're looking to start a project then get in touch. Either call, email or submit the form below and we'll back to within 24hrs. </p>
        <div class="schedule-call-block">
        <img src="/wp-content/uploads/2022/10/Haydn.png" alt="" class="scb-img">
        <p class="scb-para">Schedule a call with Haydn our Director</p>
            <a href="https://calendly.com/haydn-searchstack/30min" target="_blank" class="book-call-link">
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

<div class="contact-row">
    <div class="cr-left">
        <h3>If you've got a project you'd like to discuss then get in touch.</h3>
        <div class="cr-block">
            <div class="cb-cont">
            <p class="cp-subtitle">Email</p>
            <a href="mailto:hello@searchstack.co.uk">hello@searchstack.co.uk</a>
            </div>
            <div class="cb-cont">
            <p class="cp-subtitle">Call</p>
            <a href="tel:07738687108">07738687108</a>
            </div>
        </div>
        <div class="cb-cont">
        <p class="cp-subtitle">Connect</p>
        <div class="cp-icon-block">
			<a href="https://www.linkedin.com/company/67254186/admin/"><img src="/wp-content/uploads/2021/08/icons8-instagram-logo.svg"></a>
			<a href="https://www.instagram.com/searchstack/"><img src="/wp-content/uploads/2021/08/icons8-linkedin-3.svg"></a>
			<a href="https://www.facebook.com/SearchStack"><img src="/wp-content/uploads/2021/08/icons8-facebook-logo-1.svg"></a>
		</div>
        </div>
    </div>
    <div class="cr-right">
        <p class="fs-title">Submit a form and we'll get back to you within 24hrs</p>
        <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49" field_values="check=First Choice,Second Choice"]'); ?>
    </div>
</div>



<?php get_footer(); ?>
