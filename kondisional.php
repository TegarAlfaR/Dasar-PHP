<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $suhu = 30;

    if ($suhu > 30) {
        echo "panas";
    } else {
        echo "dingin";
    }

    $angka = 1;
    echo "<br>";
    switch ($angka) {
        case 1:
            echo "merah";
            break;
        case 2:
            echo "kuning";
            break;
        case 3:
            echo "hijau";
            break;
        default:
            echo "warna warni";
            break;
    }
    ?>
</body>

</html>