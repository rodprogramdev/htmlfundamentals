<?php

if(isset($_POST['submit'])){

    require 'database.php';


    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $pswRepeat = $_POST['psw-repeat'];



    //ERROR HANDLERS - EMPTY FIELDS

      if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($pswRepeat)) {
        header("Location: ../signup.html?error=emptyfields&firstname=".$firstname."&lastname=".$lastname."&mail=".$email);
        exit();
      }
    /*
    else if(!filter_var($email, $FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $firstname) && !preg_match("/^[a-zA-Z0-9]*$/", $lastname)){
        header("Location: ../signup.html?error=invalidmailfirstname");
        exit();
    } 
     else if(!filter_var($email, $FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.html?error=invalidmail&firstname=".$firstname."&lastname=".$lastname);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $firstname, $lastname)) {
        header("Location: ../signup.html?error=invalidfname&lname&mail=".$email);
        exit();
    }*/
      else if($password !== $pswRepeat) {
        header("Location: ../signup.html?error=passwordcheckfname=".$firstname."&lname=".$lastname."&mail=".$email);
        exit();
      }
 //if the user is already taken error handler TAKE NOTE OF PREPARED STATEMENT for SQL injections //
        else{
        $sql = "SELECT email FROM users WHERE email=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Locaton: ../signup.php?error=sqlerror");
            exit();
        }
        //Pass in information from user 
          else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Locaton: ../signup.php?error=emailtaken");
                exit();
            }
            else{
                $sql = "INSERT INTO users (fname,lname,email,pwd) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Locaton: ../signup.php?error=sqlerror");
                    exit();
                }
                else{
                    //take note of hashing methods Bcrypt
                    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $hashPassword);
                    mysqli_stmt_execute($stmt);
                    header("Locaton: ../signup.php?signup=success");
                    exit();
                    
                }
            }
        }

    }
     mysqli_stmt_close($stmt);
     mysqli_close($conn);
 
    
 


 }

  else {
    header("Location: ../signup.html");
    exit();

}

//CLose mysqli to save resources. To ensure the website will not be running unnecessary resources. 
