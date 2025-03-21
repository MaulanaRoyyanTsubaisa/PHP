<?php

use Core\Validator;
use Core\App;
use Core\Database;


$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if (!Validator::email($email, )) {
    $errors['email'] = "Email is not valid";
}
if (!Validator::string($password, 7, 255)) {
    $errors['password'] = "Password is not valid";
}

if (!empty($errors)) {
    view("registration/create.view.php", [
        'heading' => 'Register',
        'errors' => $errors
    ]);
    return;
}
$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {
    header('Location: /');
    exit();

} else {
    $db->query('insert into users (email, password) values (:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

}

login($user);
header('Location: /');
exit();



?>