<?php 
$name = 'Denis';
var_dump($name);

$students = [
	'Sergey',
	'Igor',
	'Anastsia',

];

echo '<li>'.$students[0].'</li>';
echo $students[1];
echo $students[2];

$post = [
	'author' =>'Sergey',
	'name_post' => 'Name post',
	'last_seen' => '2 часа назад',
	'content' => 'Text text ',
	'post_date' => '01.01.1970',	
	'avatar' => 'Name post',
	'foto' => '246b.jpg',
	'like' => 22,
	'hash' => ['еда', 'жизнь', 'что-то'],

	'comments'=> [
		'comment1',
		'comment2',
		'comment3',
	],
];



echo $post['comments'][0];
var_dump($post);
echo implode(', ', $post['comments']);

for ($i = 0; $i < count($students); $i++ ){
	echo  '<li>' . $students[$i] .'</li>';
}

foreach($post as $key => $value) { // 
	echo  '<li>' . $key .' == ' . $value .'</li>';
	break;
}
$date =date('Hi');
$date += 300;
if($date < 2145){
echo 'Идет занятие';
}elseif ($date <2200){
echo 'Занятие заканчивается';
}else{
echo 'Занятие закончилось';	
}

?>