<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
            <div class="d-grid col-6 mx-auto">
                <button type="submit" class="btn btn-primary">Register </button>
            </div>
            
            <!-- this is login button -->
            <br>
            <div>
                <div class="btn btn-primary">log in</div>
            <div class="d-grid col-2 mx-auto">
            </div></div>
        </div>
    </form>
</body>
</html>