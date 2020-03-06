<?php
/**
 * The template for displaying all page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astral
 * @since 0.1
 */
get_header();
/* 
* Functions hooked into astral_top_banner action
* 
* @hooked astral_inner_banner
*/
do_action( 'astral_top_banner' );
/* 
* Functions hooked into astral_breadcrumb_area action
* 
* @hooked astral_breadcrumb_area
*/
do_action( 'astral_breadcrumb_area' );
?>

<div id="content">
    <section class="align-blog" id="blog">
        <div class="container">
            <div class="row">
                <!-- left side -->
                <div class="col-lg-8 single-left mt-lg-0 mt-4">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						get_template_part( 'post', 'page' );
					endwhile;
					endif;
					?>
                </div>
                <!-- right side -->
                <div class="col-lg-4 event-right">
					<?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
?>
<section class="container">
    <h2 class=>les dernières nouvelles</h2>
    <!--<p>Je suis modifié par le front-page .php</p>-->
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

    <?php
    while ( have_posts() ) :
        the_post();
        $query = new WP_Query( array( 'category_name' => "nouvellle",
        'posts_per_page' => 3));
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                    $query->the_post();
                    echo '<h1>' . get_the_title() .  '</h1>';
                    echo '<p>' . the_excerpt() . '</p>';
                    the_post_thumbnail("thumbnail");
                }
        } 
        else {
            echo "no found";
        }
        wp_reset_postdata();
        the_post();
        $query = new WP_Query( array( 'category_name' => "evenement",
        'posts_per_page' => 3));
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                    $query->the_post();
                    echo '<h2>' . get_the_title() .  '</h2>';
                }
        } 
        else {
            echo "no found";
        }
        wp_reset_postdata();
        get_template_part( 'template-parts/content', 'page-acc' );
        //echo get_the_title();
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile; // End of the loop.
?>
</section>
get_footer(); ?>