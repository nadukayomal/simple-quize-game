<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        <title>User login</title>
    </head>
    <body>
        <form method = "POST" autocomplete = "off" action="">
            <div class="container col-6">
                <div class="fs-3 text-center">User Login</div>
                <div class="row">
                    <div class="mb-3">
                        <div class="form-label" for="user_name">User name : </div>
                        <input type="email" placeholder="type email here" class="form-control" id="user_name" name="user_name">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <div class="form-label" for="user_name">Password : </div>
                        <input type="password" placeholder="type password here" class="form-control" id="user_password" name="user_password">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <!-- insert external css form index.css page  -->
                    <button type="submit" class="btn btn-lg login-btn">log in</button>
                </div>
            </div>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $user_name = $_POST["user_name"];
                $user_password = $_POST["user_password"];

                if ($user_name != null && $user_password != null) {
                    $Server = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "quize_game";

                    $con = new mysqli($Server, $username, $password, $dbname);

                    if ($con->connect_error) {
                        die("Connection failed :". $con->connect_error);
                    }

                    $sql = "SELECT * FROM user_info WHERE user_email = '$user_name' AND user_password = '$user_password'";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                        // valid credential direct to another page 
                        echo "Valid username and password";
                        exit();
                    } else {
                        echo "Invalid username or password";
                    }

                    $con -> close();
                } else {
                    echo "Please enter username and password";
                }

            }
        ?>
    </body>
</html>