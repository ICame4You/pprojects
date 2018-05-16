<?php

$check = true;

$surname = $_POST['surname'];
$name = $_POST['name'];
$second_name = $_POST['second_name'];
$photo = $_FILES['photo'];
$birthday_day = $_POST['birthday_day'];
$birthday_month = $_POST['birthday_month'];
$birthday_year = $_POST['birthday_year'];
$url = $_POST['url'];
$description = $_POST['description'];

$photo_extension = explode('/', $photo['type']);

if (!$surname || !$name || !$photo || !$birthday_day || !$birthday_month || !$birthday_year) {
    $check = false;
    header('Location: index.php?error_id=1');
    exit;
}

$birthday = mktime(0,0,0, $birthday_month, $birthday_day, $birthday_year);
$age18 = strtotime('-18 years');
if($birthday > $age18) {
  $check = false;
    header('Location: index.php?error_id2');
    exit;
}

if($url && substr($url, 0, 7) != 'http://' && substr($url, 0, 8) != 'https://') {
    $check = false;
    header('Location: index.php?error_id3');
    exit;
}

if ($photo_extension[1] != 'jpeg' && $photo_extension[1] != 'png' && $photo_extension[1] != 'gif') {
    $check = false;
    header('Location: index.php?error_id4');
    exit;
}

if ($photo['size'] > 200 * 1024) {
    $check = false;
    header('Location: index.php?error_id5');
    exit;
}

var_dump($check);

?>