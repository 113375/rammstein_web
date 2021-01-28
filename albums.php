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
    $j = 0;
    while (($line = fgets($data)) !== false) {

        $all_data[$j] = explode(";", $line);
        $j++;
    }
    ?>
    <?php for ($i = 0;
               $i < $j;
               $i += 2): ?>
        <!--    Тут вот идет заполнение сайта всеми альбомами группы, чтобы не делать это автоматически, я делаю это через php-->
        <div class="img_and_text">
            <div class="image">
                <p><?= $all_data[$i][1] ?></p>
                <a href="about_album.php?album=<?= $i + 1 ?>"><img src="<?= $all_data[$i][4] ?>" alt=""></a></div>
            <div class="image">
                <p><?= $all_data[$i + 1][1] ?></p>
                <a href="about_album.php?album=<?= $i + 2 ?>"><img src="<?= $all_data[$i + 1][4] ?>" alt=""></a></div>
        </div>


    <?php endfor; ?>
    <?php include("footer.php") ?>
</div>
</body>
</html>