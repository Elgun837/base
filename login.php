<?php require "config.php"?>

<?php
if(!isset($_SESSION['login'])){
    ?>
    <center>
        
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Your email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button><br><br>
        <a href="?page=register">Register</a><br><br>
    </form>
    
    <?php 
    if(!empty($_POST)){
    $mail = $_POST['email'];
    
    

    $mail_find = $dbh->prepare("SELECT `email` FROM `customer` WHERE email = ?"); 
    $mail_find -> execute([$mail]);
        if($mail_find->rowCount() === 1){
            $password = md5(sha1($_POST['password']));
            
            $user = $dbh->query("SELECT * FROM `customer`")->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($user as $key => $value) {
                
            if($value['password'] == $password){
                $_SESSION['login'] = true;
                header("location:?page=home");
            }else{
                echo "Wrong password";
            }
        }
        }else{
            echo "This email was not found";
        }
    }else{
        echo "Please type mail and password";
    }
}
else{
    header("location:?page=home");
}
    ?>              
    </center>