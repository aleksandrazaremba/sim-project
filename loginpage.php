<?php

?>

<div class="main-content pre-content loginpage">
    <div class="loginpage-content loginpage-container">
        <form method="POST" action="checkLogin.php">
            <div class="loginpage-container">
                <h1>Login</h1>
                <p>Please fill in this form to login.</p>
                <hr>
                <label for="username"><b>Username: </b></label>
                <input type="text" name="username" placeholder="Username"><br>
                <label for="password"><b>Password:</b></label> 
                <input type="password" name="password" placeholder="Password"><br>
                <input type="submit" value="Login" name="login" class="registerbtn">
            </div>
        </form>

         <form action="/action_page.php">
            <div class="loginpage-container">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                 <hr>

                      <label for="email"><b>Email</b></label>
                      <input type="text" placeholder="Enter Email" name="email" required>

                     <label for="psw"><b>Password</b></label>
                     <input type="password" placeholder="Enter Password" name="psw" required>

                      <label for="psw-repeat"><b>Repeat Password</b></label>
                      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

 <input type="radio"  name="Account" value="User"> I am user<br>
  <input type="radio" name="Account" value="Obstetrician"> I am Obstetrician<br>
  <input type="radio" name="Account" value="Investigator" checked> I am Investigator<br><br>



                  <hr>
                  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                      <button type="submit" class="registerbtn">Register</button>
             </div>
        </form>
    </div>
</div>
    
            