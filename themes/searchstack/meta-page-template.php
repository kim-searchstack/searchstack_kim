<?php
/**
 * Template Name: Meta Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>

<?php get_header(); ?>


<div class="sp-header-block-row">
	<div class="hero-shadow"></div>
	<div class="post-image">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
	</div>
</div>

<div class="post-content-row">
	<div class="pcr-container">
		<div class="pcr-meta">
		</div>
		<div class="pcr-title-block">
			<h1><?php the_title(); ?></h1>
			<div class="date-author">
				Written by: <?php echo get_the_author_meta('display_name', $author_id); ?> | <?php echo get_the_date('M j, Y') ?>
			</div>
		</div>

		<div class="blog-content-row">
		<?php the_content(''); ?>
		</div>
	</div>
</div>

</div>
</div>

</div>
</div>
</div>

</div>
</div>
</div>

</div>
</div>
</div>

</div>
</div>
</div>

</div>
</div>
</div>

</div>
</div>
</div>

</div>

<?php
get_footer();
