<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="screen">
                <div class="d-flex justify-content-center form_container">
                    <form>
                        <h1>Hello!</h1>
                        <h2>Sign Up</h2>
                        <hr class="mb-4">

                        <div class="input-group mb-3">
                            <label for="username">Username</label>
                            <input type="text" class="form-control input_user" name="username" id="username" required>
                        </div>

                        <div class="input-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control input_user" name="password" id="password" required>
                        </div>

                        <div class="input-group mb-3">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control input_user" name="email" id="email" aria-describedby="emailHelp" required>
                        </div>
                        <small>We'll never share your email with anyone else.</small>
                        
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
            
                        <div class="d-flex justify-content-center mt-3 button_container">
                            <button type="submit" name="create" class="btn reg_btn" id="register">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>