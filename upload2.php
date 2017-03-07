<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Subir archivos al servidor</title>
<meta name ="author" content ="Norfi Carrodeguas">
<style type="text/css" media="screen">
body{font-size:1.2em;}
</style>
</head>
<body>
	<div id="form"></div>
<form enctype='multipart/form-data' action='' method='post'>
	<input type="hidden" name="MAX_FILE_SIZE" value="200000" />
<input name='uploadedfile' type='file'><br>
<input type='submit' value='Subir archivo'>
</form>

<!-- <form enctype="multipart/form-data" action="uploader.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="200000" />
<input name="uploadedfile" type="file" />
<input type="submit" value="Subir archivo" />
</form> -->

<?php 
$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) 
{ 
echo "<span style='color:green;'>El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido</span><br>";
}else{
echo "Ha ocurrido un error, trate de nuevo!";
} 
?>
<?php
echo "<img src='uploads/$file_name' >";
?>

</body>
</html>