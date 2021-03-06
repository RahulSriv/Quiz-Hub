<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
     
    <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>

    <style>
        

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <link rel="stylesheet" href="css/style2.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
      
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
            <!--Log in Part  -->
          <form action="validation.php" method="post" class="sign-in-form" >
            <h2 class="heading">Quiz Hub</h2>
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="Password" name="password" placeholder="Password" />
            </div>
            <br />
            <div class="forgot"><a href="#">Forgot password?</a></div>
            <br />
            <button type="submit" class="btn">Log In</button>
            <p class="social-text">
              Or Sign in with other social media accounts
            </p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <br /><br />
            <button class="btn solid">Go back to Home</button>
          </form>


          <!-- Sign up Part -->
          <form action="registration.php" method="post" class="sign-up-form" onsubmit="return validateForm()" name="myForm" >
            <h2 class="heading">Quiz Hub</h2>
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Name" id="usernames"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" id="emails" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="Password" name="password" placeholder="Password" id="pass" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="Password" name="confirm_password" placeholder="Confirm Password" id="cpass" />
            </div>
            <button type="submit" class="btn">Sign up</button>
            <p class="social-text">
              Or Sign up with other social media accounts
            </p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New User?</h3>
            <br />
            <p>
              New to Quiz Hub? Welcome! Register now and get started. <br />
              Learn. Practice. Assess.
            </p>
            <br />
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="images/complete_task_u2c3.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Registered User?</h3>
            <br />
            <p>
              Already have an account? Sign in now and get started. <br />
              Learn. Practice. Assess.
            </p>
            <br />
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img
            src="images/A_day_at_the_park_re_9kxj.svg"
            class="image"
            alt=""
          />
        </div>
      </div>
    </div>



    
    <div id="box">
      
      <h2 id="box-heading">Invalid Credentials</h2>
      <div class="alert_items">
        
        <ul>
        <li id="check1">
            Name cannot be blank
        </li>
        <li id="check2">
            Enter a valid email id
        </li>
        <li id="check3">
            Password length should be 5-10 and must contain atleast one uppercase, one lowercase and one number             
        </li>
        <li id="check4">
            Passwords should match
        </li>
        <li id="check5">
            User not found
        </li>
        </ul>
       </div> 
      
       <a class="btn" onclick="pop()" href="login.php">Go Back</a>
    </div>
    
    <style>

    .alert_items ul li{
        padding: 10px;
        font-size: 20px;
        line-height: 28px;
        text-align: left;
        margin-left: 20px;
    } 
    #box{
      width: 500px;
      overflow: hidden;
      background-color: #eeeeee;
      box-shadow: 0 0 10px black;
      border-radius: 10px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 9999;
      padding: 20px;
      text-align: center;
      display: none;
    }
    #box span{
      color: white;
      font-size: 40px;
      display: block;
      margin: 20px;
    }
    #box h2{
      padding: 10px;
      border-bottom: 2px solid #4481eb;
    }
    .close{
      font-size: 18px;
      color: white;
      padding: 10px 20px;
      cursor: pointer;
      background-color: white;
      display: inline-block;
      border-radius: 1px solid #000;
    }
    </style>
    
    

    <script>
     window.onload = (event) => {
         pop2();
     };
    var modal = null
    var modal2 = null
    function pop() {
        
        if(modal === null) {
            document.getElementById("box").style.display = "block";
            modal = true
        } else {
            document.getElementById("box").style.display = "none";
            modal = null
        }
    }
    function pop2() {




        $("#check1").hide();
        $("#check2").hide();
        $("#check3").hide();
        $("#check4").hide();
        $("#check5").show();
        document.getElementById("box-heading").innerHTML = "Invalid Credentials";
        if(modal2 === null) {
            document.getElementById("box").style.display = "block";
            console. log("Hello"); setTimeout(() => { console. log("World!"); }, 20000); 
            modal2 = true
        } else {
            document.getElementById("box").style.display = "none";
            console. log("Hello"); setTimeout(() => { console. log("World!"); }, 200000); 
            modal2 = null
        }
    }

      function validateForm() {
        var x = document.forms["myForm"]["username"].value;
        var y = document.forms["myForm"]["email"].value;
        var z = document.forms["myForm"]["password"].value;
        var w = document.forms["myForm"]["confirm_password"].value;
        $("#check5").hide();
        var f=1;
        if(x.length==0){
            f=0;
            pop();
            return false;
        }
        if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(y)==false)
        {
            f=0;
            pop();
            return false;
        }
        if(/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{5,11})$/.test(z)==false){
            f=0;
            pop();
            return false;
        }
        if(z.localeCompare(w)!=0){
            f=0;
            pop();
            return false;
        }
        
        if(f==1){
            pop2();
            
        }


     }

      const sign_in_btn = document.querySelector("#sign-in-btn");
      const sign_up_btn = document.querySelector("#sign-up-btn");
      const container = document.querySelector(".container");

      sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
      });

      sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
      });
    </script>


  </body>
</html>
