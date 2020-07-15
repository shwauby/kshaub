<section id="home" name="home"></section>
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12">
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                        <h1><b>Totem</b></h1>
                        <h3>Please Log In or <a href="signup.php">Sign Up</a></h3>
                        <br>
                        <form role="form" action="components/login-process.php" method="post" name="login">
                            <div class="form-group">
                                <!--<label for="inputUsernameEmail">Username or email</label>-->
                                <input type="text" class="form-control" id="inputUsernameEmail" name="username" placeholder="Username or Email">
                            </div>
                            <div class="form-group">
                                <!--<label for="inputPassword">Password</label>-->
                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn btn-primary ladda-button" data-style="zoom-in" value="Sign In" name="login_button">
                                Log In  
                            </button>
                        </form>
                    </div>
                </div>
            </div>