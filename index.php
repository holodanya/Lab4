<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    $counterFile = "counter.txt";
    if (!file_exists($counterFile)) {
        $handle = fopen($counterFile, "w");
        fwrite($handle, "0");
        fclose($handle);
    }
    $handle = fopen($counterFile, "r");
    $visitCount = (int) fread($handle, filesize($counterFile));
    fclose($handle);
    $visitCount++;
    $handle = fopen($counterFile, "w");
    fwrite($handle, $visitCount);
    fclose($handle);
    echo "<h1>Кількість відвідувань сторінки: $visitCount</h1>";
    ?>

</body>

</html>