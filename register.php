<?php require 'config.php';?>
<center>
<div class="form">
    <form action="" method="POST">
        <input type="text" name="user_name" required placeholder="Your name"><br><br>
        <input type="mail" name="email" required placeholder="Your email"><br><br>
        <input type="password" name="password" required placeholder="Password"><br><br>
        <button type="submit">Register</button><br><br>
        <a href="?page=login">Login</a><br><br>
    </form>
</div>
<?php 
if(!empty($_POST)){
$email = $_POST['email'];
$select = $dbh->prepare("SELECT * FROM `customer` WHERE `email`= ?");
$select->execute([$email]);
$result = $select->rowCount();
    if($result === 0){
        $name = $_POST['user_name'];
        $mail = $_POST['email'];
        $password = md5(sha1($_POST['password']));

        $add_user = $dbh->prepare("INSERT INTO `customer`(`name`, `email`, `password`) VALUES (?,?,?)");
        $result = $add_user->execute([
            $name,
            $mail,
            $password
        ]);
        if($result){
            $_SESSION['login'] = true;
            echo "Your are successfully registered <script>setTimeout(function(){ window.location.href = '?page=home'; }, 2000)</script>";
        }else{
            echo "something went wrong";
        }
    
    }else{
        echo "This email reserved by other user";
    }
}
?>
</center>