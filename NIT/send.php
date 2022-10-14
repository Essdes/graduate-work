<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language');
$mail->IsHTML(true);

$name = $_POST['name'];
$emails = $_POST['emails'];
// $mess = $_POST['message'];
// $submit = "";

$name = htmlspecialchars($name);
$emails = htmlspecialchars($emails);
// $mess = htmlspecialchars($mess);

$name = urldecode($name);
$emails = urldecode($emails);
// $mess = urldecode($mess);

$name = trim($name);
$emails = trim($emails);
// $mess = trim($mess);

//от кого письмо
$mail->setFrom('techsuppnit@gmail.com', 'Техническая поддержка NIT');
//кому отправить
$mail->addAddress('techsuppnit@gmail.com');
//тема письмо
$mail->Subject = 'Техническая поддержка NIT';


echo $name;
echo "<br>";
echo $emails;
// echo "<br>";
// echo $mess;
$body = '<h1>Встречайте супер письмо! </h1>';
//  if (mail("techsuppnit@gmail.com",
//             "Техническая ошибка",
//             "ФИО: ".$name."\n".
//             "E-mail: ".$emails."\n", // "Сообщение: ".$mess."\n". ,
//             "From: "."techsuppnit@gmail.com \r\n"))
//  {
//      echo "<br>"."\r\n ". "Сообщение успешно отправлено!";
//     //  alert ('Сообщение успешно отправлено!');
// }
//  else
//  {
//     //   alert ('ОЙ! Произошла какая-то ошибка...');
//      echo "<br>"."\r\n" . "При отправке сообщения возникли ошибки.";
// }

if(trim(!empty($_POST['name']))){
    $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
}
if(trim(!empty($_POST['emails']))){
    $body.='<p><strong>E-mail:</strong> '.$_POST['emails'].'</p>';
}
 if(trim(!empty($_POST['problem']))){
     $body.='<p><strong>Характер ошибки:</strong> '.$_POST['problem'].'</p>';
 }
 if(trim(!empty($_POST['message']))){
    $body.='<p><strong>Сообщение:</strong> '.$_POST['message'].'</p>';
}

//проблемный кусок
//Прекрепить файл
 if(!empty($_FILES['image']['tmp_name'])) {
    //путь загрузки файла
    //$filePath = __DIR__ . "/files/" . $_FILES['image']['name'];
    //грузим файл
    if (copy($_FILES['image']['tmp_name'], $filePath)) {
        $fileAttach = $filePath;
        $body.='<p><strong>Фото в приложении</strong>';
        $mail->addAttachment($fileAttach);
        // console.log($_FILES);
    }
}
//

$mail->Body = $body;
//отправляем
if (!$mail->send()) {
    $message = 'Ошибка';
} else {
    $message = 'Данные отправлены!';
}
$response = ['message' => $message];
header('Content-type: application/json');
echo json_encode($response);
?>
