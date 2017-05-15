<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Введите ваше имя";
} else {
    $name = $_POST["name"];
}
// thema
if (empty($_POST["thema"])) {
    $errorMSG .= "Введите вашу тему";
} else {
    $thema = $_POST["thema"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Введите ваш Email";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Введите сообщение ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "phti@belhost.by";
$Subject = "Получено новое сообщение с www.phti.by";

// prepare email body text
$Body = "";
$Body .= "Имя: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Тема: ";
$Body .= $thema;
$Body .= "\n";
$Body .= "Сообщение: ";
$Body .= $message;
$Body .= "\n";

$headers = 
    'Reply-To:'. $email;

// send email
$success = mail($EmailTo, $Subject, $Body, $headers);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Письмо успешно отправлено";
}else{
    if($errorMSG == ""){
        echo "Возникли некоторые проблемы";

    } else {
        echo $errorMSG;
    }
}

?>