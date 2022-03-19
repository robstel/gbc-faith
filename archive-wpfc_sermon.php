<?php // phpcs:ignore
/**
 * Template used for displaying sermon archive pages
 *
 * Overrides Sermon Manager file `views/archive-wpfc_sermon.php`
 */

get_header();

echo wpfc_get_partial( 'content-sermon-wrapper-start' );

?>
<h1 class="title-page">Sermons</h1>
        <p class="post-single">Sermon videos can be viewed on the sermon page and on our
          <a rel="noreferrer noopener" href="https://www.youtube.com/channel/UCG15-6djdNiIieWyRwLqoVA/videos"
          target="_blank">YouTube channel</a>.</p>
        <p class="post-single">Click a sermon title to go to the sermon page.</p>
        <p class="post-single">Use these controls to filter the list [<a class="gbc-clear-filters" href="/sermons/">clear</a>] :</p>
<?php

// Show the filters but exclude the topics filter
echo render_wpfc_sorting(array('hide_topics' => true));

if ( have_posts() ) :

	echo apply_filters( 'archive-wpfc_sermon-before-sermons', '' );

	while ( have_posts() ) :
		the_post();
		wpfc_sermon_excerpt_v2(); // You can edit the content of this function in `partials/content-sermon-archive.php`.
	endwhile;

	echo apply_filters( 'archive-wpfc_sermon-after-sermons', '' );

	echo '<div class="sm-pagination ast-pagination">';
	sm_pagination();
	echo '</div>';
else :
	echo __( 'Sorry, but there aren\'t any posts matching your query.' );
endif;
?>

<?php echo wpfc_get_partial( 'content-sermon-wrapper-end' ); ?>

<?php
get_footer();
