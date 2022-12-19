<?php

require_once '../bootstrap.php';

global $db;

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $projectname = $_POST['projectname'];
    $description = $_POST['description'];
    $link = $_POST['link'];

    //check if the inputs aren't empty
    if($username !== '' && $description !== '' && $link !== '') {

        //save to database
        $db->query('insert into projects (projectname, description, link) values (:projectname, :description, :link)', [
            'projectname' => $projectname,
            'description' => $description,
            'link' => $link,
        ]);

        header("Location: /work");

    } else {

        header('Location: /work');

    }

    exit();

}