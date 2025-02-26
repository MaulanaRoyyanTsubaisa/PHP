<?php
require base_path('Validator.php');

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);
$errors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


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



view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors,

])
    ?>