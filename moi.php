<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="moi.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <div class="container">
        <div class="image">
            <p>
                Contact
            </p>
            <img src="https://previews.123rf.com/images/simmmax/simmmax1507/simmmax150700071/42785823-icon-in-flat-style-support-customer-service-icon.jpg" alt="">
            <div class="input">
            <input type="text" class="name" name="name" placeholder="Họ Và Tên"pattern ="[A-Za-z]+"  require>
            <br>
            <br>
            <input type="text" name="phone" placeholder="Điện thoại"  pattern="[0-9]+" maxlength="9">
            <input type="email" name="mail"placeholder="Email">
            <br>
            <br>
            <input type="text" class="nd" name="content" placeholder="Nội dung" >
            <br>
            <br>
            <button type="submit" name="btn"> Gửi đi</button>
            </div>  
    </div>
    </div>
    </form>
    <table border="2">
        <tr>
            <td>Name</td>
            <td>Phone</td>
            <td>Email</td>
            <td>Contact</td>
        </tr>
        <?php
        if(isset($_POST['btn']))
        {
           ?>
           <tr>
            <td>
            <?php
            echo $_POST['name']
            ?>
            </td>
            <td>
            <?php
            echo $_POST['phone']
            ?>
            </td>
            <td>
            <?php
            echo $_POST['mail']
            ?>
            </td>
            <td>
            <?php
            echo $_POST['content']
            ?>
            </td>
           </tr>
           <?php 
        }
        ?>
    </table>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="moi.css">
</head>
<body>
    <div class="container">
        <div class="image">
            <p>
                Contact
            </p>
            <img  src="https://jobsgo.vn/blog/wp-content/uploads/2021/05/Cong-nghe-thong-tin-la-nganh-hoc-la-dinh-huong-nghe-nghiep-duoc-ua-chuong.jpg" alt="">
        </div>
        <div class="input">
            <input type="text" class="name" name="n" placeholder="Họ Và Tên">
            <br>
            <br>
            <input type="text" class="phone" name="phone" placeholder="phone">
            <input type="text" class="email" name="email" placeholder="email">
            <br>
            <br>
            <input type="text" class="content" name="nd" placeholder="Nội dung" >
            <br>
            <br>
            <button>Gởi tin</button>
        </div>
    </div>
</body>
</html> -->