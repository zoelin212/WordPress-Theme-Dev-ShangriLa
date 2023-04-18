<!-- single post page -->
<?php get_header();
//echo "single.php";
?>


<!-- <h2><?php wp_title(''); ?></h2> -->
<div class="flex">
    <?php
    echo '<div class="widgetBox">';
    dynamic_sidebar('news_siderBar');
    if (is_active_sidebar('news_siderBar')) {
        get_sidebar();
    }
    echo '</div>';
    ?>
    <?php
    if (have_posts()) {
        echo '<div class="card">';
        while (have_posts()) {

            the_post();
            the_title('<h2 class="ml3">', '</h2>');

            echo '<div class="post_info">';
            echo '<p class="author">By ' . get_the_author() . '</p>';
            echo '<hr>';
            the_date('', '<p class="date">Posted on ', '</p>');
            echo '</div>';

            echo '<div class="post_p">';
            the_content();
            echo '<hr>';
            comments_template();
            echo '</div>';
        }
        echo '</div>';
    }

    ?>
</div>

<?php get_footer(); ?>