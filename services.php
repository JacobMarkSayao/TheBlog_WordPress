<?php
/**
* Template Name: Services
*/
?>

<?php get_header(); ?>




<section class="recent py-10">
        <div class="container">
            <div class="title text-center text-[2rem] font-bold mb-20"><?php echo get_field('banner_text')?></div>
            <div class="recentWrapper lg:grid lg:grid-cols-3 lg:gap-6">

            <?php 
                $args = array(
                    'post_type' => 'servicesPost',
                    'posts_per_page' => -1,
                );
                $newQuery = new WP_Query($args)
            ?>
            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

                <div class="recentIt mb-8">
                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail()?></a> 
                    <p class="mb-6"><?php the_excerpt(); ?></p>
                    <a class="inline-block bg-gray-600 py-2 px-6 rounded-full" href="#">Lear More</a>
                </div>

            <?php 
                    endwhile;
                        else :
                            echo "no available content yet";
                    endif;
                            wp_reset_postdata();
            ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>