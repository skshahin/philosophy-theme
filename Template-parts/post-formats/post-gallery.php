<article <?php post_class("masonry__brick entry format-gallery") ?> data-aos="fade-up">
                        
                    
                        <div class="entry__thumb slider">
                            <div class="slider__slides">
                                <div class="slider__slide">
                                    <?php
                                    $philosophy_image = get_field('attachment_image_1');
                                    $philosophy_image_details = wp_get_attachment_image_src($philosophy_image,'philosophy_thumb');
                                    echo "<img src='".esc_url($philosophy_image_details[0])."'/>";
                                    ?>
                                </div>
                                <div class="slider__slide">
                                <?php
                                    $philosophy_image = get_field('attachment_image_2');
                                    $philosophy_image_details = wp_get_attachment_image_src($philosophy_image,'philosophy_thumb');
                                    echo "<img src='".esc_url($philosophy_image_details[0])."'/>";
                                    ?>
                                </div>
                                <div class="slider__slide">
                                <?php
                                    $philosophy_image = get_field('attachment_image_3');
                                    $philosophy_image_details = wp_get_attachment_image_src($philosophy_image,'philosophy_thumb');
                                    echo "<img src='".esc_url($philosophy_image_details[0])."'/>";
                                    ?>
                                </div>
                            </div>
                        </div>
        
                        <?php get_template_part('Template-parts/common/summary'); ?>
        
                    </article> <!-- end article -->