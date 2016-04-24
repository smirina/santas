<?php
$receiver  = "v@vforvova.ru";

$type = $_POST['type'];

if ($type == 'buy') {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $art = $_POST['art'];

  $subject = $name." желает купить фигуру";
  $message = "
  $name желает купить фигуру с артикулом $art.

  $name ожидает связи в течение 20-ти минут по номеру $phone
  ";

} elseif ($type == 'catalog') {
  $email = $_POST['email'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];

  $subject = $name." запрашивает каталог с ценами";
  $message = "
  $name запрашивает каталог с ценами.
  Ответьте письмом на  $email или позвоните по номеру $phone.
  ";
}

mail($receiver, $subject, $message);
header('Location: index.html');
exit();

?>
