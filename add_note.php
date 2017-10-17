<?php require('header.php'); ?>
<?php //var_dump($_SERVER); ?>
<?php if(!empty($_FILES['file_name'])){

//var_dump($_FILES['file_name']['name']);
	// функции работы с массивами и строками
move_uploaded_file($_FILES['file_name']['tmp_name'], 'add_images/'. $_FILES['file_name']['name']);
echo 'Поздравляем! Ваша фотография добавлена!</ br><div><img src="add_images/' . $_FILES['file_name']['name'] . '"</div><hr/>';

}else{


} 

?>
<div id="form">
	<form enctype="multipart/form-data" method="post" action="add_note.php">
		<label>Ваше имя: <input type="text" name="name_author" placeholder="Введите имя"></label><br />
		<label>Ваш комментарий:<textarea name="comment"></textarea></label><br />
		<label>Добавьте ваш файл:<input type="file" name="file_name" /></label><br />
		<input type="submit" value="отправить">	
	</form>
</div>
