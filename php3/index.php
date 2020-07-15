<?php include_once('includes/controllers/webflow/head.php') ?>
<?php include_once('includes/components/home/landing-page-body.php') ?>
---

<?php include_once('includes/components/auth/authentication.php') ?>     

<?php include_once('includes/components/session/session-check-index.php') ?>
<?php include_once('includes/controllers/nav/index-before-login-navigation.php') ?>

<?php include_once('_database/database.php'); ?>
<?php include_once('includes/controllers/base/head.php'); ?>


<div id="site_content">
  <?php
  include_once('includes/content/index.php');
  ?>
</div>

<!--
  <script type="text/javascript"> 
    ChangeIt();
  </script>
-->

<?php require_once('includes/components/footer.php'); ?>
