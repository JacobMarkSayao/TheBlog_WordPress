<?php
/**
* Template Name: Contact
*/
?>

<?php get_header(); ?>

<div class="contact">
    <div class="container">
        <div class="logo text-3xl font-bold">
            Contact Me
        </div>

        <div class="contactWrapper grid grid-cols-2 gap-5 py-3">
            <div class="contactDetails grid place-items-center [&>ul>li]:flex [&>ul>li]:gap-2 [&>ul>li]:mb-6 [&>ul>li]:item-center" >
                <ul class="text-xl">
                    <li>
                        <p>
                        <i class="fa-solid fa-phone"></i>
                        </p>
                        <p>
                            +63-945-208-2657
                        </p>
                    </li>
                    <li>
                        <p>
                        <i class="fa-solid fa-envelope"></i>
                        </p>
                        <p>
                            sayaomarkisrael@gmail.com
                        </p>
                    </li>
                </ul>
            </div>

            <div class="contactForm">
                <!-- <form action="">

                <div class="inputGroup">
                    <label for="">Name</label> <br>
                    <input type="text" name="" id="">
                </div>
                <div class="inputGroup">
                    <label for="">Email</label> <br>
                    <input type="text" name="" id="">
                </div>
                <div class="inputGroup">
                    <label for="">Subject</label> <br>
                    <input type="text" name="" id="">
                </div>
                <div class="inputGroup">
                    <label for="">Mobile Number</label> <br>
                    <input type="text" name="" id="">
                </div>
                <div class="inputGroup">
                    <label for="">Message</label> <br>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>

                <input class="bg-white text-black" type="submit" value="Send Message">

                </form> -->
                <?php echo do_shortcode('[contact-form-7 id="b24eccd" title="Contact form 1"]')
?>
            </div>


        </div>
    </div>


</div>

<?php get_footer(); ?>