<?php
get_header();
?>
<div id="frontSider" class="scroll-animations">
    <?php
    dynamic_sidebar('front_siderBar');
    if (is_active_sidebar('front_siderBar')) {
        get_sidebar();
    }
    ?>
</div>
<?php
if (have_posts()) {
    while (have_posts()) {
        echo '<div class="card">';
        the_post();
        the_title('<h2 class="ml3">', '</h2>');
        the_content(); //Pulls all the page content
        //the_excerpt(); //顯示帖子摘錄。
        // the_permalink();
        // echo '<a href="' . get_the_permalink() . '">Read more</a>';
        echo '</div>';
    }
}
?>

<?php get_footer(); ?>