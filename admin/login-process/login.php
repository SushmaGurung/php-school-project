<?php
require ("connection/config.php");

        if (isset($_POST['email'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($email != "" && $password != "") {
                $query = "SELECT *FROM users WHERE  email='$email' AND password='$password'";
                $result = mysqli_query($con, $query);

                // if ($result) {
                //     echo "data yes";
                // } else {
                //     echo "data not";
                // }

                $data = mysqli_num_rows($result);
                if ($data == 1) {
                    $row = $result->fetch_assoc();

                    session_start();
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['name'] = $row['name'];

                    echo Header("Location:home.php?msg=login_success");
                } else {
                    echo Header("Location:index.php?msg=login_fail");
                }
            } else {
                echo "Enter email and password to login";
            }
        }

        ?>