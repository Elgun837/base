<?php require "config.php";

@$id = $_REQUEST['p_id'];
if($id){
    $addbasket = $dbh->prepare("DELETE FROM `basket`  WHERE `pr_id` = ? ");
    $addbasket->execute([$id]);
}
$push = $dbh->query("SELECT * FROM `basket`");
$push->execute();
$counter = $push->rowCount();
echo $counter;

?>