<?php
require 'Validator.php';

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create New Note';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];


    if (!Validator::string($_POST['body'], 1, 250)) {
        $errors['body'] = 'Body tidak boleh kosong dan lebih dari 250 karakter';
        # code...
    }
    if (empty($errors)) {
        $db->query('insert into notes (body, user_id) values (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}
;



# code...
require 'views/notes/create.view.php';
?>