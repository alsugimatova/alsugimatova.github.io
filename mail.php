<?php$userName=$_POST['userName'];
$useEmail=$_POST['userEmail'];
$user_message=$_POST['user_message'];
$to="alsugimatova@yandex.ru";
$subject="Заявка";
$message="
Имя пользователя: ".htmlspecialchars($userName)."<br />
Email: ".htmlspecialchars($userEmail)."<br />
Сообщение: ".htmlspecialchars($user_message);
$headers="From: alsugimatova.github.io \r\nContent-type: text/html; charset=UTF-8 \r\n";
mail($to,$subject,$message,$headers);
header('Location: thanks.html');
exit();
?>