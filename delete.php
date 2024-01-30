<?php
require_once("database.php");
$id = $_GET['id'];
$sql = delete("notes",$id);
if ($sql) {
    header("Location:list_notes.php");
}
?>