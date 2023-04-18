<?php
get_header();
//echo 'page.php';
?>

<?php
if (have_posts()) {
    while (have_posts()) {
        echo '<div class="card room">';
        the_post();
        the_title('<h2 class="ml3">', '</h2>');
        echo '<div class="roomType fd contactCard">';
        echo '<hr>';
        the_content(); //Pulls all the page content
        //the_excerpt(); //顯示帖子摘錄。
        // the_permalink();
        //echo '<a href="' . get_the_permalink() . '">Read more</a>';
        echo '</div>';
        echo '</div>';
    }
}
?>

<?php get_footer(); ?>