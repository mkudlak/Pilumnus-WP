<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package base
 */

get_header();
?>
<!-- Section Header-->
<div class="header">
    <div class="header-border">
        <p>Lorem Ipsum</p>
        <div class="border-under"></div>
        <h1>Travel</h1>
        <p>The inspirational adventure around the world</p>
    </div>
</div>
<!-- Section About-->
<section class="about padding-margin">
    <div class="rectangle"></div>
    <div class="about-info">
        <h2>About me</h2>
        <div class="border-under"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. </p>
        <br>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident. </p>
        <button type="button" class="btn btn-gold">Read More</button>
    </div>
    <div class="about-image img">
    </div>
</section>
<!-- Section Articles-->
<section class="articles padding-margin">
    <div class="art-title">
        <h2>Latest articles</h2>
        <div class="border-under"></div>
    </div>
    <div class="articles-container">
        <div class="art-image-1 art"></div>
        <div class="art-background-1 img"></div>
        <div class="art-info-1">
            <h3>Lorem Ipsum Dolor</h3>
            <div class="border-under"></div>
            <p>Qui consectetur consectetur qui aliqua pariatur qui velit occaecat mollit laborum. Duis do Lorem
                excepteur reprehenderit cupidatat deserunt. Cillum non consequat dolor in commodo voluptate est est
                proident reprehenderit culpa.</p>
            <br>
            <button type="button" class="btn btn-gold">Read More<i class="fa fa-angle-right"></i></button>
        </div>
        <div class="art-image-2 art"></div>
        <div class="art-background-2 img"></div>
        <div class="art-info-2">
            <h3>Lorem Ipsum Dolor</h3>
            <div class="border-under"></div>
            <p>Qui consectetur consectetur qui aliqua pariatur qui velit occaecat mollit laborum. Duis do Lorem
                excepteur reprehenderit cupidatat deserunt. Cillum non consequat dolor in commodo voluptate est est
                proident reprehenderit culpa. </p>
            <br>
            <button type="button" class="btn btn-gold">Read More<i class="fa fa-angle-right"></i></button>
        </div>
        <div class="art-image-3 art"></div>
        <div class="art-background-3 img"></div>
        <div class="art-info-3">
            <h3>Lorem Ipsum Dolor</h3>
            <div class="border-under"></div>
            <p>Qui consectetur consectetur qui aliqua pariatur qui velit occaecat mollit laborum. Duis do Lorem
                excepteur reprehenderit cupidatat deserunt. Cillum non consequat dolor in commodo voluptate est est
                proident reprehenderit culpa. </p>
            <br>
            <button type="button" class="btn btn-gold">Read More<i class="fa fa-angle-right"></i></button>
        </div>
    </div>
</section>
<!-- Section Gallery-->
<section class="gallery padding-margin">
    <div class="gallery-title">
        <h2>Gallery</h1>
        <div class="border-under"></div>
    </div>
    <div class="grid-container">
        <div class="img-1 img"></div>
        <div class="img-2 img"></div>
        <div class="img-3 img"></div>
        <div class="img-4 img"></div>
        <div class="img-5 img"></div>
        <div class="img-6 img"></div>
        <div class="img-7 img"></div>
    </div>
    <br>
    <button type="button" class="btn btn-gold">Show More</button>
</section>
<!-- Section Contact-->
<section class="contact padding-margin">
    <div class="rectangle"></div>
    <div class="contact-image"></div>
    <div class="contact-info">
        <h2>Contact</h2>
        <div class="border-under"></div>
        <form>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Your name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Your email">
                </div>
            </div>
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </form>
        <button type="button" class="btn btn-gold">Send Message</button>
    </div>
</section>
<!-- Section Footer Follow-->
<section class="follow padding-margin">
    <div class="container">
        <div class="social-media">
            <button type="button" class="icon-btn facebook">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </button>
        </div>
        <div class="social-media">
            <button type="button" class="icon-btn youtube">
                <i class="fa fa-youtube" aria-hidden="true"></i>
            </button>
        </div>
        <div class="social-media">
            <button type="button" class="icon-btn twitter">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </button>
        </div>
        <div class="social-media">
            <button type="button" class="icon-btn pinterest">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
            </button>
        </div>
        <div class="social-media">
            <button type="button" class="icon-btn instagram">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </button>
        </div>
    </div>
</section>

<?php
get_footer();