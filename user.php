
<?php 
  include "admin_panel/config/dbconnect.php";

  if(isset($_POST['submit'])){
      $username=$_POST['username'];
      $email=$_POST['uemail'];
      $password=$_POST['upassword'];
      $ph=$_POST['phno'];


      $query="INSERT INTO users ('first_name', 'email', 'password', 'contact_no', `registered_at`, `isAdmin`, `user_address`) VALUES('$username','$email','$password','$ph','2024-01-02', '0', 'matepani-12')";
      mysqli_query($conn, $query);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Responsive Login and Signup Form </title>
        <link rel="icon" href="favicon-32x32.png">
        <link rel="stylesheet" type="text/css" href="user.css">
        <link rel="stylesheet" type="text/css" href="user-nav.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body>
    <header class="top-nav-section">
                <h1 data-aos="fade-right" data-aos-duration="600" data-aos-easing="linear">Aeline<span style="color: #df92c5;">.</span></h1>
    </header>
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav();">&times;</a>
                    <a href="index.php">Home</a>
                    <a href="#">About</a>
                    <a href="user.php">Login</a>
                    <a href="admin.php">Admin Login</a>
                    <a href="#">Contact</a>
                  </div>

                <p class="menu-toggle" data-aos="fade-left" data-aos-duration="600" data-aos-easing="linear">
                    <span class="menu-text">MENU</span>
                    <span style="font-size: 30px; cursor:pointer;" onclick="openNav();">&#9776;</span>
                </p>
        <section class="container forms">
        
        <div class="form login">
                <div class="form-content" data-aos="zoom-in" data-aos-duration="600" data-aos-easing="linear">
                    <header>LOGIN</header>
                    <form action="index.php">
                        <div class="field input-field">
                            <input id="username"
                            type="text"
                            name="name"
                            placeholder="Username"
                            required>
                        </div>

                        <div class="field input-field">
                            <input id="password"
                            type="password"
                            name="pword"
                            placeholder="Password"
                            title="Minimum 6 characters at 
                                least 1 Alphabet and 1 Number"
                            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$"
                            required>
                           
                        </div>


                        <div class="field button-field">
                            <button class="button" type="submit" style="color: #fff; background-color: #de5efe; cursor: pointer;">Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                    </div>
                </div>
            </div>
           
            
               

                

            <!-- Signup Form -->
            <div class="form signup">
                <div class="form-content">
                    <header>SIGN UP</header>
                    <form action="index.php" method="post">
                        <div class="field input-field">
                            <input id="username"
                            type="text"
                            name="username"
                            placeholder="Username"
                            required>
                        </div>

                        <div class="field input-field">
                            <input type="email"
                            id="email"
                            name="uemail"
                            autocomplete="on"
                            placeholder="Email"
                            required>
                        </div>

                        <div class="field input-field">
                            <input type="text"
                            id="ph-no"
                            maxlength="10"
                            name="phno"
                            placeholder="Phone Number"
                            required>
                        </div>

                        <div class="field input-field">
                            <input id="password"
                            type="password"
                            name="upassword"
                            placeholder="Password"
                            title="Minimum 6 characters at 
                                least 1 Alphabet and 1 Number"
                            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$"
                            required>
            
                           
                        </div>


                        <div class="field button-field">
                        <button class="button" type="submit" value="submit" style="color: #fff; background-color: #de5efe; cursor: pointer;" name="submit">Submit</button>
                            
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>
            </div>

            
        </section>

        <!-- JavaScript -->
        <script src="user.js"></script>
        <script>
            function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            }
            
            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            document.body.style.backgroundColor = "white";
            }
        </script>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 300,
                duration: 1000,
            });
        </script>
    </body>
</html>