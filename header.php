<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>


<body class="bg-black">
    <div class="header py-6 ">
        <div class="container">
            <div class="headerWrapper flex justify-between items-center border-b mb-4">
            <?php
                    if ( function_exists( 'the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                <a href="<?php echo home_url(); ?>">
                    <div class="logo text-3xl font-bold">

                </div>
                </a>
                <nav>
            <?php wp_nav_menu(); ?>
                </nav>
            </div>
        </div>
    </div>