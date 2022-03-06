<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>training - 001</title>
    <style>
        body{
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            text-align: center;
        }
        .container{
            width: 50%;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <form action="function.php" method="post">
            <fieldset>
                <legend>UserName</legend>
                <input name="name_user" type="text">
            </fieldset>
            <!-- -- -->
            <fieldset>
                <legend>Email</legend>
                <input name="name_email" type="email">
            </fieldset>
            <!-- -- -->
            <fieldset>
                <legend>Password</legend>
                <input name="name_password" type="password">
            </fieldset>
            <!-- -- -->
            <fieldset>
                <legend>Date</legend>
                <input name="name_date" type="date">
            </fieldset>
            <!-- -- -->
            <fieldset>
                <input type="submit" value="submit">
                <input type="reset" value="clear">
            </fieldset>
        </form>
    
    </div>
    
</body>
</html>