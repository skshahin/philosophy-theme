<?php
/**
 * Template Name: About page
 */
get_header(); ?>


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    <?php echo get_the_title(); ?>
                </h1>
                <ul class="s-content__header-meta">
                    <li class="date"><?php echo get_the_date(); ?></li>
                    <li class="cat">
                        In
                        <?php echo get_the_tag_list(' '); ?>
                    </li>
                </ul>
            </div> <!-- end s-content__header -->
    
            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">

               <?php the_content(); ?>
                
               <div class="row block-1-2 block-tab-full">
                    <?php
                    if(is_active_sidebar('slide-1')){
                        dynamic_sidebar('slide-1');
                    }
                    ?>
                    
                 </div>

            </div> <!-- end s-content__main -->

        </article>


      

    </section> <!-- s-content -->


    <!-- s-extra
    ================================================== -->
   <?php get_footer(); ?>