<?php 
    session_start();

    /*check login validate*/
    if(isset($_POST['submit'])){
        $usersAcc = array(
            "john" => "123456",
            "bob" => "214365",
            "mary" => "654321"
        );
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        /* Check Username and password */
        if (isset($usersAcc[$username]) && $usersAcc[$username] == $password){
            $_SESSION['userData']['username'] = $usersAcc[$username];
            header("location: ../profile.php");
            exit;
        } else {
            header("location: ../index.php?login=failed");
        }
    }
?>
