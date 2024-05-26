<?php
declare(strict_types=1);
function signup_input(){
    
if(isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])){
echo '<input type="text" name ="username" placeholder="Enter username" value="' .$_SESSION["signup_data"]["username"] . '" >';
}
else {
    echo '<input type="text" name ="username" placeholder="Enter username">';
}

echo '<input type="password" name="pwd" placeholder="Enter password :">';
if(isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])){
    echo '<input type="text" name="email" placeholder=" Email" value="' .$_SESSION["signup_data"]["email"] . '">';
    }
    else {
       echo '<input type="text" placeholder="Email" name="email"> ';  
    }
}
//shows the information inside our website
function check_signup_errors(){
    if(isset($_SESSION['errors_signup']))
    {
        $errors=$_SESSION['errors_signup'];
       echo "<br>";
       foreach($errors as $errors){
        echo'<p class="form-error">' . $errors .'</p>';
       }
        unset($_SESSION['errors_signup']);
    
    } else if(isset($_GET["signup"]) && $_GET["signup"]=="sucess")
    {
echo '<br>';
echo '<p class="form-sucess">Signup Sucess!</p>';

    }


}