<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package searchstack
 */

get_header();
?>

<div class="sp-header-block-row">
	<div class="hero-shadow"></div>
	<div class="post-image">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
	</div>
</div>

<div class="post-content-row">
	<div class="pcr-container">
		<div class="pcr-meta">
		<div class="post-cat"><?php the_category(); ?><img src="/wp-content/uploads/2021/05/surface2163179.svg" alt="" class="sp-arrow"></div>
		</div>
		<div class="pcr-title-block">
			<h1><?php the_title(); ?></h1>
			<div class="date-author">
				Written by: <?php echo get_the_author_meta('display_name', $author_id); ?> | <?php echo get_the_date('M j, Y') ?>
			</div>
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
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>

<?php
get_footer();
