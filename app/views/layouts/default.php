<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $this->getMeta(); ?>
</head>

<body>
    <h1>Шаблон default</h1>

    <?= $content; ?>
</body>

<?php
$logs = R::getDatabaseAdapter()
    ->getDatabase()
    ->getLogger();

print_r($logs->grep('SELECT'));
?>

</html>