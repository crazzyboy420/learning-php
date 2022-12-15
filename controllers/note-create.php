<?php
require 'validator.php';
$config = require("config.php");
$db = new Database($config["database"],'root','');


if($_SERVER['REQUEST_METHOD']==='POST'){
    $errors = [];
    if(!Validator::string($_POST['body'],1,200)){
        $errors['body'] = 'A body field is required';
    }

    if(strlen($_POST['body'])>100){
        $errors['body'] = 'Body can not be more then 100 charecters';
    }

   if(empty($errors)){
    $db->query("INSERT INTO `notes` (body, user_id) VALUES
    (:body, :user_id)",[
        'body' => $_POST['body'],
        'user_id' => 1
    ]);
    $_POST['body'] = '';
   }
}

$heading = "Create Note";
require "view/note-create.view.php";