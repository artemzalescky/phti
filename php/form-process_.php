<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Введите имя ";
} else {
    $name = $_POST["name"];
}

// Тема
if (empty($_POST["thema"])) {
    $errorMSG .= "Введите вашу тему";
} else {
    $thema = $_POST["thema"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Введите Email";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Введите сообщение ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "artemzalescky@gmail.com";
$Subject = "Получено новое сообщение";

// prepare email body text
$Body = "";
$Body .= "Имя: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Тема: ";
$Body .= $thema;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Сообщение: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, "", "С:".$email);

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





// thema
if (empty($_POST["thema"])) {
$errorMSG .= "Введите вашу тему";
} else {
$email = $_POST["thema"];
}