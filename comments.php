<div class="comments-wrap">

<div id="comments" class="row">
    <div class="col-full">

        <h3 class="h2">
            <?php
                $comments_nm = get_comments_number();
                if($comments_nm<=1){
                    echo wp_kses_post($comments_nm." ".__('comment','philosophy'));
                }else{
                    echo wp_kses_post($comments_nm." ".__('comments','philosophy'));
                }
            ?>
        </h3>

        <!-- commentlist -->
        <ol class="commentlist">

            <?php wp_list_comments(); ?>

        </ol> <!-- end commentlist -->

        <div class="comments_pagination">
            <?php
                the_comments_pagination(array(
                    'screen_reader_text' => __('pagination','philosophy'),
                    'prev_text' => __('previous_comment','philosophy'),
                    'next_text' => __('next_comment','philosophy')
                ));
            ?>
        </div>


        <!-- respond
        ================================================== -->
        <div class="respond">

            <h3 class="h2">
                <?php __('Add Comment','philosophy'); ?>
            </h3>
            
            <?php comment_form(); ?>

        </div> <!-- end respond -->

    </div> <!-- end col-full -->

</div> <!-- end row comments -->
</div> <!-- end comments-wrap -->