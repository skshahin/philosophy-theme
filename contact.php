<?php
/**
 * Template Name: contact page
 */
get_header(); ?>


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title text-center">
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
    

            <div>
            <?php 
            if(is_active_sidebar('map-1')){
                dynamic_sidebar('map-1');
            }
            
            ?>

               <?php the_content(); ?>
                
               <div class="col-full s-content__main">
                    <?php
                    if(is_active_sidebar('contact-1')){
                        dynamic_sidebar('contact-1');
                    }
                    ?>
                    
                 </div>

            </div> <!-- end s-content__main -->

            <div>
                <h3><?php _e('Say Hello','philosophy'); ?></h3>
                <?php
                    if(get_field('contact_form')){
                       $contact_form = do_shortcode(get_field('contact_form'));

                      $contact_form_7 = str_replace('<form',"<form id='cForm' name='cForm'",$contact_form);
                      echo wp_kses_post($contact_form_7); 
                    }
                ?>
            </div>

        </article>


      

    </section> <!-- s-content -->


    <!-- s-extra
    ================================================== -->
   <?php get_footer(); ?>