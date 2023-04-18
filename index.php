<?php get_header();
//echo "index.php";
// echo '<br>';
// $page = basename($_SERVER['PHP_SELF']);
// echo $page; //index.php     
?>


<h2 class="ml3"><?php wp_title(''); ?></h2>
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
            echo '<h3>';
            the_title('<a href="' . get_the_permalink() . '">', '</a>');
            echo '</h3>';

            echo '<article class="post">';
            echo '<div class="card_left">';
            // echo '<a href="' . get_the_permalink() . '">';
            the_post_thumbnail('thumbnail');
            //echo '</a>';
            echo '</div>';

            echo '<div class="card_right">';
            the_excerpt();
            // the_permalink();
            echo '<a href="' . get_the_permalink() . '">Read the full article</a>';

            // echo '<div class="author">'.get_avatar(get_the_author_meta('ID'),64) . '<a href="'.esc_url( get_author_posts_url( get_the_author_meta('ID') ) ).'"> By ' . get_the_author() . '</a>';

            echo '<div class="author_img">' . get_avatar(get_the_author_meta('ID'), 64);

            echo '<div class="author_info">';
            echo '<p>By ';
            the_author_posts_link();
            echo '</p>';

            echo '<p>';
            the_date();
            echo '</p>';
            echo '</div>';

            echo '</div>';
            echo '</div>';
            echo '</article>';
            echo '<hr class="post_hr">';
        }
        echo '</div>';
    }

    ?>
</div>

<?php get_footer(); ?>