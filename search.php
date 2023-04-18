<?php get_header(); ?>

<?php
if (have_posts()) {
    echo '<h2>Search results for &ldquo;' . $_GET['s'] . '&rdquo;</h2>';
    echo '<div class="card answer">';
    while (have_posts()) {

        the_post();

        echo '<div class="results">';
        the_title('<h2>', '</h2>');
        // the_date('', '<p class="date">Posted on ', '</p>');
        //the_content(); //Pulls all the page content
        the_excerpt();
        //the_permalink();
        echo '<a href="' . get_the_permalink() . '">Read more</a>';
        echo '</div>';
        echo '<hr class="results_hr">';
    }
    echo '</div>';
} else {
    echo '<h2>There is no results for "' . $_GET['s'] . '"</h2>';
}

?>
<?php get_footer(); ?>