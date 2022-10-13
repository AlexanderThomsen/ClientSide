<?php
require 'includes/dbh.inc.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userEmail =  $_POST['userEmail'];
    $userPwd = $_POST['userPwd'];

    $trimedUserEmail = trim($userEmail);
    $trimedUserPwd = trim($userPwd);

    $sql = 'SELECT userID, userPwd FROM Users WHERE userEmail = ?';

    if(isset($trimedUserEmail, $trimedUserPwd)){
        
        if ($stmt = $con->prepare($sql)) {
            
            $stmt->bind_param('s', $userEmail);

            $stmt->execute();

            $test = $stmt->store_result();

            if ($stmt->num_rows === 1) {

                $stmt->bind_result($userID, $userPwd2);

                $stmt->fetch();
                
                if ($userPwd == $userPwd2 ) {
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['userEmail'] = $_POST['userEmail'];
                    $_SESSION['userID'] = $userID;
                    echo 'Welcome ' . $_SESSION['userEmail'] . '!';

                    header("Location: AdminLogedInSite.php?LoggedIn");
                }else {
                header("Location: index.php?NotLoggedIn4");
                }
            }else {
                header("Location: index.php?NotLoggedIn3");
            }
        }
    }
    $stmt->close();
}