<?php

function validateData(){

    $isValid = true;
    if (isset($_POST['fname'])){
        $fname = $_POST['fname'];
    }
    if (isset($_POST['lname'])){
        $lname = $_POST['lname'];
    }
    if (isset($_POST['method'])){
        $method = $_POST['method'];
    }
    if (isset($_POST['job-title'])){
        $job_title = $_POST['job-title'];
    }
    if (isset($_POST['company'])){
        $company = $_POST['company'];
    }
    if (isset($_POST['linkedin'])){
        $linkedin = $_POST['linkedin'];
    }
    if (isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if (isset($_POST['otherTextBox'])){
        $other = $_POST['otherTextBox'];
    }
    if (isset($_POST['comment'])){
        $comment = $_POST['comment'];
    }
    if(!$isValid){
        return;
    }
}
