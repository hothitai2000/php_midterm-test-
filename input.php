<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login">
        <h2>Thông tin cá nhân</h2>
        <form action="" method="post">
        <input type="text" name="ten" placeholder="Name" required>
        <input type="p" name="phone"placeholder="Phone">
        <input type="Email" name="email" placeholder="Email" required>
        <button type="submit" name="btn">Send</button>
        </form>
         <?php
         $tk='HoThiTai';
         $phone='0362271203';
         $email='hothitai@gmail.com';

         if (isset($_POST["btn"])){
             $name =$_POST['ten']; 
             $sdt=$_POST['phone'];
             $mail=$_POST['email'];
             if($tk==$name && $phone==$sdt && $email==$mail){
                echo"Đăng nhập thành công";
             };
             if($tk!=$name && $phone==$sdt && $email==$mail){
                echo"Tài khoản sai";
             }
            if($tk==$name && $phone!=$sdt && $email==$mail){
                echo"số điện thoại không đúng";
             }
         };
         ?>
    </div>
</body>
</html>