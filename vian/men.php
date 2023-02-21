<?php
require ("includes/conf.php");
$men=$db->select('SELECT * FROM `products` WHERE type_id=1');
$manufacturer=$db->select('SELECT * FROM `manufacturer`');
//print_r($manufacturer);die;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="with=device-width initial-scale=0.1">
        <title>products</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link rel="stylesheet" href="style0.css">
    </head>
    <body>
<section id="header">
    <a href="#"><img src="img/icon.png" class="logo" alt=""></a>
    <div> <ul id="navbar">
        <li><a href="index.html">HOME</a></li>
        <li><a href="products.html">PRODUCTS</a></li>
       <li><a  href="women.html">women</a></li>
       <li><a class="active" href="men.html">men</a></li>
       <li><a href="kids.html">kids</a></li>
       <li><a href="designs.html">designs</a></li>
    </ul>
</div>
</div>
</section>
<section id="page-header">
    <h2>#staytrendy </h2>
    <P>Save mor time & money</P>
</section>
<section id="product1"id="heroo">
    <div class="pro-container">
        <?php
        for($i=0;$i<count($men);$i++) {
        ?>
        <div class="pro">
           <img src="<?php echo 'img/'.$men[$i]['image'] ?>" alt="">
            <div class="description">
                <span><?php for($j=0;$j<count($manufacturer);$j++)
                {
                    if($manufacturer[$j]['id']==$men[$i]['manufacturer_id'])
                        echo $manufacturer[$j]['name'];
                }

                ?></span>
                <h5><?php echo $men[$i]['name'] ?></h5>
                <div class="star">
                    <i class="fas fa-star" style="color:yellow"></i>
                    <i class="fas fa-star"style="color:yellow"></i>
                    <i class="fas fa-star"style="color:yellow"></i>
                    <i class="fas fa-star"style="color:yellow"></i>
                    <i class="fas fa-star"style="color:yellow"></i>
                </div>
                <h4><?php echo $men[$i]['price'] ?></h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <?php } ?>
           </div>
        </div>
</section>
<section id="sld" id="product1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
</section>
<footer class="sec-1">
    <div class="col">
        <img  class= "logo"src="img/icon.png">
        <h4>contact</h4>
        <p><strong>Addres : </strong> syria/damascus-----------</p>
        <p><strong>Phone : </strong>+963--------------------</p>
        <p><strong>Social media :</strong>runway sy</p>
        <div class="follow">
            <div class="icons">
                <i class="fab fa-facebook-f"></i>

                <i class="fab fa-instagram"></i>

                <i class="fab fa-youtube"></i>

            </div>
        </div>
    </div>
</footer>
        <script src="script.js"></script>
    </body>
</html>