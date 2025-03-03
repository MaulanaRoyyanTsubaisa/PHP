<?php

use Core\Validator;

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['body'], 1, 250)) {
    $errors['body'] = 'Body tidak boleh kosong dan lebih dari 250 karakter';
    # code...
}

if (!empty($errors)) {
    return view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => $errors,

    ]);
}
$db->query('insert into notes (body, user_id) values (:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => 1
]);
header('Location: /notes');
exit();

?>