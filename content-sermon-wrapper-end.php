<?php
/**
 * Overrides Sermon Manager file `views/partials/content-sermon-manager-end.php`
 *
 * Applies wrapper elements for theme compatibility.
 *
*/

defined( 'ABSPATH' ) or exit;
?>
      </main><!-- #site-content -->
<?php
if ( ! apply_filters( 'sm_disable_sidebar', false ) ) {
  get_sidebar();
}
?>
  </div><!-- .wrapper .wrapper-main -->
</div><!-- #site-main -->


