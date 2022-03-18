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
<div id="site-main" class="page-has-frame">
  <div class="wrapper wrapper-main">
    <main id="site-content" class="site-main" role="main">
      <div class="site-content-wrapper <?php $additional_classes ?>">
        <h1 class="title-page">Sermons List</h1>
        <p>Use these controls to filter the list:</p>


