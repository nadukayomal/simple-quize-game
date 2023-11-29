<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="welcome.css">
        <title>Welcome page</title>
    </head>
    <body>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="https://icons8.com/icon/83190/user" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    User name   <!-- this should be name coming from the login page -->
                </a>
            </div>
        </nav>

        <div class="container text-center topic">Please select the subject you like</div>

        <div class="container overflow-hidden text-center">
            <div class="row gy-5">
                <div class="col-6">
                    <div class="p-5 sub-maths"><a href="./subject_pages/maths.php">Maths</a></div>
                </div>
                <div class="col-6">
                    <div class="p-5 sub-physics"><a href="./subject_pages/physics.php">Physics</a></div>
                </div>
                <div class="col-6">
                    <div class="p-5 sub-ict"><a href="./subject_pages/ict.php">ICT</a></div>
                </div>
                <div class="col-6">
                    <div class="p-5 sub-science"><a href="./subject_pages/science.php">Science</a></div>
                </div>
            </div>
        </div>

    </body>
</html>