  <div class="nav">
  <div data-collapse="medium" data-animation="default" data-duration="400" class="nav-navbar w-nav">
    <nav role="navigation" class="nav-menu navbarhome w-clearfix w-nav-menu"><a href="index.php" class="brand-wrapper w-nav-brand w--current"><img src="images/TOTEMLOGOW.png" width="130" srcset="images/TOTEMLOGOW-p-500.png 500w, images/TOTEMLOGOW-p-800.png 800w, images/TOTEMLOGOW-p-1080.png 1080w, images/TOTEMLOGOW-p-1600.png 1600w, images/TOTEMLOGOW-p-2000.png 2000w, images/TOTEMLOGOW-p-2600.png 2600w, images/TOTEMLOGOW.png 3099w" sizes="(max-width: 991px) 100vw, 112.98611450195312px" alt="" class="header-image"></a><a href="#" ms-logout="true" class="nav-link-5 right settings w-nav-link">Logout</a><a href="login.php" ms-hide-element="true" class="nav-link-4 right settings w-nav-link">Login</a><a href="register.php" ms-hide-element="true" class="nav-link-4 right settings w-nav-link">Register</a><a href="#" ms-profile="true" class="nav-link-5 right settings w-nav-link">Settings</a><a href="/signup" data-w-id="b3745284-0354-8e08-047e-007c7050b109" class="request-access cta-button white w-button">REQUEST ACCESS</a>
      <div class="menu-button-3 w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </nav>
  </div>
</div>

<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="fluid-container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="pages/home.php"><b>My-Totem</b></a></div>
        <div class="navbar-collapse collapse" id="navbar-collapse1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="pages/home.php"><i class="fa fa-home"></i> Home</a>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search" method="post" autocomplete="off" action="search-result.php">
                <div class="form-group">
                    <input type="text" class="search form-control" id="searchbox" placeholder="Search for People" name="search-form" /><br />
                    <div id="display"></div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $row['user_firstname']; ?> <?php echo $row['user_lastname']; ?><strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="includes/controllers/form/edit/edit-profile.php"><i class="fa fa-edit"></i> Edit Profile</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bars" style="font-size: 1.27em;"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="includes/components/auth/logout.php"><i class="fa fa-mail-reply"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>