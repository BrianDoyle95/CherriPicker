<?php
if(!empty($_POST["rating"]) && !empty($_POST["post_id"])) {
	require_once("dbmanager.php");
	$db_handle = new DBManager();
	$query ="UPDATE posts SET rating='" . $_POST["rating"] . "' WHERE post_id='" . $_POST["post_id"] . "'";
	$result = $db_handle->updateQuery($query);
}
?>