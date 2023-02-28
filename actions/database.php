<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=AutoBlog_bdd;charset=utf8;', 'root', 'root');
}catch(Exception $e){
    die('An error was found : ' . $e->getMessage());
}