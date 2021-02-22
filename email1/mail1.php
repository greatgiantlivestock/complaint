<?php
    $cn = mysqli_connect("localhost","gred3696_ms","moha11mmad","gred3696_sales");
    $tarik = "SELECT ms.id,ms.name FROM(SELECT max(id) as id FROM mst_complaint)as data_max JOIN mst_complaint ms on ms.id=data_max.id";
    $extarik = mysqli_query($cn,$tarik);
    $row = mysqli_fetch_assoc($extarik);
    $nama = $row['name']; 

    include "classes/class.phpmailer.php";
    $mail = new PHPMailer; 
    $mail->IsSMTP();
    $mail->SMTPSecure = 'ssl'; 
    $mail->Host = "mail.greatgiantlivestock.com"; 
    $mail->SMTPDebug = 2;
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = "ms@greatgiantlivestock.com"; 
    $mail->Password = "moha11mmad"; 
    $mail->SetFrom("ms@greatgiantlivestock.com","(no-reply) Admin Customer Complaint"); 
    $mail->Subject = "New Customer Complaint"; 
    $mail->AddAddress("mohammad.sholeh@ggpc.co.id","Mohammad Sholeh"); 
    $mail->MsgHTML("Hi, Data customer complaint baru atas nama ".$name." telah diinput oleh admin, mohon tanggapi data tersebut ya.. cek pada link berikut https://complaint.greatgiantlivestock.com. Thank you.. :) ");
    if($mail->Send()) echo "Message has been sent";
    else echo "Failed to sending message";
?>