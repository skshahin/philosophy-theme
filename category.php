<?php get_header(); ?>


    <!-- s-content
    ================================================== -->
    <section class="s-content">

        <div class="row narrow">
                <div class="col-full s-content__header" data-aos="fade-up">
                    <h1>Category: <?php single_cat_title(); ?></h1>

                    <p class="lead">
                        <?php echo category_description(); ?>
                    </p>
                </div>
        </div>
        
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

            <?php if(!have_posts()): ?>
                <h4 class="text-center"><?php _e('No Category Post','philosophy'); ?></h4>

            <?php endif; ?>

        <?php  
        while(have_posts()) { the_post();
        get_template_part('Template-parts/post-formats/post',get_post_format());
        }
        ?>


            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

        <div class="row">
            <div class="col-full">
                <nav class="pgn">
                    <ul>
                        <?php philosophy_paginate();  ?>
                    </ul>
                </nav>
            </div>
        </div>

    </section> <!-- s-content -->


  <?php get_footer(); ?>