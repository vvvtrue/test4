<?php

// chmod o+r<file>
/*echo get_user_name('Алексей', 'Петров' );
function get_user_name($first_name, $last_name = 'Редиска'){		
	 return trim($first_name . ' ' . $last_name);
}


$date = date('H:i:s');
	echo file_put_contents('date.txt', $date, FILE_APPEND | LOCK_EX);

*/
var_dump($_FILES);
file_put_contents('text.txt', $_FILES);
exit;

// serialise , unserialise jsone_,  json_decode(file_get_contents(test.txt))

if(!file_exists('image/photos')){
	mkdir('image/photos', 0777, true);

}

if($_FILES['photo'] && file_exists($_FILES['photo']['tmp_name'])){
	$file_name = $_FILES['photo']['name'];
	$tmp = explode('.', $file_name);
	$extension = end($tmp);
}
$allowed_exensions = ['png', 'jpg', 'jpeg', 'bmp', 'gif'];
//if($extension != 'jpg' && $extension != )


move_uploaded_file($_FILES['photo']['tmp_name'], 'add_images/' . $_FILES['name']);
?>

<form action="" method="post" enctype="multipart/from-data">
	<input type="file" name="photo" />
	<input type="submit" name="Upload!" />
</form>