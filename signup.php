<?php
include_once('./config/database.php');

if (!empty($_POST)){

  $fullName = $_POST['full-name'];
  $userName = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];


  // Check user already exist or not
  $sql = "SELECT * FROM users WHERE username='$userName'";
  $result = $conn->query($sql);
  $rows = $result->num_rows;

  if($rows < 1){
     // Insert Data into Table
     $defaultProPic = "/tech-blog/img/avatar.png";
    $sql = "INSERT INTO users(username, full_name, email, password, pro_pic) VALUES('$userName', '$fullName', '$email', '$password', '$defaultProPic')";

    $conn->query($sql);

    header("location: /tech-blog/login.php");
  }else{ ?>
    <script>
      alert("Username already exist !");
    </script>
  <?php }

}
?>

<?php 
include_once "./includes/header.php";
?>

<div class="container py-5">
  <h2 class="text-center">Create Your Account</h2>
  <div class="row py-5">
    <div class="col"></div>

    <div class="col col-sm-5">
      <form action="/tech-blog/signup.php" method="POST">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" name="username" id="form3Example1" class="form-control" required/>
              <label class="form-label" for="form3Example1">User Name</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text" name="full-name" id="form3Example2" class="form-control" required/>
              <label class="form-label" for="form3Example2">Full Name</label>
            </div>
          </div>
        </div>
  
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" name="email" id="form3Example3" class="form-control" required/>
          <label class="form-label" for="form3Example3">Email address</label>
        </div>
  
        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" name="password" id="form3Example4" class="form-control" required/>
          <label class="form-label" for="form3Example4">Password</label>
        </div>
  
        <!-- Submit button -->
        <button type="submit" value="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
  
        <!-- Register buttons -->
        <div class="text-center">
          <p>or sign up with:</p>
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>
  
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>
  
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>
  
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div>

        <div class='text-center mt-4'>
            <a href='/tech-blog/login.php'>Already have an account? Login Here.</a>
        </div>

      </form>
    </div>

    <div class="col"></div>
  </div>
</div>



<?php include_once ("./includes/footer.php"); ?>