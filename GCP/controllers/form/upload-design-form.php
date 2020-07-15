	<div class="container main" >
		<div class="image-box">
			<h2>Image Upload</h2>
			<form method="POST" name="upfrm" action="" enctype="multipart/form-data">
				<div>
					<input type="text" placeholder="Enter image name" name="img-name" class="tb" />
					<input type="file" name="fileImg" class="file_input" />
					<input type="submit" value="Upload" name="btn_upload" class="btn" />
				</div>
			</form>
			<div class="msg">
                <strong>
                    <?php if(isset($error)){echo $error;}?>
                </strong>
                <div class="msg">
                    php success or error mesage will come here...
                </div>
			</div>
		</div>