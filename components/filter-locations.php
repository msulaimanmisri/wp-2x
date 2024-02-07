<?php
$locations = ['london', 'new-york', 'boston', 'asia-pacific']; ?>

<form action="/home" method="GET" class="ms-4">

    <select class="eq-form-select mt-3 p-0">
        <option value="all">All</option>
        <?php foreach ($locations as $location) : ?>
            <option value="<?php echo $location; ?>">
                <?php echo ucwords(str_replace('-', ' ', $location)); ?>
            </option>
        <?php endforeach; ?>
    </select>
</form>