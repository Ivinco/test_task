<?php
$m = new mysqli('127.0.0.1', 'root', 'pass', 'hn', '3307');
while (true) {
	echo date('c')."\n";
	$res = $m->query("select comment_ranking, sum(story_comment_count+author_comment_count) c from hackernews where comment_ranking in (30,31,32) group by comment_ranking");
	while ($row = $res->fetch_assoc()) {
		print_r($row);
	}
}