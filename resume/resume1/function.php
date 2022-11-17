<?php
if (isset($_POST["Submit"])) {

    $FullName = $_POST['FullName'];
    $profition = $_POST['profition'];
    $ABOUT = $_POST['ABOUT'];
    $DOB = $_POST['DOB'];
    $Gender = $_POST['Gender'];
    $Marital_state = $_POST['Gender'];
    $Nationality = $_POST['Nationality'];
    $Education = $_POST['Education'];
    $Certifications = $_POST['Certifications'];
    $TRAINING = $_POST['TRAINING'];
    $LANGUAGE = $_POST['language'];
    $SKILLS = $_POST['skill'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    if (isset($_POST["fullname"])&&!empty($_POST["fullname"])) {
        echo Test_User_Input($_POST["fullname"]);
    } else {
       echo "you need to enter the name";
    }
    if (isset($_POST["profition"])&&!empty($_POST["profition"])) {
        echo Test_User_Input($_POST["profition"]);
    } else {
       echo "you need to enter the profition";
    }
    if (isset($_POST["ABOUT"])&&!empty($_POST["ABOUT"])) {
        echo Test_User_Input($_POST["ABOUT"]);
    } else {
       echo "you need to enter the ABOUT";
    }
}
function Test_User_Input($Data)
{
    return $Data;
}
