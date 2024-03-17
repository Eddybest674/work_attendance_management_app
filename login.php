<?php
session_start();
error_reporting(0);
include "inc/header.php";
include "classes/Student.php";
$stu = new Student();
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $stu->handleLogin($_POST);
  

}
?>

<div class="container">

    <div class="card">
        <div class="card-header">

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    &nbsp;
                </div>
                <div class="col-md-6">
                <div class="card-body">
            <h2 class="text text-primary text-center">Login</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" name="username" required="">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control  outline-success" name="password" required="">
                </div>
                </br>
                <div class="form-group text-center">
                    <input type="submit" name="Login" class="btn btn-primary" value="Login">
                </div>
            </form>
        </div>

                </div>
                <div class="col-md-3">
                    &nbsp;
                </div>
            </div>
        </div>
        
    </div>
</div>
<?php include("inc/footer.php"); ?>