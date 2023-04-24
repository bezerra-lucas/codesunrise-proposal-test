<?php
/**
* Template Name: Home Page
*
* @package iwn_website
*/

get_header();

get_template_part('pages/modules/home', 'hero');

?>
        <?php the_field('main_text'); ?>

<?php
    get_footer();
?>