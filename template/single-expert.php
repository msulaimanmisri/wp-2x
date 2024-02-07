<?php

/**
 * Template Name: 2x-single-expert
 * Template Post Type: expert, page
 */
get_header();

phpinfo();

$post_id = isset($_GET['expert_id']) ? intval($_GET['expert_id']) : 0;
$expert_post = get_post($post_id);

if ($expert_post) {
    // Paparkan data post 'expert'
    echo '<h1>' . get_the_title($expert_post) . '</h1>';
    echo '<div>' . apply_filters('the_content', $expert_post->post_content) . '</div>';
} else {
    echo '<p>Expert not found!</p>';
}

get_footer();
