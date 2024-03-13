<?php
/**
 * Template Name: Job Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */


get_header();
?>

<div class="homepage-header-block-row" style="background-image: url('/wp-content/uploads/2022/05/marketing-exec-banner.png')">
    <div class="hero-shadow"></div>
    <div class="hpnp-text-block">
        <div class="hp-h-tag-block">
            <div class="hph-tag">We're hiring <img src="/wp-content/uploads/2021/08/surface2163179.svg" alt="" class="hph-arrow"></div>
       </div>
        <h1>Looking to kickstart your career in marketing? Join the Search Stack team!</h1>
        <p class="sp-subtitle">We're a purpose-driven creative digital agency that specialises in the Recruitment space. We help ambitious agencies find their voice and stand out in their crowded markets through impactful web design, engaging, and smart content all underpinned by strategy brought about by years of experience.
        </p>

    </div>
    <img src="/wp-content/uploads/2021/12/ss-mark.svg" alt="" class="ss-mark-hero">
    <div class="sp-gradient"></div>
    <div class="sp-block-container">
        <div class="sp-divider-block"></div>
        <div class="sp-divider-block"></div>
        <div class="sp-divider-block"></div>
    </div>
</div>

<div class="post-content-row">
	<div class="pcr-container">
		<div class="pcr-meta">
		</div>
		<div class="pcr-title-block">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="share-content-block">
			<div class="article-meta-container">
				<div class="social-share-block">
					<button class="button" data-sharer="twitter" data-title="<?php the_title(); ?>" data-hashtags="" data-url="<?php the_permalink() ?>"><img src="/wp-content/uploads/2021/12/icons8-twitter.svg" alt="twitter icon"></button>
					<button class="button" data-sharer="facebook" data-hashtag="hashtag" data-url="<?php the_permalink() ?>"><img src="/wp-content/uploads/2021/12/icons8-facebook-6.svg" alt="facebook icon"></button>
					<button class="button" data-sharer="linkedin" data-url="<?php the_permalink() ?>"><img src="/wp-content/uploads/2021/12/icons8-linkedin-3.svg" alt="linkedin icon"></button>
					<button class="button" data-sharer="email" data-title="<?php the_title(); ?>" data-url="<?php the_permalink() ?>/" data-subject="Check out this blog: <?php the_title(); ?>" data-to="some@email.com"><img src="/wp-content/uploads/2021/12/icons8-paper-plane.svg" alt="email icon"></button>
					<button class="button" data-sharer="whatsapp" data-title="<?php the_title(); ?>" data-url="<?php the_permalink() ?>"><img src="/wp-content/uploads/2021/12/icons8-whatsapp-2.svg" alt="whatsapp icon"></button>
				</div>
			</div>
		</div>
		<div class="blog-content-row">
		<?php the_content(''); ?>
        <div class="cr-right" style="width: 100%;">
        <p class="fs-title">Apply today, submit the form below and we'll get in touch with you. </p>
            <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true" tabindex="49" field_values="check=First Choice,Second Choice"]'); ?>
        </div>
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>

<?php
get_footer();
