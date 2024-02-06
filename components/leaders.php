<?php
$staffList = [];

/**
 * Create a Staff Object
 */
$staffOne = new stdClass();
$staffTwo = new stdClass();
$staffThree = new stdClass();
$staffFour = new stdClass();

/**
 * Add data to the staff
 */
$staffOne->name = 'Jean-Louis';
$staffOne->image = 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
$staffOne->position = 'managing-director';
$staffOne->location = 'asia-pasific';
$staffList[] = $staffOne;

$staffTwo->name = 'Sylvaine Masson';
$staffTwo->image = 'https://images.unsplash.com/photo-1548142813-c348350df52b?q=80&w=1289&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
$staffTwo->position = 'director';
$staffTwo->location = 'asia-pasific';
$staffList[] = $staffTwo;

$staffThree->name = 'Arum Nayak';
$staffThree->image = 'https://images.unsplash.com/photo-1583123810408-23e7b5d1af9f?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
$staffThree->position = 'director';
$staffThree->location = 'asia-pasific';
$staffList[] = $staffThree;

$staffFour->name = 'Xia Moa';
$staffFour->image = 'https://images.unsplash.com/photo-1628258473666-9d3149c1da55?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
$staffFour->position = 'vice-president';
$staffFour->location = 'asia-pasific';
$staffList[] = $staffFour;
?>

<div class="row">
    <?php foreach ($staffList as $key => $staff): ?>
    <div class="col text-center gap-3">
        <a href=""
            class="text-decoration-none text-dark">
            <img src="<?php echo $staff->image; ?>"
                alt="<?php echo $staff->name; ?>"
                class="rounded-circle"
                style="height: 210px; width: 200px;">

            <h4 class="mt-4"><?php echo $staff->name; ?></h4>
            <p class="mt-2"><?php echo ucwords(str_replace('-', ' ', $staff->position)); ?></p>
            <p class="mt-2 fst-italic"><?php echo ucwords(str_replace('-', ' ', $staff->location)); ?></p>
        </a>
    </div>
    <?php endforeach;?>
</div>