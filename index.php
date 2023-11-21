<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <form method = "POST" autocomplete = "off" action="">
        <div class="container col-6">
            <div class="fs-3 text-center">User Registration</div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <div class="form-label" for="f_name">First name : </div>
                        <input class="form-control" type="text" id="f_name" name="f_name">
                    </div>
                </div>
                <div class="col ">
                    <div class="mb-3">
                        <div class="form-label" for="l_name">Last name : </div>
                        <input class="form-control" type="text" id="l_name" name="l_name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3">
                    <div class="form-label" for="user_name">User name : </div>
                    <input type="email" placeholder="type email here" class="form-control" id="user_name" name="user_name">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <div class="form-label">Create password : </div>
                        <input type="password" class="form-control" id="create_passwd" name="create_passwd">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <div class="form-label">Confirm password : </div>
                        <input type="password" class="form-control" id="conf_passwd" name="conf_passwd">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-lg">Register </button>
            </div>
            <P>already have an account ? <a href="login.php">login</a> </P>
        </div>
    </form>

    <?php
        $first_name = $last_name = $user_email = $user_password = null;
        $errors = array();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $first_name = validationLetters($_POST['f_name']);
            $last_name  = validationLetters($_POST['l_name']);
            $user_email = validationEmail($_POST['user_name']);
            $user_password = validationPassword($_POST['create_passwd'], $_POST['conf_passwd']);

            if ($first_name != null && $last_name != null && $user_email != null && $user_password != null) {
                $Server = "localhost";
                $username = "root";
                $password = "";
                $dbname = "quize_game";

                $con = new mysqli($Server, $username, $password, $dbname) or die("unable to connect database");
                $sql = "INSERT INTO user_info VALUES($first_name, $last_name, $user_email, $user_password)";  

                if ($con -> query($sql) === TRUE) {
                    echo "<h1> Registered successfully </h1>";
                }else {
                    echo "<h1> already registered </h1>";
                }
        
            }else {
                if ($first_name == null) {
                    array_push($errors, "Invalid first name");
                }
                if ($last_name == null) {
                    array_push($errors, "Invalid last name");
                }
                if ($user_email == null) {
                    array_push($errors, "Invalid email");
                }
                if ($user_password == null) {
                    array_push($errors, "Password mismatch");
                }
                foreach ($errors as $error) {
                    echo "<p class=text-center text-danger>.$error.</p>";
                }
            }
        }

        function validationLetters($data){
            if(ctype_alpha($data)){
                return $data;
            }
        }

        function validationEmail($data){
            if(filter_var($data, FILTER_VALIDATE_EMAIL)){
                return $data;
            }
        }

        function validationPassword($data_1,$data_2){
            if($data_1 == $data_2){
                return $data_1;
            }
        }
    ?>
</body>
</html>