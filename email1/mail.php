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
    // $mail->AddAddress("enny.Setyowaty@ggpc.co.id","Enny");  
    // $mail->AddAddress("rizka.syahrizal@ggpc.co.id","Rizka"); 
    // $mail->AddAddress("Aulia.IrhamniFajri@ggpc.co.id","Aulia");  
    // $mail->AddAddress("arie.suyasha@ggpc.co.id","AriSuyasha");
    // $mail->AddAddress("bagus.kuntjorodjati@ggpc.co.id","Bagus");
    // $mail->AddAddress("ari.wicaksono@gg-foods.com","Ari");
    // $mail->AddAddress("sartika.sartika@ggpc.co.id","Sartika");
    // $mail->AddAddress("wulan.sari@ggpc.co.id","Wulan");
    // $mail->AddAddress("Kiki.Baehaki@ggpc.co.id","Kiki");
    // $mail->AddAddress("taufik.hidayat@ggpc.co.id","Taufik");
    // $mail->AddAddress("Safitri.Safitri@ggpc.co.id","Safitri");
    // $mail->AddAddress("devita.savitri@gg-foods.com","Devita");
    // $mail->AddAddress("andri.munjaeni@gg-foods.com","Andri");
    // $mail->AddAddress("muhammad.reza@gg-foods.com","Reza");
    // $mail->AddAddress("is.pramono@ggpc.co.id","Is");
    // $mail->AddAddress("carin.sari@ggpc.co.id","Carin");
    // $mail->AddAddress("Abraham.Purwono@ggpc.co.id","Abraham");
    // $mail->AddAddress("ichbal.pratama@gg-foods.com","Ichbal");
    // $mail->AddAddress("budiman.budiman@ggpc.co.id","Budiman");
    // $mail->AddAddress("dodi.iskandar@gg-foods.com","Dodi");
    // $mail->AddAddress("raditya.dwipa@gg-foods.com","Radit");
    $mail->AddAddress("mohammad.sholeh@ggpc.co.id","Mohammad Sholeh"); 

    $mail->MsgHTML("Hi, Data customer complaint baru atas nama =>> ".$name." <<= telah diinput oleh admin, anda dapat melihat detailnya pada link berikut. Silahkan tanggapi complaint tersebut ya.. Thank you.. :) ");
    if($mail->Send()) echo "Message has been sent";
    else echo "Failed to sending message";
?>