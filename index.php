<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Backup</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
    <div class="row" style="height: 100%; width: 100%;">
        <div class="col-md-6" style="background: #0d6efd; height: 100vh;">
            <span style="  position: relative;  top: 42%; left: 40%; font-size: 25px; font-weight: bold; color: white; ">Sales Performance Evaluation System</span>
            <span style="  position: relative;  top: 35%; left: 39%; font-size: 150px; font-weight: bold; color: white; ">LOGIN</span>
        </div>
        <div class="col-6" style="background: powderred; height: 100vh;">
            <div class="form-group col-md-6" style="position: relative; top: 35%; left: 26%;">
                <div id="login-message"></div>
                <form id="login-form" action="login.php" method="post">
                    <label for="user_code" style="padding: 10px; color:gray;">Agent Code </label><br>
                    <input type="text" placeholder="Agent Code" name="user_code" id="user_code" style="width: 380px; border-radius: 10px;" class="form-control">
            </div>
            <div class="form-group col-md-6" style="position: relative; top: 35%; left: 26%;">
                <label for="password" style="padding: 10px; color:gray;">Password </label><br>
                <input type="password" placeholder="Password" name="password" id="password" style="width: 380px; border-radius: 10px;" class="form-control">
            </div>
            <div class="form-group col-md-6	" style="position: relative; top: 40%; left: 26%;">
                <button type="submit" class="btn btn-primary" style="width: 380px;">Login</button>
            </div>
            </form>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>