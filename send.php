<?php
$name = $_POST['name'];
$itemName = $_POST['item-name'];
$phone = $_POST['phone'];
$res = mail($_POST["email"], "info@steaddy.ru", "$name, cпасибо за покупку.\nВы заказали: $itemName.\nВаш номер телефона: $phone.");
echo $_POST["email"];
?>