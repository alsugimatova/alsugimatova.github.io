<?php 
//Принимаем постовые данные
$username=$_POST['username'];
$email=$_POST['email'];
$user_message=$_POST['user_message'];
//Тут указываем на какой ящик посылать письмо
$to = "daalsu@yandex.ru";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($username)."<br />
Email: ".htmlspecialchars($email)."<br />
Сообщение: ".htmlspecialchars($user_message);

// Отправляем письмо при помощи функции mail();
$headers = "From: alsugimatova.github.io \r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
 ?>