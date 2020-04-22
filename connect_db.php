<?php 

require_once __DIR__ . '/vendor/autoload.php';

use DevStart\database;

$config = require_once 'config.php';
$db = new database($config['db']);
$insert = $db->query("INSERT INTO participant (firstname,lastname,birhday,reportsubject,country,phone,email,company,position,aboutme,photo) VALUES (:firstname,:lastname,:birhday,:reportsubject,:country,:phone,:email,:company,:position,:aboutme,:photo )",[
    'firstname' => 'Artem ' .uniqid(),
    'lastnametname' => 'Artem ' .uniqid(), 
    'birhday' => 'Artem ' .uniqid(), 
    'reportsubject' => 'Artem ' .uniqid(), 
    'country' => 'Artem ' .uniqid(), 
    'phone' => 'Artem ' .uniqid(), 
    'email' => 'Artem ' .uniqid(), 
    'company' => 'Artem ' .uniqid(), 
    'position' => 'Artem ' .uniqid(), 
    'aboutme' => 'Artem ' .uniqid(), 
    'photo' => 'Artem ' .uniqid(),  
]);

if($insert>0){
    print 'Succesfull';
}

?>