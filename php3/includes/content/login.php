<section id="home" name="home"></section>
<div id="headerwrap">
  <div class="container">
    <div class="row centered">
      <div class="col-lg-12">
      </div>
      <div class="row">
        <div class="col-lg-6">
          <h1><b>Totem</b></h1>
          <h3>Please Log In or <a href="pages/registration.php">Sign Up</a></h3>
          <br>
          <form role="form" action="includes/components/login-process.php" method="post" name="login">
            <div class="form-group">
              <label for="inputUsernameEmail">Username or email</label>
              <input type="text" class="form-control" id="inputUsernameEmail" name="username" placeholder="Username or Email">
            </div>
            <div class="form-group">
            <label for="inputPassword">Password</label>
              <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn btn-primary ladda-button" data-style="zoom-in" value="Sign In" name="login_button">
              Log In
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!--
<div>
	<div class="l-flex-center is--full w-container">
      <div class="c-login">
        <div class="c-login__title">
          <div class="text-block-30">My-Totem Login</div>
        </div>
        <div class="c-login__body">
          <div class="w-form">
            <form id="aform" name="wf-form-aform" data-name="aform" method="post" action="https://www.authpro.com/auth/mistercreate/"><label for="login-2">Login:</label><input type="text" class="c-login__input w-input" maxlength="256" name="login-2" data-name="Login 2" placeholder="Enter login" id="login-2" required=""><label for="password">Password</label><input type="password" class="c-login__input w-input" maxlength="256" name="password" data-name="Password" placeholder="Enter password" id="password" required=""><label class="w-checkbox"><input type="checkbox" id="Remember" name="Remember" data-name="Remember" class="w-checkbox-input"><span for="Remember" class="w-form-label">Remember me</span></label><input type="submit" value="Enter" data-wait="Please wait..." class="c-login__submit w-button">
              <div>Lost your username or password? <a href="#" class="c-link">Find it here!</a><br>Not a member yet? <a href="#" class="c-link">Click here to register.</a></div>
              <div class="w-embed"><input type="hidden" name="action" value="login">
                <input type="hidden" name="hide" value=""></div>
            </form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>	
-->
