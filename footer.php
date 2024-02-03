</div>
</div>

<footer class="footer">
    <div class="footer__container">
        <?php $footer_logo = get_field('logo_splitted', 'options');
        if ($footer_logo) : ?>
            <div class="footer__logo-container">
                <?php if (is_front_page()) : ?>
                    <div class="footer__logo-icon">
                        <img class="footer__logo footer__logo_0" src="<?= $footer_logo['logo_initial_state']['sizes']['medium'] ?>" alt="" width="144" height="28">
                        <?php if ($footer_logo['logo_first']) : ?>
                            <img class="footer__logo footer__logo_1 not-opaque" src="<?= $footer_logo['logo_first']['sizes']['medium'] ?>" alt="" width="144" height="28">
                        <?php endif; ?>
                        <?php if ($footer_logo['logo_second']) : ?>
                            <img class="footer__logo footer__logo_2 not-opaque" src="<?= $footer_logo['logo_second']['sizes']['medium'] ?>" alt="" width="144" height="28">
                        <?php endif; ?>
                        <?php if ($footer_logo['logo_third']) : ?>
                            <img class="footer__logo footer__logo_3 not-opaque" src="<?= $footer_logo['logo_third']['sizes']['medium'] ?>" alt="" width="144" height="28">
                        <?php endif; ?>
                    </div>
                    <?php if ($footer_logo['logo_text']) : ?>
                        <img src="<?= $footer_logo['logo_text']['sizes']['medium'] ?>" alt="" class="footer__logo-text">
                    <?php endif; ?>
                <?php else : ?>
                    <a href="<?= get_home_url() ?>" class="footer__logo-wrap">
                        <div class="footer__logo-icon">
                            <img class="footer__logo footer__logo_0" src="<?= $footer_logo['logo_initial_state']['sizes']['medium'] ?>" alt="" width="144" height="28">
                            <?php if ($footer_logo['logo_first']) : ?>
                                <img class="footer__logo footer__logo_1 not-opaque" src="<?= $footer_logo['logo_first']['sizes']['medium'] ?>" alt="" width="144" height="28">
                            <?php endif; ?>
                            <?php if ($footer_logo['logo_second']) : ?>
                                <img class="footer__logo footer__logo_2 not-opaque" src="<?= $footer_logo['logo_second']['sizes']['medium'] ?>" alt="" width="144" height="28">
                            <?php endif; ?>
                            <?php if ($footer_logo['logo_third']) : ?>
                                <img class="footer__logo footer__logo_3 not-opaque" src="<?= $footer_logo['logo_third']['sizes']['medium'] ?>" alt="" width="144" height="28">
                            <?php endif; ?>
                        </div>
                        <?php if ($footer_logo['logo_text']) : ?>
                            <img src="<?= $footer_logo['logo_text']['sizes']['medium'] ?>" alt="" class="footer__logo-text">
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="footer__bottom-side">
            <?php $footer_connect = get_field('footer_connect', 'options');
            if ($footer_connect) : ?>
                <span class="footer__connect popup-open-button end-square font-h5">
                    <span><?= $footer_connect; ?></span>
                </span>
            <?php endif; ?>
            <?php $footer_copyright = get_field('footer_copyright', 'options');
            if ($footer_copyright) : ?>
                <span class="footer__copyright font-tu">© <?php echo date('Y'); ?> <?= $footer_copyright; ?></span>
            <?php endif; ?>
            <a class="footer__credits" target="_blank" href="https://dl.agency/">
                <?= get_field('footer_credentials', 'options'); ?>
                DL Agency
            </a>
        </div>
    </div>
</footer>

<div class="popup closed">
    <div class="side-padding-container">
        <button class="popup__close">
            <div class="popup__close-symbol"></div>
            <span class="popup__close-text font-h5"><?= get_field('popup_close_button', 'options'); ?></span>
        </button>
        <div class="popup-wrappers">
            <div class="popup__content-wrapper">
                <div class="popup__content">
                    <?php
                    $formShortcode = get_field('popup_form_shortcode', 'options');
                    ?>
                    <?= do_shortcode($formShortcode) ?>
                </div>
                <span class="popup__animation-line popup__animation-line_1"></span>
                <span class="popup__animation-line popup__animation-line_2"></span>
                <span class="popup__animation-line popup__animation-line_3"></span>
            </div>
            <div class="popup__success-wrapper">
                <div class="popup__success">
                    <?php $popupSuccess = get_field('popup_success_screen', 'options'); ?>
                    <?php if ($popupSuccess['title']) : ?>
                        <h2 class="popup__success-title section-title"><?= $popupSuccess['title'] ?></h2>
                    <?php endif; ?>
                    <?php if ($popupSuccess['message']) : ?>
                        <p class="popup__success-text"><?= $popupSuccess['message'] ?></p>
                    <?php endif; ?>
                    <?php if ($popupSuccess['button']) : ?>
                        <button class="popup__success-button font-h5 end-square"><?= $popupSuccess['button'] ?></button>
                    <?php endif; ?>
                </div>
                <span class="popup__animation-line popup__animation-line_1"></span>
                <span class="popup__animation-line popup__animation-line_2"></span>
                <span class="popup__animation-line popup__animation-line_3"></span>
            </div>
        </div>
    </div>
</div>

</main>

<?php wp_footer(); ?>


</body>

</html>