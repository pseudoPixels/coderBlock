<?php

//$target_Path = "imagesT/";
$target_Path = $target_Path.basename( $_FILES['image']['name'] );
move_uploaded_file( $_FILES['image']['tmp_name'], $target_Path );

?>