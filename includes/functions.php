<?php

function connectToDB() {
    $host = 'devkinsta_db'; 
    $dbname = 'studygroup_Feedback_Form'; 
    $dbuser = 'root';
    $dbpassword = 'GObT0SaYlthXkrat'; 

    $database = new PDO (
        "mysql:host=$host;dbname=$dbname",
        $dbuser,
        $dbpassword
    );

    return $database;
}

function isUser() {
    if ( isset( $_SESSION['user']['role'] ) && $_SESSION['user']['role'] === 'user' ) {
        return true;
    } else {
        return false;
    }
}