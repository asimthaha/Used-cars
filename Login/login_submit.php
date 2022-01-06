<?php
    include "../connection.php";
    $conn = mysqli_connect ($servername , $username , $password, "used cars_db") or die("unable to connect to host");  
    session_start();
    // echo $_GET['Email'];
    if (isset($_GET['Email']) && isset($_GET['Password'])){
        $email = mysqli_real_escape_string($conn, $_GET['Email']);
        $password = mysqli_real_escape_string($conn, $_GET['Password']);

        $query = "SELECT * FROM user_table WHERE email='$email' and password='$password'";
        $users = mysqli_query($conn, $query);
        if (mysqli_num_rows($users) == 0) {
            ?>
                <script>
                    alert('User not found');
                    location.href = 'index.php';
                </script>
            <?php
        } else {
            while ($row = mysqli_fetch_array($users)) {
                $_SESSION['Name'] = $row['Name'];
                $_SESSION['Id'] = $row['Id'];
                header("location: ../Home page.php");
                // header("location: ../dashboard.php"); 
                die();
            }
        }
    }
?>