<?php get_header(); ?>











<div class="banner text-center py-10">
        <div class="container">
            <h1 class="text-[5rem] font-extrabold my-8">THE BLOG</h1>
            <div class="bannerWrapper text-left lg:grid lg:grid-cols-[_2fr_1fr] lg:gap-10">

        <div>
            <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
            );
                $newQuery = new WP_Query($args)
            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
            
                <div class="blogitem mb-10">
                    <h2 class="text-[2rem] font-bold"><?php the_title() ?></h2>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <!-- <img class="border my-8 w-full"
                        src="https://img.freepik.com/free-photo/morning-dew_181624-306.jpg?size=626&ext=jpg&ga=GA1.1.1413502914.1696723200&semt=ais"
                        alt=""> -->
                    
                        <?php 
                            if (has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                        ?>
                    <ul class="flex gap-4 mb-4">
                        <li>Lorem.</li>
                        <li>Lorem.</li>
                        <li>Lorem.</li>
                    </ul>
                    <p class="mb-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est facere laudantium
                        porro ipsum fuga fugiat, maiores debitis corporis ipsam ipsa.</p>
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
                

                <div>
                    <h2 class="text-[1.5rem] font-bold mb-[70px]">Related Post</h2>
                    <div class="relatedPostItem ">

                        <div class="postTitle flex gap-6 mb-4">
                            <img class="w-[150px] h-[100px] border"
                                src="https://img1.wallspic.com/crops/7/6/9/2/7/172967/172967-leaf-green-dark_green-dark_green_leaves-plant-4000x6000.jpg"
                                alt="">
                            <h3> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, dicta.</h3>
                        </div>
                        <div class="postTitle flex gap-6 mb-4">
                            <img class="w-[150px] h-[100px] border"
                                src="https://img1.wallspic.com/crops/7/6/9/2/7/172967/172967-leaf-green-dark_green-dark_green_leaves-plant-4000x6000.jpg"
                                alt="">
                            <h3> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, dicta.</h3>
                        </div>
                        <div class="postTitle flex gap-6 mb-4">
                            <img class="w-[150px] h-[100px] border"
                                src="https://img1.wallspic.com/crops/7/6/9/2/7/172967/172967-leaf-green-dark_green-dark_green_leaves-plant-4000x6000.jpg"
                                alt="">
                            <h3> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, dicta.</h3>
                        </div>
                        <div class="postTitle flex gap-6 mb-4">
                            <img class="w-[150px] h-[100px] border"
                                src="https://img1.wallspic.com/crops/7/6/9/2/7/172967/172967-leaf-green-dark_green-dark_green_leaves-plant-4000x6000.jpg"
                                alt="">
                            <h3> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, dicta.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="recent py-10">
        <div class="container">
            <div class="title text-center text-[2rem] font-bold mb-20">Recent Blog</div>
            <div class="recentWrapper lg:grid lg:grid-cols-3 lg:gap-6">
                <div class="recentIt mb-8">
                    <img class="mb-6" src="https://philnews.ph/wp-content/uploads/2023/10/mekus-mekus-meaning.jpg"
                        alt="">
                    <p class="mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. In pariatur, ea a fugiat
                        neque
                        praesentium deserunt saepe reiciendis omnis similique labore quod eligendi earum ratione quis
                        soluta odio veritatis dolorem!</p>
                    <a class="inline-block bg-gray-600 py-2 px-6 rounded-full" href="#">Lear More</a>
                </div>
                <div class="recentIt mb-8">
                    <img class="mb-6" src="https://philnews.ph/wp-content/uploads/2023/10/mekus-mekus-meaning.jpg"
                        alt="">
                    <p class="mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. In pariatur, ea a fugiat
                        neque
                        praesentium deserunt saepe reiciendis omnis similique labore quod eligendi earum ratione quis
                        soluta odio veritatis dolorem!</p>
                    <a class="inline-block bg-gray-600 py-2 px-6 rounded-full" href="#">Lear More</a>
                </div>
                <div class="recentIt mb-8">
                    <img class="mb-6" src="https://philnews.ph/wp-content/uploads/2023/10/mekus-mekus-meaning.jpg"
                        alt="">
                    <p class="mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. In pariatur, ea a fugiat
                        neque
                        praesentium deserunt saepe reiciendis omnis similique labore quod eligendi earum ratione quis
                        soluta odio veritatis dolorem!</p>
                    <a class="inline-block bg-gray-600 py-2 px-6 rounded-full" href="#">Lear More</a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>

