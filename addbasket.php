<?php require "config.php";

$id = $_REQUEST['id'];
if($id){
    $addbasket = $dbh->prepare("INSERT INTO `basket`(`pr_id`) VALUES (?)");
    $addbasket->execute([$id]);
}
$push = $dbh->query("SELECT * FROM `basket`");
$push->execute();
$counter = $push->rowCount();
echo $counter;
?>