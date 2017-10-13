<?php

$image = 'image/';
$like  = '<img class="like" src="image/like.png" />';
$posts = [ 
	[
		'name_user' => 'Семёнов Олег',
		'avatar' => 'avatar1.jpg',
		'date_post' => 'Два часа назад',
		'image' => 'image1.jpg',
		'counter_like' => '51',
		'hash_tags' => '#Отлично настроение #эмоция #зубы',	
	],
	[
		'name_user' => 'Александ Семёнов',
		'avatar' => 'avatar2.jpeg',
		'date_post' => '3 часа назад',
		'image' => 'image2.jpg',
		'counter_like' => '11',
		'hash_tags' => '#Отлично настроение #эмоция #зубы',	
	],
];

$no_search = true;
?>

<div id="content">

	<?php for ($i = 0; $i < count($posts); $i++) { ?>

		<?php

		// поиск постов
		// если передана строка ив посте она НЕ встречается, то пропустить этот пост
		
		if(
			!empty($_REQUEST['search'])
			&& 
			strpos( $posts[$i]['name_user'], $_REQUEST['search']) === false
			&&
			strpos( $posts[$i]['hash_tags'], $_REQUEST['search']) === false
		){
		
			continue;
		}

		$no_search = false;
		?>
			<div class="content_user">
				<div class="content_header"> 
					<img class="avatar" src="image/<?php echo $posts[$i]['avatar'] ?>"/>  		
					<?php echo $posts[$i]['name_user']; ?>
					<p><?php echo $posts[$i]['date_post']; ?></p>
				</div>
				<div>
					<img class="foto" src="<?php echo $image . $posts[$i]['image'] ?>"/> 
				</div>	  		
					<div class="content_footer">
		  			<img class="like" src="image/like.png" /> 22
			  		<p>#Отлично настроение #эмоция #зубы</p>
		  			</div>
		    	</div>
	<?php }
		if($no_search == true){
		echo '<div><h2>К сожалению то, что вы искали, не найдено!</h2></div>';
		}
		?> 
</div>