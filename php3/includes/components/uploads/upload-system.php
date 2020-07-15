<head>
        <title>My-Totem</title>

        <!-- CSS -->
        <link href='assets/css/photobox/photobox.css' rel='stylesheet' type='text/css'>
        <link href='assets/css/photobox/style.css' rel='stylesheet' type='text/css'>

        <!-- Script -->
        <script src='assets/js/photobox/jquery-3.3.1.js' type='text/javascript'></script> 
        <script type="text/javascript" src="assets/js/photobox/jquery.photobox.js"></script>
    </head>
    <body>

    <div class="container">
    <div class="row clearfix">
            <h1 class="text-center">Gallery</h1>

        <div class='container'>
            <div class="gallery">
              
            <?php 
            // Image extensions
            $image_extensions = array("png","jpg","jpeg","gif");

            // Target directory
            $dir = 'userfiles/uploads/';
            if (is_dir($dir)){
                
                if ($dh = opendir($dir)){
                    $count = 1;

                    // Read files
                    while (($file = readdir($dh)) !== false){

                        if($file != '' && $file != '.' && $file != '..'){
                            
                            // Thumbnail image path
                            $thumbnail_path = "userfiles/uploads/thumbnail/".$file;

                            // Image path
                            $image_path = "userfiles/uploads/".$file;
                            
                            $thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
                            $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

                            // Check its not folder and it is image file
                            if(!is_dir($image_path) && 
                                in_array($thumbnail_ext,$image_extensions) && 
                                in_array($image_ext,$image_extensions)){
                                ?>

                                <!-- Image -->
                                <a href="<?= $image_path; ?>">
                                    <img src="<?= $thumbnail_path; ?>">
                                </a>
                                
                                <?php

                                // Break
                                if( $count%4 == 0){
                                ?>
                                    <div class="clear"></div>
                                <?php    
                                }
                                $count++;
                            }
                        }
                            
                    }
                    closedir($dh);
                }
            }
            ?>
            </div>
        </div>
        
        <!-- Script -->
        <script type='text/javascript'>
        $(document).ready(function(){
             $('.gallery').photobox('a',{ time:0 });
            
        });
        </script>

    </body>
</html>

