<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Альбомы</title>
</head>
<body>
<div class="container">
    <?php include("header.php");
    $data = fopen("data.txt", "r");
    $all_data = array();
    $i = 0;
    while (($line = fgets($data)) !== false) {

        $all_data[$i] = explode(";", $line);
        $i++;
    }
    function image($all_data, $i)
    {
        return (string)$all_data[$i][4];
    }

    print_r($all_data);
    ?>
    <?php for ($i = 0; $i < 2; $i++): ?>
        <div class="img_and_text">
            <img src=<?php image($all_data, $i) ?>."" alt="">
        </div>
    <?php endfor; ?>
</div>
</body>
</html>