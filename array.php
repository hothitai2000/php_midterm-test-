<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
.list-card{
            margin-left: 10px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            grid-gap: 15px;
        }

.list-card.card-1.card_img{
   height: 100px;
   width: 50px;

}
</style>
</head>
<body>
<?php
$sanpham=array();
$sanpham[0]['Id']="0";
$sanpham[0]['Name']="Quần short kaki";
$sanpham[0]['Code']="TC1025011BA";
$sanpham[0]['Price']="398,000";
$sanpham[0]['Image']="https://static.hotdeal.vn/images/961/961494/400x500/239509-quan-short-kaki-nam-hang-nhap-cao-cap-239493-vn-2-3-4-5-6-7-8-9-10-11-12-13-14-15-16-17-18-19-20-21-22-23-24-25-26-27-28-29-30-31-32-33-34-35.jpg";


$sanpham[1]['Id']="1";
$sanpham[1]['Name']="Quần short màu cobal";
$sanpham[1]['Code']="QSD.013";
$sanpham[1]['Price']="354,000";
$sanpham[1]['Image']="https://static.hotdeal.vn/images/961/961481/400x500/239494-quan-short-kaki-nam-hang-nhap-cao-cap-239493-vn-2-3-4-5-6.jpg";


$sanpham[2]['Id']="2";
$sanpham[2]['Name']="Quần kaki name Bernice màu sữa";
$sanpham[2]['Code']="QKK.012";
$sanpham[2]['Price']="545,000";
$sanpham[2]['Image']="http://product.hstatic.net/1000304069/product/mvpn030mbr01__2__ee4d20ca50cb449caf1b3728272d03eb_grande.jpg";


$sanpham[3]['Id']="3";
$sanpham[3]['Name']="Quần baggy sang trọng QQ";
$sanpham[3]['Code']="Quyên 059";
$sanpham[3]['Price']="495,000";
$sanpham[3]['Image']="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRL53FQ4UvjxbDyzN-qucOy6Xp0eqhkBxiI4A&usqp=CAU";


$sanpham[4]['Id']="4";
$sanpham[4]['Name']="Quần short lien MINT Basic";
$sanpham[4]['Code']="MBP21404LG";
$sanpham[4]['Price']="495,000";
$sanpham[4]['Image']="https://salt.tikicdn.com/cache/w300/ts/product/a4/30/eb/8bb7a080eb23bd731e99020c7e6ac9c6.jpg";


$sanpham[5]['Id']="5";
$sanpham[5]['Name']="Aó len bím 2 túi thời trang ";
$sanpham[5]['Code']="AL0945";
$sanpham[5]['Price']="300,000";
$sanpham[5]['Image']="https://lzd-img-global.slatic.net/live/vn/p/a6991f0f442c552a12e659938ebb5ff5.jpg_720x720q80.jpg_.webp";
?>
<?php
?>
<div class="list-card nam ">
                 <div class="card-1">
                   <img class="card__img" src=<?php echo $sanpham[0]["Image"]; ?> ></img>
                   <h3 class="card__name"><?php echo $sanpham[0]["Name"] ?></h3>
                   <div class="card__code"><?php echo $sanpham[0]["Code"] ?></div>
                   <div class="card__Price"><?php echo $sanpham[0]["Price"]; ?></div>
                   <button class="card__buy">Đặt mua</button>
               </div>
               <div class="card-2">
                   <img class="card__img" src=<?php echo $sanpham[1]["Image"]; ?> ></img>
                   <h3 class="card__name"><?php echo $sanpham[1]["Name"] ?></h3>
                   <div class="card__code"><?php echo $sanpham[1]["Code"] ?></div>
                   <div class="card__Price"><?php echo $sanpham[1]["Price"]; ?></div>
                   <button class="card__buy">Đặt mua</button>
               </div>
               <div class="card-3">
                   <img class="card__img" src=<?php echo $sanpham[2]["Image"]; ?> ></img>
                   <h3 class="card__name"><?php echo $sanpham[2]["Name"] ?></h3>
                   <div class="card__code"><?php echo $sanpham[2]["Code"] ?></div>
                   <div class="card__price"><?php echo $sanpham[2]["Price"]; ?></div>
                   <button class="card__buy">Đặt mua</button>
                 </div>
               </div>
            <div class="list-card nu ">
               <div class="card-4">
                   <img class="card__img" src=<?php echo $sanpham[3]["Image"] ; ?> ></img >
                   <h3 class="card__name"><?php echo $sanpham[3]["Name"] ?></h3>
                   <div class="card__code"><?php echo $sanpham[3]["Code"] ?></div>
                   <div class="card__Price"><?php echo $sanpham[3]["Price"]; ?></div>
                   <button class="card__buy">Đặt mua</button>
               </div>
               <div class="card-5">
                   <img class="card__img" src=<?php echo $sanpham[4]["Image"]; ?> ></img>
                   <h3 class="card__name"><?php echo $sanpham[4]["Name"] ?></h3>
                   <div class="card__code"><?php echo $sanpham[4]["Code"] ?></div>
                   <div class="card__Price"><?php echo $sanpham[4]["Price"]; ?></div>
                   <button class="card__buy">Đặt mua</button>
               </div>
               <div class="card">
                   <img class="card__img" src=<?php echo $sanpham[5]["Image"]; ?> ></img>
                   <h3 class="card__name"><?php echo $sanpham[5]["Name"] ?></h3>
                   <div class="card__code"><?php echo $sanpham[5]["Code"] ?></div>
                   <div class="card__Price"><?php echo $sanpham[5]["Price"]; ?></div>
                   <button class="card__buy">Đặt mua</button>
               </div>
            </div>
</body>
</html>

