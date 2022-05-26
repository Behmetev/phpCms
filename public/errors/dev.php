<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>

<body>
    <div class="wrap">
        <h1>Произошла ошибка</h1>
        <p><b>Код ошибки:</b> <?= $errNo ?></p>
        <p><b>Текст ошибки:</b> <?= $errStr ?></p>
        <p><b>Файл, в котором произошла ошибка:</b> <?= $file ?></p>
        <p><b>Строка, в которой произошла ошибка:</b> <?= $errLine ?></p>
    </div>
    <div class="footer">
    </div>
</body>

</html>