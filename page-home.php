<?php
// Template name: Front page
get_header();
?>

<div class="side-padding-container">
    
    <!-- PRELOADER -->

    <?php get_template_part('blocks/block-preloader'); ?>

    <!-- INTRO -->

    <?php get_template_part('blocks/block-intro'); ?>

    <!-- SEQUENCE -->

    <?php get_template_part('blocks/block-sequence'); 
    ?>

    <!-- FEATURES -->

    <?php get_template_part('blocks/block-features'); ?>

    <!-- CONTACT -->

    <?php get_template_part('blocks/block-contact'); ?>

    <!-- CASES -->

    <?php get_template_part('blocks/block-cases'); ?>

    <!-- FAQ -->

    <?php get_template_part('blocks/block-faq'); ?>

</div>

<?php
get_footer(); ?>