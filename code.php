<?php
    ob_start();
    date_default_timezone_set('Asia/Baku');

    require_once 'db.php';

    $db = new DBConnection;

    require_once 'class.php';

    $CRUD = new CRUD;

    $exam = $CRUD->Select("qeydiyyat",1);
    if(isset($_POST["save"])){
        $col = "
            name=:n,
            gender=:g,
            dateofbirth=:d,
            email=:email,
            city=:city,
            country=:country
        ";

        $arr = [
            'n'=> $_POST['name'],
            'g'=> $_POST['gender'],
            'd'=> $_POST['date'],
            'email'=> $_POST['email'],
            'city'=> $_POST['city'],
            'country'=> $_POST['country']
        ];
        $CRUD->Insert("qeydiyyat",$col,$arr) ? header("Location:index.php?status=ok") : header("Location:index.php?status=no");
    }
    if(isset($_POST["cancel"])){
        header("Location:index.php");
    }

?>