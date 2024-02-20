<?php
$user_name = htmlspecialchars($_POST['username']);
$user_phone = htmlspecialchars($_POST['userphone']);



$token = '7167519154:AAGS7SnPldbknOm7QGNS0Cy01-lKH1v_seE';
$chat_id = '-4179041500';
$formData = array(
  'Клиент: ' => $user_name,
  'Телефон: '=> $user_phone,

);

foreach ($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", 'r');

if ($sendToTelegram) {
  echo "Сообщение отправлено!";
} else {  
  echo "Ошибка отправки сообщения!";
}


