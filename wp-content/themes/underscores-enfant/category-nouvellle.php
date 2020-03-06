<?php get_header(); ?>
<h1 class="container">Nos nouvelles</h1>
<p class="container">Voici les dernières nouvelles</p>
<section class="container section-nouvelle">
        <?php
        $query = new WP_Query( array( 'category_name' => "nouvellle"));
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                    $query->the_post();
					?><div class = "structure-nouvellle">
                        <?php
                            echo the_post_thumbnail("thumbnail");
                            ?>
                            <div class="division-nouvelle">
                            <?php
                            echo '<h1><a href="'.get_permalink( $id ).'">' . get_the_title() .  '</a></h1>';
                            echo the_excerpt();
                            echo "<input class='button-css' type='button' value='Lire la suite'>";
                            ?>
                            </div>
                            <div class="division-vide"></div>
                            <?php
                        ?>
					</div>
					<?php
                }
        } 
        else {
            echo "no found";
        }
        wp_reset_postdata();
        ?>
</section>
<?php get_footer(); ?>