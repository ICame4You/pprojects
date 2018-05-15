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

var_dump($photo);
$photo_extension = explode('/', $photo['type']);
echo

/*if (!$surname || !$name || !$photo || !$birthday_day || !$birthday_month || !$birthday_year) {
    $check = false;
}

$birthday = mktime(0,0,0, $birthday_month, $birthday_day, $birthday_year);
$age18 = strtotime('-18 years');
if($birthday > $age18) {
  $check = false;
}

if( substr($url, 0, 7) != 'http://' && substr($url, 0, 8) != 'https://') {
    $check = false;
}*/

var_dump($check);

?>