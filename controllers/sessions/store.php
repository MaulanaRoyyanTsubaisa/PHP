<?php

use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if (!Validator::email($email, )) {
    $errors['email'] = "Email is not valid";
}
if (!Validator::string($password)) {
    $errors['password'] = "Password is not valid";
}

if (!empty($errors)) {
    return view("sessions/create.view.php", [
        'errors' => $errors
    ]);

}

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();



if ($user) {
    if (password_verify($password, $user['password'])) {
        login(['email' => $email]);
        header('Location: /');
        exit();
    }

}

login([
    'email' => $email
]);