<?php
/**
 * Archive wrapper, for theme compatibility.
 *
 * Overrides Sermon Manager views/partials/content-sermon-manager-start.php
*/

defined( 'ABSPATH' ) or exit;

$template = get_option( 'template' );
$additional_classes = apply_filters( 'sm_templates_additional_classes', array(), $template );
$additional_classes = implode( ' ', $additional_classes );

?>
	<div id="ilovewp-hero" class="ilovewp-hero-blankfill">
	</div><!-- #ilovewp-hero -->
<div id="site-main" class="page-has-frame">
  <div class="wrapper wrapper-main">
    <main id="site-content" class="site-main" role="main">
      <div class="site-content-wrapper <?php $additional_classes ?>">


