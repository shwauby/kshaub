  <form method="post" enctype="multipart/form-data" >
    <input type="file" name="image" />
    <input type="submit" value="upload" name="uploaded">
  </form>

  <?php

    session_start();
    mysql_connect("localhost","mytotemo_root","TotemAgency2019!!");
    mysql_select_db("mytotemo_uploadedimages");
    if(isset($_POST['upload']))
    {
        $filename=$_FILES['image']['name'];
        $filetype=$_FILES['image']['type'];
        $filetmp=$_FILES['image']['tmp_name'];

        $image= move_uploaded_file($filetmp, "images/$filename");
        mysql_query("insert into image(id,filename,image)values('','filename','$image')");
    }
?>