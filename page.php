<?php
    get_header();
    get_template_part('template-parts/banner', 'title');
?>
<div class="content-area">
    <div class="container">
        <div class="row">
            <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
            ?>
            <div class="col-md-10 offset-md-1 overflow-hidden">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_content() ?>
                </article>
            </div>
            <?php
                    }
                } else {
                    get_template_part('template-parts/content', 'none');
                }
            ?>
        </div>
    </div>
</div>
<?php
    get_footer();
?>