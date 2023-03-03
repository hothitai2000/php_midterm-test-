<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào Tài</title>
</head>
<body>
    <h1> Thông Tin cá nhân</h1>
    <form action="" method="post" >
        <table border="1" >
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Code</td>
                <td>Price</td>
                <td>Image</td>
                <td>Xóa</td>
                <td>Sửa</td>
            </tr>
    </form>
    <?php
    ?>
    <?php
    if (isset($_SESSION['sanpham'])){
        $n = count(($_SESSION['sanpham']));
    for ($i = 0; $i < $n; $i++) {
    ?>
        <tr>
            <td><?php echo $_SESSION ['sanpham'][$i]['sp']; ?></td>
            <td><?php echo $_SESSION ['sanpham'][$i]['g']; ?></td>
            <td><?php echo $_SESSION ['sanpham'] [$i]['mt']; ?></td>
            <td><img src='<?php echo $_SESSION ['traicay'][$i]['ha']; ?>' height="100px" ; width="100px"> </td> 
            <td><a href="delete.php? XOA=<?php echo $i ?>">Xóa</a> </td> 
            <td><a href="update.php? EDIT=<?php echo $i ?>"> sửa </a></td>  
        </tr>
        
    <?php
    } 
 }
    ?>
    </table>
    
</body>
</html>
