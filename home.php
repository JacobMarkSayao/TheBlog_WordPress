<?php get_header(); ?>

<!-- BANNER -->
    <section class="banner">
        <div class="banner__bg">
            <div class="container">
                <div class="banner__wrapper">
    <?php 
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2,
        );
        $newQuery = new WP_Query($args)
    ?>
    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                    <div class="banner__text">
                        <h1>Hi, I'm <span>M</span>ark</h1>
                        <h3>Front-End Web Developer</h3>
                        <p>A Front-End focused Web Developer building the interface of Websites that leads to the
                            success of the overall product.</p>
                        <a href="" class="btn">Hire Me</a>
                    </div>
                    <div class="banner__img">
                        <img src="./Img/img-home/me.png" alt="">
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
        </div>
    </section>
    <!-- ---------------------------------------------------------------- -->
    <!-- ABOUT -->
    <section class="about">
        <div class="container">
            <div class="about__wrapper">
                <div class="about__text">
                    <div class="top">
                        <a href=""></a>
                        <h2>About</h2>
                    </div>

                    <div class="buttom">
                        <h5>My Biography</h5>
                        <p>I am a passionate and dedicated web developer with a strong background in creating
                            interactive
                            and user-friendly websites. With a few months of experience in the field, I have honed my
                            skills
                            in web development and design to deliver high-quality digital solutions.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ---------------------------------------------------------------- -->
    <!-- SPECIALIZED -->
    <section class="specialized">
        <div class="container">
            <div class="specialized__wrapper">
                <div class="BnW__img">
                    <div class="figma">
                        <img src="./Img/img-home/figma - colored.png" alt="">
                    </div>
                    <div class="html">
                        <img src="./Img/img-home/html - colored.png" alt="">
                    </div>
                    <div class="css">
                        <img src="./Img/img-home/css - colored.png" alt="">
                    </div>
                </div>
                <div class="s__text">
                    <a href="">
                        <h2>Specialized</h2>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>