<?php 
include('cw-admin/dbcon.php');
$get_cust_email = trim($_REQUEST['cust_email']);
$get_cust_password = trim($_REQUEST['cust_password']);
$get_cust_mobile = trim($_REQUEST['cust_mobile']);


$check_entry = " SELECT `cust_oid`,  COUNT(`cust_mobile`) as as_count, `cust_fname`, `cust_lname` FROM `cw_customer_details` 
                 WHERE `cust_email` = '".$get_cust_email."'  AND `cust_mobile` = '".$get_cust_mobile."' " ;
$check_entry_exe = mysqli_query($connect,$check_entry) or die('Error at customer details'.mysql_error());
$check_entry_row = mysqli_fetch_array($check_entry_exe);

if($check_entry_row['cust_oid'] == NULL && $check_entry_row['as_count'] == 0){
    header('Location: forget_password.php?msg=error');
}else{
     $update_entry = "UPDATE `cw_customer_details` SET `cust_password`= '".$get_cust_password."'
        WHERE  `cust_oid` = '".$check_entry_row['cust_oid']."' 
        AND `cust_email` = '".$get_cust_email."' 
        AND `cust_mobile` = '".$get_cust_mobile."' ";
 mysqli_query($connect,$update_entry) or die('Error at customer details'.mysql_error());


/*Mailed service*/
$full_name = $check_entry_row['cust_fname'].' '.$check_entry_row['cust_lname'];
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
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

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

$mail->Subject = 'Forget Password credential of Feather.com';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
     header('location:forget_password.php?msg=r_success');
}

                

?>