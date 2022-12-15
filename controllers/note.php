<?php
$config = require("config.php");
$db = new Database($config["database"],'root','');
$note = $db->query("SELECT * FROM notes WHERE id=:id",[
    "id"=>$_GET['id'],
])->findOrFail();

$heading = "Note";
$currentUserId = 1;

authorize($note["user_id"] !== $currentUserId);

require "view/note.view.php";