            <?php 
            $philosophy_video_file = '';
            if(function_exists('the_field')){
                $philosophy_video_file = get_field('source_file');
            }
            ?>
                <article <?php post_class("masonry__brick entry format-video") ?> data-aos="fade-up">
                        
                        <div class="entry__thumb video-image">
                            <a href="<?php echo esc_url($philosophy_video_file); ?>" data-lity>
                            <?php the_post_thumbnail('philosophy_thumb') ?>
                            </a>
                        </div>
        
                        <?php get_template_part('Template-parts/common/summary'); ?>
        
                </article> <!-- end article -->