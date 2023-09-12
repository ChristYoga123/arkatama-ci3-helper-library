<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Helper bilangan bulat ke romawi</h1>
    <p><?= $bilangan1 ?> => <?= $intToRom1 ?></p>
    <p><?= $bilangan2 ?> => <?= $intToRom2 ?></p>

    <br>

    <h1>Helper romawi ke bilangan bulat</h1>
    <p><?= $romawi1 ?> => <?= $romToInt1 ?></p>
    <p><?= $romawi2 ?> => <?= $romToInt2 ?></p>

    <br>

    <h1>Library DateFormat</h1>
    <p><?= $tanggal1 ?></p>
    <p><?= $tanggal2 ?></p>
</body>
</html>