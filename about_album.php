<?php if (!$_GET['album']) {
    header("Location: index.php");
} ?>

<?php
$data = fopen("data.txt", "r");
$all_data = array();
$j = 0;
while (($line = fgets($data)) !== false) {

    $all_data[$j] = explode(";", $line);
    $j++;
}
$all_data = $all_data[$_GET['album'] - 1]; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">

    <link rel="stylesheet" href="/css/style.css">
    <title><?= $all_data[1] ?></title>
</head>
<body>
<div class="container">
    <?php include("header.php");

    $data = fopen("songs.txt", "r");
    $songs = array();
    $j = 0;
    while (($line = fgets($data)) !== false) {

        $songs[$j] = explode(";", $line);
        $j++;
    }
    $songs = $songs[$_GET['album'] - 1];
    ?>
    <div class="block">
        <div class="left">
            <p><?= $all_data[1] ?></p>
            <img src=<?= $all_data[4] ?> alt="image">
        </div>
        <div class="text_of_song">
            <p>Песни альбома</p>
            <ul>
                <?php foreach ($songs as $song): ?>
                    <li><?= $song ?></li>
                <?php endforeach; ?>
            </ul>
            <span>Дата выхода: <?= $all_data[2] ?></span>
        </div>
    </div>

    <div class="discribe">
        <p><?= $all_data[3] ?></p>
    </div>
    <?php include("footer.php") ?>

</div>


</body>
</html>

