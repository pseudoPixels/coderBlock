
<html lang="en">
<head>
<form action='' method='POST' enctype='multipart/form-data'>
<input type='file' name='userFile'><br>
<input type='button' name='upload_btn' value='upload'>
</form>

<?php

$target_Path = "imagesT/";
$target_Path = $target_Path.basename( $_FILES['userFile']['name'] );
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );

?>
</body>
</html>