<?php foreach($news as $news_item):
	echo "<a href='news/$news_item['slug']'><h2>".$news_item['title']."</h2></a>";
endforeach	