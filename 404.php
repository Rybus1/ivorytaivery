<?php get_header();
?>

<div class="side-padding-container">
    <section class="fof">
        <div class="fof__number">
            <img class="fof__digits" src="<?= get_stylesheet_directory_uri(); ?>/build/static/images/general/fof.png" alt="">
        </div>

        <?php $fof_title_regular = get_field('fof_title_regular', 'options');
        if ($fof_title_regular) : ?>
            <h1 class="fof__title">
                <?= $fof_title_regular; ?>
                <?php $fof_title_italic = get_field('fof_title_italic', 'options');
                if ($fof_title_italic) : ?>
                    <span class="italic"><?= $fof_title_italic; ?></span>
                <?php endif; ?>
            </h1>
        <?php endif; ?>

        <?php $fof_text = get_field('fof_text', 'options');
        if ($fof_text) : ?>
            <p class="fof__text font-tu"><?= $fof_text; ?></p>
        <?php endif; ?>

        <?php $fof_home_link = get_field('fof_home_link', 'options');
        if ($fof_home_link) : ?>
            <a href="<?= home_url(); ?>" class="fof__link end-square font-h5"><span><?= $fof_home_link; ?></span></a>
        <?php endif; ?>
    </section>
</div>

<?php
get_footer(); ?>