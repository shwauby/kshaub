<form action="includes/components/mybrand.php" method="post" enctype="multipart/form-data" id="UploadForm">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="active"><a href="#colors" data-toggle="tab">Colors</a></li>
      <li><a href="#fonts" data-toggle="tab">Fonts</a></li>
      <li><a href="#logos" data-toggle="tab">Logos</a></li>
      <li><a href="#websies" data-toggle="tab">Websites</a></li>
      <li><a href="#photos" data-toggle="tab">Photos</a></li>
      <li><a href="#files" data-toggle="tab">Files</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="colors">         
            <div class="col-md-6">
                <div class="form-group float-label-control">                      
                    <label for="">Colors</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_firstname'];?>" name="user_firstname" value="<?php echo $rws['user_firstname'];?>">
                </div>
            </div>  
        </div>
        <div class="tab-pane fade in active" id="fonts">         
            <div class="col-md-6">
                <div class="form-group float-label-control">                      
                    <label for="">Fonts</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_firstname'];?>" name="user_firstname" value="<?php echo $rws['user_firstname'];?>">
                </div>
            </div>  
        </div>
        <div class="tab-pane fade in active" id="logos">         
            <div class="col-md-6">
                <div class="form-group float-label-control">                      
                    <label for="">Logos</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_firstname'];?>" name="user_firstname" value="<?php echo $rws['user_firstname'];?>">
                </div>
            </div>  
        </div>
        <div class="tab-pane fade in active" id="websites">         
            <div class="col-md-6">
                <div class="form-group float-label-control">                      
                    <label for="">Websites</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_firstname'];?>" name="user_firstname" value="<?php echo $rws['user_firstname'];?>">
                </div>
            </div>  
        </div>
        <div class="tab-pane fade in active" id="photos">         
            <div class="col-md-6">
                <div class="form-group float-label-control">                      
                    <label for="">Photos</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_firstname'];?>" name="user_firstname" value="<?php echo $rws['user_firstname'];?>">
                </div>
            </div>  
        </div>
        <div class="tab-pane fade in active" id="files">         
            <div class="col-md-6">
                <div class="form-group float-label-control">                      
                    <label for="">Files</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_firstname'];?>" name="user_firstname" value="<?php echo $rws['user_firstname'];?>">
                </div>
            </div>  
        </div>
    </div>     
    <br>
    <div class="submit">
        <center>
            <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
        </center>
    </div>
</form>