<?php get_header(); ?>

<div class="banner text-center py-10">
        <div class="container">
            <h1 class="text-[5rem] font-extrabold my-8"><?php echo get_field('banner_text'); ?></h1>
            <div class="bannerWrapper text-left lg:grid lg:grid-cols-[_2fr_1fr] lg:gap-10">
        <div>
            <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
            );
                $newQuery = new WP_Query($args)
            ?>
            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
            
                <div class="blogitem mb-10">
                    <h2 class="text-[2rem] font-bold"><?php the_title() ?></h2>
                    <p><?php 
                    echo get_post_meta( get_the_ID(), 'subtitle', true); ?></p>
                    <!-- <img class="border my-8 w-full"
                        src="https://img.freepik.com/free-photo/morning-dew_181624-306.jpg?size=626&ext=jpg&ga=GA1.1.1413502914.1696723200&semt=ais"
                        alt=""> -->
                    
                        <?php 
                            if (has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                        ?>
                    <ul class="flex gap-4 mb-4">
                        <li><?php echo get_field('post_author'); ?></li>
                        <li><?php the_category(); ?></thead></li>
                        <li><?php the_date(); ?></li>
                    </ul>
                    <p class="mb-6"><?php the_excerpt(); ?></p>
                    <a class="blogBtn inline-block bg-gray-600 py-2 px-6 mt-6 rounded-full" href="<?php the_permalink(); ?>">Lear More</a>
                </div>
                <?php 
                endwhile;
                    else :
                        echo "no available content yet";
                endif;
                    wp_reset_postdata();
                ?>
            </div>
                
    <?php get_footer(); ?>