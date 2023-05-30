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