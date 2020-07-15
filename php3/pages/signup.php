<?php require_once('components/session-check-index.php') ?>
<?php require_once('_database/database.php') ?>
<?php require_once('controllers/base/head.php') ?>
<body>	
    <script type="text/javascript"> 
        ChangeIt();
    </script>
<?php require_once('controllers/nav/index-before-login-navigation.php') ?>
    <section id="home" name="home"></section>
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12">
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                        <h1><b>Totem</b></h1>
                        <h3>Sign Up</h3>
                        <br>
                        <?php require_once('controllers/form/registration-form.php') ?>
                    </div>

                </div>
                <div class="col-lg-8">
                </div>
                <div class="col-lg-2">
                    <br>
                </div>
            </div>
        </div> <!--/ .container -->
    </div><!--/ #headerwrap -->