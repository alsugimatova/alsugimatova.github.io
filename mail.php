<?php 
//Принимаем постовые данные
$userName=$_POST['userName'];
$useEmail=$_POST['userEmail'];
$user_message=$_POST['user_message'];
//Тут указываем на какой ящик посылать письмо
$to = "alsugimatova@yandex.ru";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($userName)."<br />
Email: ".htmlspecialchars($userEmail)."<br />
Сообщение: ".htmlspecialchars($user_message);

// Отправляем письмо при помощи функции mail();
$headers = "From: alsugimatova.github.io \r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
 ?>