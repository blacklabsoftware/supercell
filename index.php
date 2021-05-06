<?php
/**
 * Template Name: Explore Insights
 */
get_header(); ?>
<div class="pt-8 pb-16">
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <p class="text-teal-500 text-5xl md:text-6xl lg:text-8xl text-center uppercase leading-tightest">Ahead Of The Curve</p>
</div>
</div>
<div class="bg-white pt-16 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-32">

            <div>
                <?php $page_for_posts = get_post( get_option( 'page_for_posts' )); ?>

                <h3 class="mb-4 font-semibold text-xl"><?php print $page_for_posts->post_title ?></h3>
                    <div class="wysiwyg-content mb-16">
                        <?php echo apply_filters('the_content', $page_for_posts->post_content); ?>
                    </div>
                
                    <h1 class="font-mono mb-8 text-2xl font">Insights</h1>
                
                    <ul class="mb-16">

                <?php foreach (get_posts(['post_type' => 'post']) as $index => $post) : ?>
                    
                    <li class="mb-2 <?php print $index == 0 ? 'text-yellow-500' : '' ?>"><a class="hover:text-yellow-500 font-semibold" href="<?php print get_permalink($post->ID) ?>"><?php print $post->post_title ?></a></li>

                <?php endforeach; ?>
                </ul>

                <h2 class="font-mono mb-2 text-2xl font">FAQs</h2>
                <p class="mb-8">Questions we get asked the most</p>

                <div x-data="{activeFaq: 1}">
                <dl>
                <?php foreach (get_field('faqs', $page_for_posts->ID) as $index => $faq) : ?>
                    
                        <dt 
                            @click.prevent="activeFaq = <?php print $index + 1 ?>"
                            class="font-semibold mb-2 mt-8 first:mt-0 hover:text-yellow-500 cursor-pointer">
                                <?php print $faq['question'] ?>
                                <span class="text-gray-400 text-sm" x-show="activeFaq == <?php print $index + 1 ?>">[-]</span>
                                <span class="text-gray-400 text-sm" x-show="activeFaq != <?php print $index + 1 ?>">[+]</span>
                            </dt>
                        <dd x-show="activeFaq == <?php print $index + 1 ?>" class="space-y-4">
                            <?php print $faq['answer'] ?>
                        </dd>

                        
                <?php endforeach; ?>
                </dl>

                </div>

            </div>
            <div class="col-span-2">

            <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>

            <?php print get_the_post_thumbnail(get_the_ID(), 'insight_top', ['class' => "mb-8 rounded-xl"]) ?>


            <h2 class="text-4xl font-semibold mb-8"><?php the_title() ?></h2>
            <div class="wysiwyg-content text-lg">
            <?php the_content() ?>
            </div>

            <p class="mt-8">
                <a href="https://outlook.office365.com/owa/calendar/RealiseHR1@realisehr.co.uk/bookings/" target="_blank" class="inline-block bg-yellow-500 hover:bg-yellow-600 transition-colors rounded-lg px-8 py-4 text-2xl text-white">Book a free consultation</a>
            </p>

            <?php endwhile; endif; ?>

            </div>
        </div>
    </div>

    <div class="go-to-top flex items-center justify-center py-16 relative z-10">
    <a class="group block" href="#top">
        <svg class="block mx-auto mb-4 group-hover:opacity-50 transition-opacity group-hover:bounce" xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30">
            <g transform="translate(0 29) rotate(-90)">
                <g  transform="translate(29 29) rotate(180)">
                    <g  data-name="Group 5" transform="translate(29 9)">
                        <path  data-name="Stroke 1" d="M-28,.5H0" transform="translate(0 5.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
                        <path data-name="Stroke 3" d="M0,0-5,6l5,6" transform="translate(-23)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
                    </g>
                </g>
            </g>
        </svg>

        <span  class="group-hover:underline">Go to Top</span>
    </a>
</div>
    <div class="absolute bottom-[-1px] left-0 w-full leading-none -z-50 overflow-hidden">        
        <svg class="z-0 h-[25px] md:h-[100px] lg:h-[200px] w-full block" viewBox="0 0 1200 113" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none">
            <path d="M600,105.77 C379.086667,105.77 179.086667,70.59 0,0.23 L0,113 L1200,113 L1200,0.23 C1020.91333,70.59 820.913333,105.77 600,105.77 Z" id="Path" class="fill-current text-red-500 z-0"></path>    
        </svg>
    </div>
</div>



<?php include ('parts/team-footer.php') ?>

<?php get_footer(); ?>