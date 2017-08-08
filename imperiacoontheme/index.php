<?php get_header(); ?>


        <section class="content">
            <div class="uzor left-top"></div>
            <div class="uzor right-top"></div>
            <div class="uzor left-btm"></div>
            <div class="uzor right-btm"></div>
            <div class="news">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


                    <div class="divider"></div>

                    <?php the_content(); ?>
                <?php endwhile; else : ?>


                    <?php _e( 'Sorry, no posts were found.' ); ?>

                <?php endif; ?>
            </div>
        </section>



<?php get_footer(); ?>