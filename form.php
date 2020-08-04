<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo 'Before connection'; 
    $link = mysqli_connect("mars.cs.qc.cuny.edu", "fede7739", "15347739", "fede7739") or die(mysql_error());
    echo 'After connection'; 

    echo '1';
 $username = $_POST['username'] ?? '';
 echo '2';
 $email = $_POST['email'] ?? '';
 echo '3';
 $password = md5($_POST['password']) ?? '';
 echo '4';

 $sql = "SELECT username FROM sweepersofmine WHERE username = '$username'";
 echo '5';

    if ($result = mysqli_query($link, $sql)) {
        echo '6';
        if (!mysqli_num_rows($result)) {
            echo '7';
            $_SESSION["logged_in"] = true;
            echo '8';
            $_SESSION["username"]  = $username;
            echo '9';

            $sql = ("INSERT INTO sweepersofmine (username, email, password) VALUES ('$username', '$email', '$password')");
            echo '10';

            if (mysqli_query($link, $sql)) {
                echo '11';
              Print '<script>alert("Succesfully Registered!, click OK to redirect to dashboard page...");</script>'; // Prompts the user
              echo '12';
            }
            echo '13';
        } else {
            echo '14';
            Print '<script>alert("Username Taken...");</script>';
            echo '15';
        }
        echo '16';
    }
    echo '17';
}
echo '18';


 ?>