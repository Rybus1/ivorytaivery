<?php 
function hide_show_adminpanel()
{

    ?>
<style>
  #wpadminbar {
    /* TEMPORARY FOR DEV */
    /* display: none !important; */
    top: -32px;
    transition: all .2s linear;
    opacity: 0;
    visibility: hidden;
  }

  #wpadminbar.show {
    top: 0;
    opacity: 1;
    visibility: visible;
  }

  html {
    margin-top: 0 !important;
  }
</style>
<script>
  window.onload = function () {
    document.addEventListener('mousemove', function (e) {
      var Y = e.clientY;

      if (Y <= 32) {
        document.querySelector('#wpadminbar').classList.add('show');
      } else {
        document.querySelector('#wpadminbar').classList.remove('show');
      }
    });
  }
</script>
<?php
}

if (is_user_logged_in()) :
    // add_action('wp_footer', 'hide_show_adminpanel');
endif;

// Remove auto p from Contact Form 7 shortcode output
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
}