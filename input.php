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
        <input type="text" placeholder="Name">
        <input type="text"placeholder="Phone">
        <input type="text" name="email" placeholder="Email">
        <button type="submit" name="btn">Send</button>
        </form>
         <?php
         if (isset($_POST["btn"])) {
             $name = $_POST["chao"];
             echo "xin chao" . $name;
         };
         ?>
    </div>
</body>
</html>