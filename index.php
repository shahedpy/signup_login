<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center vh-100">
            <form class="shadow w-450 p-3" action="php/signup.php" method="POST" enctype="multipart/form-data">
                <h4 class="display-4  fs-1">Create Account</h4><br>
                
                <!--==================== ERROR MESSAGE ====================-->
                <?php if(isset($_GET['error'])){ ?>
                    <div class="alert alert-danger">
                    <?php echo $_GET['error']; ?>
                    </div>
                    <?php 
                }
                ?>

                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="fname" value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">User name</label>
                    <input type="text" class="form-control" name="uname" value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass">
                </div>
                <div class="mb-3">
                    <label class="form-label">Profile Picture</label>
                    <input type="file" class="form-control" name="pp">
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
                <a href="login.php" class="link-secondary">Login</a>
            </form>
        </div>
    </body>
    </html>