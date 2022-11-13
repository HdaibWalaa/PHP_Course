<?php 
require './header.php';
include './includes/env.php';
$EmailError="";
$PasswordError="";

if(isset($_POST["Submit"])){
    
    if(empty($_POST['Email'])){
        $EmailError="Email is requierd";
    }else{
        $Email=Test_User_Input($_POST['Email']);
        if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email)){
            $EmailError="Invalid Email Format";

        }
    }
    if(empty($_POST['Password'])){
        $PasswordError="Password is requierd";
    }else{
        $Namne=Test_User_Input($_POST['Password']);
    }
}
function Test_User_Input($Data){
    return $Data;
}
?>

<div class="container p-5">
    <h1 class="text-center ">Login Form</h1>

    <div class="my-5 d-flex justify-content-center align-items-center">
    </div>

    <div class="d-flex justify-content-center align-items-center">

        <form class="w-50" method="POST" action="./home.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                E-mail:<br>
                <input type="email" Name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <span class="Error">*<?php echo $EmailError; ?></span><br>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="Password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>


<?php require './footer.php'; ?>