<?php include_once('includes/components/authentication.php') ?>
<?php include_once('includes/components/session-check.php') ?>
<?php include_once('includes/controllers/base/head.php') ?>
<?php include_once('includes/controllers/navigation/first-navigation.php') ?>

<?php
if ($_POST) {
    $query = $_POST['search-form'];
    $sql = mysqli_query($database, "select * from user where user_firstname like '%$query%' or user_lastname like '%$query%' order by user_id");
    $number = mysqli_num_rows($sql);
}
?>