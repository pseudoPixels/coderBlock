<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<title>Site-o-Matic Tutorials: Ajax Image Upload Demo</title>
    </head>
    <body>

<script type="text/javascript" src="http://site-o-matic.net/js/lib/jquery.js"></script>

<style>
    div#ajax_upload_demo iframe {
	position:fixed;
	left:-9000px;
	width:1px;
	height:1px;
    }
    div#ajax_upload_demo img {
	max-width:150px;
	max-height:150px;
    }
</style>

<script type="text/javascript">
function check(form, t) {
var txt=t;
var obj=form.textarea1;

    obj.value+=txt;
    

}
</script>

<script type='text/javascript'>
    $(document).ready(function(){
	$('#image_upload_form').submit(function(){
	    $('div#ajax_upload_demo img').attr('src','loading.gif');
	});
	$('iframe[name=upload_to]').load(function(){
	    var result = $(this).contents().text();
	    if(result !=''){
		if (result == 'Err:big'){
		    $('div#ajax_upload_demo img').attr('src','avatar_big.jpg');
		    return;
		}
		if (result == 'Err:format'){
		    $('div#ajax_upload_demo img').attr('src','avatar_invalid.jpg');
		    return;
		}
		$('div#ajax_upload_demo img').attr('src',$(this).contents().text());
	    }
	});
    });
</script>
<body>
<?php

//$target_Path = "imagesT/";
if(!empty($_POST['h'])){
 $url = "this is url";
$target_Path = $target_Path.basename( $_FILES['image']['name'] );
move_uploaded_file( $_FILES['image']['tmp_name'], $target_Path );
}

?>

<div id='ajax_upload_demo'>
    <form id='image_upload_form'  method='post' enctype='multipart/form-data' action='' target='upload_to'>
	<p>Upload avatar</p>
	<textarea>hello golam </textarea>
	<p><img src='avatar_no.jpg' /></p>
	<p><input type='file' id='file_browse' name='image'/> <input type='submit' name='h' value='Submit'></p>
    </form>
    <iframe name='upload_to'>
    </iframe>
	
	<form action="#" name="form1" enctype="multipart/form-data">
   <fieldset><legend>form</legend>
    <input type='file' name='userFile'><br>
    <textarea rows="10" cols="20" name="textarea1">
      
    </textarea>
    <button type="button" onclick="check(this.form, 'mostaeen');">add/delete</button>
</fieldset>
</form>
</div>
    </body>
</html>