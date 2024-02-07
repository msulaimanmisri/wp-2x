<?php
get_header();

// Ambil ID post yang dipilih (mesti ditentukan mengikut cara yang sesuai, contohnya melalui URL)
$postId = isset($_GET['expert_id']) ? intval($_GET['expert_id']) : 0;
$expertPost = get_post($postId);

if ($expertPost) {
    // image
    $getImage = get_post_meta(get_the_ID(), 'profile_image', true);
    $imageUrl = wp_get_attachment_image_url($getImage, 'full');

    // Details
    $getExpertName = get_post_meta(get_the_ID(), 'profile_image', true);
    $getExpertPosition = get_post_meta(get_the_ID(), 'position', true);
}
?>

<div class="container my-5">
    <div class="back mb-4 mb-md-5" id="actAsBackButton">
        <i class="fa fa-caret-left align-bottom" style="font-size: 22px;" aria-hidden="true"></i> <a href="/"
            class="btn-outline-success text-uppercase px-0 ml-2">Back to team
        </a>
    </div>

    <div class="row">
        <div class="col-3">
            <img src="<?php echo $imageUrl; ?>" alt="" class="leader-img">
        </div>

        <div class="col">
            <h1><?php echo get_the_title($expertPost); ?></h1>
            <h3 class="my-3"><?php echo $getExpertPosition; ?></h3>
        </div>
    </div>
</div>
<?php get_footer(); ?>