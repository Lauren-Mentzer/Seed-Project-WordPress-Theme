<section class="title-banner">
    <div class="container">
        <div class="nav-row">
            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if (has_custom_logo()) {
                    echo '<a href="../"><img src="'. esc_url($logo[0]).'" alt="milford-band-logo"></a>';
                }
            ?>
        </div>
    </div>
    <div class="container col-md-8 offset-md-2">
        <div class="row title-row">
            <?php
                if (is_page() || is_single()) {
                    the_title('<h1 class="text-center">', '</h1>');
                } elseif (is_archive()) {
                    the_archive_title('<h1 class="text-center">', '</h1>');
                } elseif (is_404()) {
            ?>
                <div class="title-text col-md-9 d-flex flex-column justify-content-end">
                    <h3><?php esc_html_e('404 Error', 'seed-project'); ?></h3>
                    <h1><?php esc_html_e("Couldn't Be Found", 'seed-project'); ?></h1>
                </div>
            <?php
                } elseif (is_search()) {
                    $search_title = sprintf('%s %s', __('Search results for: ', 'seed-project'), get_search_query());
            ?>
                    <h1 class="text-center"><?php echo esc_html($search_title); ?></h1>
            <?php
                }
            ?>
        </div>
    </div>
</section>