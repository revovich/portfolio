	
<meta http-equiv='refresh' content='10; url=https://revovich.github.io/portfolio/'>
<meta charset="UTF-8" />

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mes = "Имя: $name \nE-mail: $email \nТекст: $message";
$send = mail (bathed82@mail.ru,$header,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
{echo "Сообщение отправлено / Your message has been sent";}
else {echo "Ой, что-то пошло не так / Oops, something went wrongs";}

?>