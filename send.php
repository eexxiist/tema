<?php 
   $nickname = $_POST['nickname'];
   $feedback = $_POST['message'];
   $nickname = trim(urldecode(htmlspecialchars($nickname)));
   $feedback = trim(urldecode(htmlspecialchars($message)));

   if (mail("info@eexxiist.ru", "Заявка с сайта", "Ник:".$nickname.". \nОтзыв: ".$message ,"From: Имя_сайта \r\n")){
      header("Location: ../index.html")
   } else {
      echo "Message could not be sent!";
   }
?>