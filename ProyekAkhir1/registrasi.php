<?php
require 'inc/inc_koneksi.php';
if(isset($_POST["register"])){
    if(registrasi($_POST) > 0 ){
        ECHO "<script>
        alert('user baru berhasil ditambahkan');
        </script>";
    } else{
        echo mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="css/regis.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" class="form-control @error('name') is-invalid 
             @enderror" required>
            
            <div class="invalid-feedback">
           
            </div>
           
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" class="form-control @error('username') is-invalid 
             @enderror" required>
           
            <div class="invalid-feedback">
           
            </div>
         
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" class="form-control @error('email') is-invalid 
             @enderror" required>
           
            <div class="invalid-feedback">
         
            </div>
           
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" name= "phone" placeholder="Enter your number"class="form-control @error('phone') is-invalid 
             @enderror" required>
            
            <div class="invalid-feedback">
            </div>
            
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name = "password" placeholder="Enter your password" class="form-control @error('password') is-invalid 
             @enderror"required>
            
            <div class="invalid-feedback">
            
            </div>
          
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name ="register" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
