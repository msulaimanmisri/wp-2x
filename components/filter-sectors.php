<?php
$sectors = ['managing-director', 'director', 'senior-associate', 'senior-analyst', 'analyst', 'senior-advisor'];
?>

<form action="/home"
    method="GET"
    class="">

    <select class="eq-form-select mt-3 p-0">
        <?php foreach ($sectors as $sector): ?>
        <option value="<?php echo $sector; ?>">
            <?php echo ucwords(str_replace('-', ' ', $sector)); ?>
        </option>
        <?php endforeach;?>
    </select>
</form>