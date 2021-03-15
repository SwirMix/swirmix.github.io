<?php

header('Access-Control-Allow-Origin: *');

$headers = "From: from@webhookservesite.ru";

$message = "";

foreach($_POST as $key => $value) {
  if($key == "Date") {
    $message .= "Дата выезда из гостиницы";
  } else {
    $message .= $key;
  }
  $message .= ": " . $value . "\n";
}

$message = print_r($message, true);

@mail('mix-swir@yandex.ru', 'Tilda TEST', $message, $headers);

echo "ok";

?>