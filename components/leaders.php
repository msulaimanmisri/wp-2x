<?php
$getExpertPostType = [
    'post_type' => 'expert',
    'post_status' => 'publish',
    'orderby' => 'post_date',
    'order'  => 'ASC'
];
$query = new WP_Query($getExpertPostType);

/**
 * Stop the WP loop
 */
wp_reset_postdata();
?>

<div class="row">
    <?php while ($query->have_posts()) : ?>
    <?php $query->the_post(); ?>
    <?php $expertName = get_the_title(); ?>
    <?php $position = get_post_meta(get_the_ID(), 'position', true); ?>
    <?php $location = get_post_meta(get_the_ID(), 'location', true); ?>

    <!-- Image -->
    <?php $getImage = get_post_meta(get_the_ID(), 'profile_image', true); ?>
    <?php $imageUrl = wp_get_attachment_image_url($getImage, 'full'); ?>

    <!-- Social Media -->
    <?php $linkedIn = get_post_meta(get_the_ID(), 'linkedin', true); ?>
    <?php $phoneNumber = get_post_meta(get_the_ID(), 'contact_no', true); ?>
    <?php $email = get_post_meta(get_the_ID(), 'email', true); ?>

    <div class="col-6 col-md-3 p-5 text-center expert-col" data-name="<?php echo strtolower($expertName); ?>"
        data-position="<?php echo strtolower(str_replace(' ', '-', $expertName)); ?>"
        data-location="<?php echo implode(', ', $location); ?>">

        <a href="<?php echo "/team/" . strtolower(str_replace(' ', '-', $expertName)); ?>"
            class="text-decoration-none text-dark">
            <img src="<?php echo $imageUrl; ?>" class="leader-img" alt="">
            <h3 class="my-3"><?php echo $expertName; ?></h3>
            <p class="my-3"><?php echo $position; ?></p>

            <div class="px-2 text-center">
                <div class="card-footer social ">
                    <a href="mailto:<?php echo $email; ?>" class="text-decoration-none text-dark">
                        <i class="fa fa-envelope"></i>
                    </a>

                    <a href="tel:<?php echo $phoneNumber; ?>" class="text-decoration-none text-dark">
                        <i class="fa fa-phone"></i>
                    </a>

                    <a href="<?php echo $linkedIn; ?>" class="text-decoration-none text-dark">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </a>
    </div>
    <?php endwhile; ?>
</div>