  <?php while ( $blog_posts_serch->have_posts() ) : $blog_posts_serch->the_post(); ?>
<div class="insight_data">
                        <div class="featured_imahge_podcast">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
                        </div>
                        <div style="display: none;" class="cat_name" >
                            <?php the_field('wporg_box_id'); ?>
                        </div>
                        <div class="single_insight">
                            <span class="date_published-cpt"><?php the_field('podcast_pub_date'); ?></span>
                            <div class="insight_title insight_title_inner">
                                <?php the_title(); ?>
                            </div>
                            <div class="service_description">
                                <h3 class="service_guest"><?php the_field('wporg_guest_id'); ?></h3>
                            </div>
                        </div>
                        <a class="read_article_inner" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
                    </div>
          <?php endwhile; ?>