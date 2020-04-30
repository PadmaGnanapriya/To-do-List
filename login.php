<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="screen">
                <div class="d-flex justify-content-center form_container">
                    <form>
                        <h1>Welcome To-Do List!</h1>
                        <h2>Sign In</h2>
                        <hr class="mb-4">

                        <div class="input-group mb-3">
                            <label for="exampleInputUsername1">Username</label>
                            <input type="text" name="username" class="form-control input_user" id="username" required>
                        </div>

                        <div class="input-group mb-3">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control input_pass" id="password" required>
                        </div>
                       
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                            </div>
                        </div>
                    
                        <div class="d-flex justify-content-center mt-3 button_container">
                            <button type="button" name="button" id="login" class="btn login_btn">Login</button>
                        </div>
                    
                        <div class="mt-4">
                            <div class="d-flex justify-content-center mt-3 link1">
                                Don't have an account? <a href="register.php" class="ml-2">Sign Up</a>
                            </div>
                            <div class="d-flex justify-content-center link2">
                                <a href="#">Forgot your password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>