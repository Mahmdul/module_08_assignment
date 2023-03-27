<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <h1>Signup</h1>
    <?php require 'partials/_nav.php'?>
    <div class="container">
        <h1>Please sign up here!</h1>
    </div>
    <form action="/loginsystem/signup.php" method="post">
    <div class="mb-3">
    <label for="email" class="form-label">First name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name = "fname" aria-describedby="emailHelp">
  </div>   
  <div class="mb-3">
    <label for="email" class="form-label">Last name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name = "lname" aria-describedby="emailHelp">
  </div>    
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name = "email" aria-describedby="emailHelp">
  </div> 

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name = "passsword">
  </div>
  <div class="mb-3">
    <label for="confirm password" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name = "cpassword">
  </div>
  <div id="emailHelp" class="form-text">Make sure to type the same password here.</div>
  </div>

  <button type="submit" class="btn btn-primary">Signup</button>
</form>
    


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>