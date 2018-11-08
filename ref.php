<html>
  <head></head>
  <body>
    <form method="post" action="" enctype="multipart/form-data" target="leiframe">
      <input type="file" name="image"/>
      <input type="submit" value="upload"/>
    </form>
    <iframe name="leiframe" width="200" height="200"></iframe>
	<?php

 // I'm skipping a lloooot of verification steps on the file here.
 // Also, I'm assuming you uploaded a jpg.
$target_Path = "imagesT/";
$target_Path = $target_Path.basename( $_FILES['userFile']['name'] );
 move_uploaded_file($_FILES['image']['tmp_name'],$target_Path );
?>
  </body>
</html>