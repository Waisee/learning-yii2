<?php foreach ($list as $item):
    ?>
    <h3>
        <?php echo $item['name']; ?>
    </h3>
    <p><?php echo $item['salary']; ?></p>

    <hr>

<?php endforeach; ?>
