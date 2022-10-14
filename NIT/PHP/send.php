<?php
$fio = $_POST['forName'];
$email = $_POST['formEmail'];
$mess = $_POST['formMessage'];
$submit = "";

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$mess = htmlspecialchars($mess);

$fio = urldecode($fio);
$email = urldecode($email);
$mess = urldecode($mess);

$fio = trim($fio);
$email = trim($email);
$mess = trim($mess);

echo $fio;
echo "<br>";
echo $email;
echo "<br>";
echo $mess;
if($submit == $_POST['submit'])
{
 if (mail("techsuppnit@gmail.com", "Техническая ошибка",
                                    "ФИО: ".$fio."\n".
                                    "E-mail: ".$email."\n".
                                    "Сообщение: ".$mess."\n". ,
                                    "From: "."techsuppnit@gmail.com \r\n"))
 {
    //  echo "<br>"."\r\n ". "Сообщение успешно отправлено!";
    alert ('Сообщение успешно отправлено!');
}
 else
 {
     alert ('ОЙ! Произошла какая-то ошибка...');
    // echo "<br>"."\r\n" . "При отправке сообщения возникли ошибки.";
}

}?>
