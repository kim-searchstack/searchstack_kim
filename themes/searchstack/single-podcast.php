<?php
/**
 * Template Name: Single Podcast Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>
<?php get_header(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="talent_growth_podcastmain">
    <div class="col-md-8 inner_podcastmain">
        <div class="single_left_podcasttext">
            <span class="date_published-cpt episode_text"><?php the_field('podcast_pub_date'); ?></span>
            <div class="insight_title">
                <?php the_title(); ?>
            </div>
            <div class="wporg_guest_id">
                <h3><?php the_field('wporg_guest_id'); ?></h3>
            </div>
        </div>
        <div class="Listen_here">
            <div class="Listen_heretext">Share Episode:</div>
            <a href="#"><img src="/wp-content/uploads/2023/03/Vector.png"></a>
            <a href="#"><img src="/wp-content/uploads/2023/03/Vector1.png"></a>
            <a href="#"><img src="/wp-content/uploads/2023/03/Vector2.png"></a>
            <a href="#"><img src="/wp-content/uploads/2023/03/Vector3.png"></a>
            <a href="#"><img src="/wp-content/uploads/2023/03/Vector4.png"></a>
        </div>
    </div>
    <div class="col-md-4 banner_image">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
    </div>
</div>

<?php
$id = get_the_ID();
global $wpdb;
$table = $wpdb->prefix . 'postmeta';//echo"select `meta_value` from `$table` where `post_id` = '$id' AND `meta_key` = 'podcast_audio_link'";
$iframe = $wpdb->get_var( "select `meta_value` from `$table` where `post_id` = '$id' AND `meta_key` = 'podcast_iframe_link'");
$iframe = str_replace("/episodes/","/embed/episodes/",$iframe);
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="main_single_comyent_podcast">
    <div class="single_comyent_podcast">
        <iframe src="<?php echo $iframe; ?>" style="width: 100%;" allowfullscreen scrolling="no">
        </iframe>
        <div class="single_comyent_only">
            <?php the_content(); ?>
        </div>
    </div>


    <div class="right_section">
        <div class="founder_section">
            <div class="founder_image">
                <img src="/wp-content/uploads/2023/03/Mask-group.svg">
            </div>
            <div class="founder-link">
                @haydn-morgans
            </div>
            <div class="founder_info">
                Founder at Search Stack 👾 <br>
                Host of the Skill Point Podcast 🎙️
            </div>
            <a target="_blank" href="https://www.linkedin.com/in/haydn-morgans/" class="founder_linkedin">
                <button><img src="/wp-content/uploads/2023/03/icons8-linkedin-1.png">Follow on LinkedIn <img src="/wp-content/uploads/2023/03/Vector-1.png" class="linkedin_right"></button>
            </a>
        </div>
        <div class="bottm_related">
            <div class="related_articles">
            Related Episodes</div>
            <div class="search">
              <i class="fa fa-search"></i>
              <input type="text" id='search_episodes' class="form-control" placeholder="Search Episodes">
              <?php
              global $wpdb;
              $contents = $wpdb->get_results( "SELECT DISTINCT `meta_value` FROM `wp_3769c6b6bb_postmeta` where `meta_key` = 'wporg_box_id' && `meta_value` != 'NULL'");
              echo '<select class="cat_select" name="category">';
              echo '<option value="">Filter Category</option>';
              foreach( $contents as $content)
              {
                echo '<option value="'.$content->meta_value.'"> '.$content->meta_value.' </option>';
            }
            echo '</select>';
            ?>
            <button class="submit_title btn btn-primary">Search</button>
        </div>
        <?php
        global $post;
        $current_post_type = get_post_type( $post );
        $args1 = array(
            'posts_per_page' => 3,
            'order' => 'DESC',
            'orderby' => 'ID',
            'post_type' => $current_post_type,
            'post__not_in' => array( $post->ID )
        );
        $blog_posts_second = new WP_Query( $args1 );
        ?>
        <div class="related_episode search_result">
            <?php if ( $blog_posts_second->have_posts() ) : ?>
                <?php while ( $blog_posts_second->have_posts() ) : $blog_posts_second->the_post(); ?>
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
            <?php endif; ?>
        </div>
    </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>


<?php get_footer(); ?>
