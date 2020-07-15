<?php require_once('includes/components/auth/authentication.php') ?>
<?php require_once('includes/components/session/session-check-index.php') ?>

<?php require_once('includes/components/home/home.php') ?>

<?php require_once('includes/controllers/nav/index-before-login-navigation.php') ?>
<?php include_once('includes/controllers/navigation/first-navigation.php') ?>

<?php require_once('includes/controllers/base/head.php') ?>
<?php require_once('includes/components/header.php'); ?>
<?php include_once('includes/components/sidebar.php'); ?>

<div id="site_content">
  <?php
  include_once('includes/content/home.php');
  ?>
</div>

<?php require_once('includes/components/footer.php'); ?>