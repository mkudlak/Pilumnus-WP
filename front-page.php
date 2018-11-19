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
<section class="header padding-margin">
    <div class="container center-text v-align">
        <div class="header-border">
            <p class="text-uppercase">Lorem Ipsum</p>
            <div class="border-under"></div>
            <h1>Travel</h1>
            <p class="text-uppercase">The inspirational adventures around the world</p>
        </div>
        <div class="border-hide"></div>
    </div>
</section>
<!-- Section About-->
<section class="about padding-margin">
    <div class="container-fluid">
        <div class="rectangle">
            <div class="row">
                <div class="col-md-6">
                    <h2>About me</h2>
                    <div class="border-under"></div>
                    <p>Ex nisi dolore et nostrud velit. Aliquip mollit incididunt cillum qui cillum occaecat cillum qui excepteur enim excepteur deserunt ex ullamco. In dolore nisi magna id. Ea incididunt esse ipsum ut proident anim mollit reprehenderit ad enim Lorem veniam.</p>
                    <br>
                    <p>Incididunt labore cillum sunt duis quis laborum ullamco mollit mollit. Anim Lorem in excepteur laborum nostrud officia anim laborum pariatur do incididunt ad irure.</p>
                    <button type="button" class="btn btn-gold">Read More</button>
                </div>
                <div class="col-md-6">
                    <div class="about-image img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Articles-->
<section class="articles padding-margin">
    <div class="container">
        <h2>Latest articles</h2>
        <div class="border-under"></div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="art-background img">
                    <div class="art art-image-1 img"></div>
                </div>
                <div class="art-info">
                    <h3>Lorem Ipsum Dolor</h3>
                    <div class="border-under"></div>
                    <br>
                    <p>Qui consectetur consectetur qui aliqua pariatur qui velit occaecat mollit laborum. Duis do Lorem excepteur reprehenderit cupidatat deserunt. Cillum non consequat dolor in commodo voluptate est est proident reprehenderit culpa.</p>
                    <br>
                    <button type="button" class="btn btn-gold">Read More<i class="fa fa-angle-right"></i></button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="art-background img">
                    <div class="art art-image-2 img"></div>
                </div>
                <h3>Lorem Ipsum Dolor</h3>
                <div class="border-under"></div>
                <br>
                <p>Qui consectetur consectetur qui aliqua pariatur qui velit occaecat mollit laborum. Duis do Lorem excepteur reprehenderit cupidatat deserunt. Cillum non consequat dolor in commodo voluptate est est proident reprehenderit culpa. </p>
                <br>
                <button type="button" class="btn btn-gold">Read More<i class="fa fa-angle-right"></i></button>
            </div>
            <div class="col-md-4">
                <div class="art-background img">
                    <div class="art art-image-3 img"></div>
                </div>
                <h3>Lorem Ipsum Dolor</h3>
                <div class="border-under"></div>
                <br>
                <p>Qui consectetur consectetur qui aliqua pariatur qui velit occaecat mollit laborum. Duis do Lorem excepteur reprehenderit cupidatat deserunt. Cillum non consequat dolor in commodo voluptate est est proident reprehenderit culpa.</p>
                <br>
                <button type="button" class="btn btn-gold">Read More<i class="fa fa-angle-right"></i></button>
            </div>
        </div>
    </div>
</section>
<!-- Section Gallery-->
<section class="gallery padding-margin">
    <div class="container">
        <h2>Gallery</h1>
        <div class="border-under"></div>
    </div>
    <div class="container-fluid">
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
    </div>
</section>
<!-- Section Contact-->
<section class="contact padding-margin">
    <div class="container-fluid">
        <div class="rectangle">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-image">
                    </div>
                </div>
                <div class="col-md-6">
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
            </div>
        </div>
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
<script type='text/javascript' src='../../animations.js'></script>
<?php
get_footer();