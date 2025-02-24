<?php


$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Notes';
$currentUser = 1;

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrfail();

authorize($note['user_id'] === $currentUser);


// var_dump($ notes);
// var_dump($notes);


require "views/notes/show.view.php"



























    ?>