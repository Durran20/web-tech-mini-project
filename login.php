<?php

    include "logic.php";
    
    // Login
    if(isset($_REQUEST['login'])) {
        
        $user1 = "Durran";
        $user2 = "Ayushi";
        $passkey = "12345";

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == $user1 || $username == $user2) {
            if ($password == $passkey) {
                header("Location: create.php");
            } else {
                echo "Error";
            }
        } else {
            echo "Error";
        }

    }

?>
<style>
<?php

include "styles.css";

?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>
            <form method="POST">
              <div class="form-outline form-white mb-4">
                <input type="text" name="username" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Username</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" name="login">Login</button>
              </form>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>