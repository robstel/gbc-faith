<?php
/**
 * Archive wrapper, for theme compatibility.
 *
 * Overrides Sermon Manager views/partials/content-sermon-manager-end.php
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


