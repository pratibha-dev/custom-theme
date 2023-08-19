<?php get_header(); ?>



<div>
    <h1>
        <?php single_cat_title(); ?>
    </h1>
    <div class="row gy-5 row-cols-3" style="margin: 10px;">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post(); ?>

                <div class="col">
                    <div class="card p-10" style="height:280px">
                        <div class="card-body">

                            <h3>
                            <?php the_title(); ?>
                            </h3>

                            <?php the_excerpt(); ?>

                            <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>


    </div>
</div>


<?php get_footer(); ?>