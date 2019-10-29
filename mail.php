<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$massage = $_POST['massage'];
// ==========================
$f_name = $_POST['first_name'];
$l_name = $_POST['last_name'];
$p_name = $_POST['phone'];
$a_name = $_POST['address'];
// ==========================

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'horchynska2016@gmail.com'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'maria2016'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('horchynska2016@gmail.com'); // от кого будет уходить письмо?
$mail->addAddress('horchynsky@gmail.com');     // Кому будет уходить письмо 


$mail->Subject = 'Xocha Time ';
$mail->Body    = '' .$name . ' Його номер телефону: ' .$phone. 'Почта цього клієнти: ' .$email .' написав повідомлення, ' $massage;
$mail->AltBody = '';
// =======================
$mail->Subject = 'Xocha Time Замовлення на доставку ';
$mail->Body    = '' .$f_name . .$l_name . ' оставил заявку, его телефон ' .$p_name. 'Адреса Замовлення: ' .$a_adress;
$mail->AltBody = '';


if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>