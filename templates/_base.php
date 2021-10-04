<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="assets/styles/common.css">
    <?php foreach ($styles as $style) : ?>
        <link rel="stylesheet" href="assets/styles/<?=$style?>">
    <?php endforeach; ?>
    <link rel="icon" type="image/png" href="assets/images/favicon.png" />
</head>
<body>
    <?php require_once('_nav.php'); ?>

    <main>
    <?php require_once($page); ?>
    </main>

    <?php require_once('_footer.php'); ?>
</body>
</html>