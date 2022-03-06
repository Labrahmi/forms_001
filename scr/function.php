




<?php
    if(isset($_POST['name_user']) && isset($_POST['name_email']) && isset($_POST['name_password']) && isset($_POST['name_date'])){
        $user = $_POST['name_user'];
        $email = $_POST['name_email'];
        $pass = $_POST['name_password'];
        $date = $_POST['name_date'];
        echo "| User: $user | Password: $pass | Email: $email | Date: $date |";
    }
?>
















