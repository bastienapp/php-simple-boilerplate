<?php if (!empty($errors)) : ?>
<h3>Error: </h3>
<ul>
    <?php foreach ($errors as $error) : ?>
    <li><?= $error ?></li>
    <?php endforeach; ?>
</ul>
<?php else : ?> 
<h3>Success: </h3>
<p>
    <li>Email: <?= $_POST['contact_email'] ?></li>
    <li>Object: <?= $_POST['contact_object'] ?></li>
    <li>Content: <?= $_POST['contact_content'] ?></li>
</p>
<?php endif; ?>