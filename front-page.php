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
<!-- Section -->
    <div class="section">
        <div class="container section-padding">
            <?php
            $tf_content = get_post_field('post_content', x);
            $tf_content = apply_filters('the_content', $tf_content);
            echo $tf_content;
            ?>
        </div>
    </div>
    <h1>Test</h1>
    <button class="btn btn-gold">Read More</button>
    <div class="alert alert-primary" role="alert">By sprawdzic czy bootstrap działa!</div>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>

    <button type="button" class="btn btn-link">Link</button>
<?php
get_footer();
