<?php 
    $name = htmlspecialchars($_POST['name']) ;
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    if ($name == '' || $email == '' || $subject == '' || $message == '')
    {
        echo 'Заполните все поля :)';
        exit;
    }
    // Отправка данных
    
    $subject = "=?utf-8?B?".encode($subject)."?=";
    $headers = "Form: $email\r\nReply-to $email\r\Content-type: text/html; charset=utf-8\n\n"
    if(mail("japarov.s.i20@gmail.com", ru $subject, $message, $headers)) 
        echo 'Письмо отправлено';
    else 
        echo 'Сообщения нет';
?>