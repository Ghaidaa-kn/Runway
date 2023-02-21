<?php
if(isset($_POST['submit']))//signup
{
    $in_arr = array(

        'user_name' => $db->sqlsafe($_POST['username']),

        'password' => $db->sqlsafe($_POST['password']),

        'group_id' => $db->sqlsafe($_POST['type'])
    );

    $item_id=$db->insert('users',$in_arr);
}
?>
    

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="with=device-width initial-scale=0.1">
        <title>project</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link rel="stylesheet" href="style0.css">
    </head>
    <body>
<section id="header">
    <a href="#"><img src="img/icon.png" class="logo" alt=""></a>
    <div> <ul id="navbar">
        <li><a href="index.html">HOME</a></li>
        <li><a href="products.html">PRODUCTS</a></li>
        <li><a  class="active" href="login.html">LOGIN</a></li>
        <li><a href="contact.html">CONTACT</a></li>
        <li><a href="article.html">ARTICLES</a></li>
        <li><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
    </ul>
</div>
</div>
</section>
<br>
<br>
    <div class="cont">
        <form action="includes/login.php">
        <div class="form sign-in">
            <h2>Welcome</h2>
            <label>
                <span>Name</span>
                <input type="name" name="username"/>
            </label>
            <label>
                <span>Password</span>
                <input type="password" />
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <button type="button" name="submitt" value="sign_in" class="submit">Sign In</button>
        </form>
         
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                 
                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">
                
                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <form method="post">
            <div class="form sign-up">
                <h2>Create your Account</h2>
                <label>
                    <span>Name</span>
                    <input type="text" name="username"/>
                </label>
                <label>
                    <span>Type</span>
                    <select name="type">
                    <option value="1">Customer</option>
                    <option value="2">designer</option>
                    <option value="3">Fashion Expert</option>
                    </select>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" />
                </label>
                <button type="button" name="submit" value="sign_up" class="submit">Sign Up</button>
                
            </div>
            </form>
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
</body>
</html>