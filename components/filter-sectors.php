<?php
$sectors = ['founder-&-chairman', 'chief-executive-officier', 'managing-director', 'chief-financial'];
?>

<form action="/home" method="GET" class="">

    <select class="eq-form-select mt-3 p-0">

        <option value="all">All</option>

        <?php foreach ($sectors as $sector) : ?>
            <option value="<?php echo $sector; ?>">
                <?php echo ucwords(str_replace('-', ' ', $sector)); ?>
            </option>
        <?php endforeach; ?>
    </select>
</form>