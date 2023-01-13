<?php
include('cw-admin/dbcon.php');
$get_cust_fname = trim($_REQUEST['cust_fname']);
$get_cust_lname = trim($_REQUEST['cust_lname']);
$get_cust_email = trim($_REQUEST['cust_email']);
$get_cust_password = trim($_REQUEST['cust_password']);
$get_cust_mobile = trim($_REQUEST['cust_mobile']);

if($get_cust_mobile > 0){
    $save_customer_details = "INSERT INTO `cw_customer_details`(
        `cust_oid`, 
        `cust_fname`, 
        `cust_lname`, 
        `cust_mobile`, 
        `cust_email`, 
        `cust_password`)
     VALUES ('',
     '".$get_cust_fname."',
     '".$get_cust_lname."',
     '".$get_cust_mobile."',
     '".$get_cust_email."',
     '".$get_cust_password."')";
    mysqli_query($connect,$save_customer_details)
    or die("Error at customer details insert!!! > " . mysql_error());

/*Mailed service*/
$full_name = $get_cust_fname.' '.$get_cust_lname;
$text ='<br> Kindly check your login credential, please do not share this credential with anyone keep it safe ';
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                        // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                        // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dsouzamachiel2017@gmail.com';                       // SMTP username
$mail->Password = 'test2017';                     // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                // TCP port to connect to

$mail->setFrom('dsouzamachiel2017@gmail.com', 'Feather.com');
$mail->addReplyTo('dsouzamachiel2017@gmail.com', 'Feather.com');
$mail->addAddress($get_cust_email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h3>Hi , '.$full_name.' '.$text.'</h3>';
$bodyContent .= '<table style="font-size: 18px;">
                    <tr style="background-color: #b9bdb6;">
                        <th>Email-ID</th>
                        <td>:</td>
                        <td>'.$get_cust_email.'</td>
                    </tr>
                    <tr style="background-color: #e8e8e8;">
                        <th>Mobile number</th>
                        <td>:</td>
                        <td>'.$get_cust_mobile.'</td>
                    </tr>
                    <tr style="background-color: #b9bdb6;">
                        <th>Password</th>
                        <td>:</td>
                        <td>'.$get_cust_password.'</td>
                    </tr>
            </table>';

$mail->Subject = 'Login credentials of Feather.com';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
     header('location:login.php?msg=r_success');
}
?>