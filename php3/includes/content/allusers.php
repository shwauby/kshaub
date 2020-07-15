<div class="col-md-4 column">
    <div class="panel-group" id="panel-<?php echo $rws['user_id']; ?>">
        <div class="panel panel-default">
            <div id="panel-element-<?php echo $rws['user_id']; ?>" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="col-md-6 column">
                        <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" name="aboutme" class="img-responsive">                                  
                    </div>
                    <div class="col-md-6 column">
                        <h2><span><a href="profile.php?user_username=<?php echo $rws['user_username'];?>"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></a></span></h2>
                    </div>
                </div>       
            </div>                                                                        
        </div>
    </div>                                                                  
</div>