<?php
/**
 * @package gutenberg-starter
 * @since 0.0.1
 */
get_header();
?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            while ( have_posts() ) :
                the_post();
            endwhile;
            ?>

        </main>
	</section>

<?php
get_footer();
