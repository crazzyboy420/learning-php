<?php
$config = require("config.php");
$db = new Database($config["database"],'root','');
$notes = $db->query("SELECT * FROM notes WHERE user_id = 1")->all();

$heading = "My Notes";
require "view/notes.view.php";