<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>

    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="screen1">
                    <from>
                        <div class="d-flex justify-content-center h-100">
                            <h1>To - Do List</h1>
                        </div>
                        <div class="input-group mb-4">
                            <input type="text" name="task" class="form-control task_input" required>
                            <button type="submit" class="task_btn" name="submit">Add Task</button>
                        </div>
                        <table class="table table-borderless table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Task</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>First Task</td>
                                    <td class="delete"><a href="#">x</a></td>
                                </tr>
                            </tbody>
                    </form>
                    <p>
                        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>