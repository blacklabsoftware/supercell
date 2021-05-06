<?php

get_header();
?>

<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post() ?>



            <div class="container mx-auto py-16">
                <div class="px-4 lg:px-0 lg:w-2/3 mx-auto">

                        <div class="page-header">
                            <h1 class="mb-8 uppercase text-3xl font-medium text-dark-blue header-highlight tracking-wide"><?php the_title() ?></h1>
                        </div>

                        <div class="text-gray-600 leading-normal text-xl wysiwyg-content">
                            <?php the_content() ?>
                        </div>
                        <?php wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) ?>

                </div>
            </div>



    <?php


endwhile;
endif;
?>



</div>

<?php get_footer(); ?>