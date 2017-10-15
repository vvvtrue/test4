<?php require('header.php'); ?>
<?php //var_dump($_SERVER); ?>
<?php if(!empty($_FILES['file_name'])){
echo 'YES';		
}else{
echo 'No';	
} 
var_dump($_FILES);
?>
<div id="form">
<form enctype="multipart/form-data" method="post" action="add_note.php">
<label>Добавьте ваш файл:<input type="file" name="file_name"></label><br />
<input type="submit" value="отправить">	
</form>

	<form enctype="multipart/form-data" method="post" action="add_note.php">
		<label>Ваше имя: <input type="text" name="name_author" placeholder="Введите имя"></label><br />
		<label>Добавьте ваш файл:<input type="file" name="file_name"></label><br />
		<label>Ваш комментарий:<textarea name="comment"></textarea></label> </form><br />
		<input type="submit" value="отправить">	
	</form>

</div>
