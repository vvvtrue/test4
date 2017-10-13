<?php 

if(!empty($_GET['search'])){
	$search = $_GET['search'];
}else{	
$search = 'anonym';
}

//$varibal = <ghjdthrf ? если да : если нет>
echo 'Hello, ' . $search . '!';

//var_dump($_SERVER);


?>

<form action = "" method = "post">
	<input type="text" name="search" value="<?php echo @$_POST['search'];?>"/>
	<input type="submit" value="SEARCH!" /d>
</form>