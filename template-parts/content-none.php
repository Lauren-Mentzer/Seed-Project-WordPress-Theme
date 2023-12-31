<?php
 if ( is_home() && current_user_can( 'publish_posts' ) ) {

   printf(
 		'<p>' . wp_kses(
 			__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'seed-project' ),
 			array(
 				'a' => array(
 					'href' => array(),
 				),
 			)
 		) . '</p>',
 		esc_url( admin_url( 'post-new.php' ) )
 	);

 } else {
?>

<div class="search-results-none">
  <h2><?php esc_html_e( 'Not Found', 'seed-project' ); ?></h2>
  <p><?php esc_html_e( 'The content you are looking for is no longer available.', 'seed-project' ); ?></p>
</div>

<?php
  get_search_form();
}
?>