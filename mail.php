<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   
    <title>Ваше сообщение успешно отправлено</title>
 
</head>
 
<body>
 
<?php
    $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
   
    if(!empty($_POST['name']) and !empty($_POST['mail']) and !empty($_POST['message'])){
        $name = trim(strip_tags($_POST['name']));
        $mail = trim(strip_tags($_POST['mail']));
        $message = trim(strip_tags($_POST['message']));
       
        mail('почта_для_получения_сообщений@gmail.com', 'Письмо', 'Вам написал: '.$name.'<br />Его почта: '.$mail.'<br />Его сообщение: '.$message,"Content-type:text/html;charset=utf-8");
       
        echo "Ваше сообщение успешно отправлено!<Br> $back";
       
        exit;
    }
    else {
        echo "Для отправки сообщения заполните все поля! $back";
        exit;
    }
    $db = mysqli_connect('hosting.com', 'login', 'password', 'mydatabase')
        or die('Error in established MySQL-server connect');
        
   
    $query = "INSERT INTO base (name, e-mail, message) VALUES ('$name', '$mail', '$message')";
             
    $result = mysqli_query("SELECT email FROM users WHERE email='$mail'",$db);
    $myrow = mysql_fetch_array($result);
    if ($myrow['email']==$mail)  {
        echo '<input type="submit" value="Отправить" disabled = "disabled"/>';
    }
    mysqli_close($db); 
?>
</body>
