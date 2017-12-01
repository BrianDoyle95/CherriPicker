<?php

require_once 'app/init.php';

if(isset($_GET['event'], $_GET['rating'])) {

	$event = (int)$_GET['event'];
	$rating = (int)$_GET['rating'];

	if(in_array($event, [1, 2, 3, 4, 5])) {

		$exists = $db->query("SELECT id FROM events WHERE id = {$event}")->num_rows ? true : false;

		if($exists) {
			$db->query("INSERT INTO events_ratings (event, rating) VALUES ({$event}, {$rating})");
		}

	}

	header('Location: event.php?id=' . $event);
}
?>