<?php


$config = require('config.php');

$db = new Database($config['database']);

$notes = $db->query('select * from notes where user_id = 1')->get();

// var_dump($notes);
// var_dump($notes);


$heading = 'Notes';
require "views/notes/index.view.php"



























    ?>