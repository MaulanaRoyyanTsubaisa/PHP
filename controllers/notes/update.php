<?php 
use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUser = 1;



$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrfail();

authorize($note['user_id'] === $currentUser);

$errors = [];

if (!Validator::string($_POST['body'], 1, 250)) {
    $errors['body'] = 'Body tidak boleh kosong dan lebih dari 250 karakter';
    # code...
}

if(count($errors)) {
    return view("notes/edit.view.php", [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note,
    ]);
}
$db->query('update notes set body = :body where id = :id', [
    'body' => $_POST['body'],
    'id' => $_POST['id']
]);
header('Location: /notes');
exit();

?>