<html >
<head>



<script type="text/javascript">
function check(form, t) {
var txt=t;
var obj=form.textarea1;

    obj.value+=txt;
    

}
</script>

</head>
<body>

<form action="#" name="form1" enctype="multipart/form-data">
<fieldset><legend>form</legend>
    <input type='file' name='userFile'><br>
    <textarea rows="10" cols="20" name="textarea1">
    
    </textarea>
    <button type='button' onclick="check(this.form, 'mostaeen');">add/delete</button>
</fieldset>
</form>

<?php

$target_Path = "imagesT/";
$target_Path = $target_Path.basename( $_FILES['userFile']['name'] );
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );

?>



</body>
</html>