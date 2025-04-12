<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login and Registration Form </title>
    <link rel="icon" type="image/x-icon" href="images/logo1.jpg">
    <link rel="stylesheet" href="Login&singup.css">
    <link rel="stylesheet" href="responsive.css">
   
</head>
<body>
    <div class="holder">
        <div class="card">
            <div class="inner-box"id="card">
                <div class="card-front">
                    <h2>New-Registration</h2>
                    <form>
                        <input type="text" class="input-box"placeholder="Your name" required>
                        <input type="text" class="input-box"placeholder="your Address" required>
                        <input type="number" class="input-box" placeholder="Your Mobile Number" required>
                        <input type="password" class="input-box" placeholder="Password"required>
                        <input type="password" class="input-box" placeholder="Confirm Password"required>
                        <button type="submit" class="submit-btn">Register now </button>
                    </form>
                    <button type="button"class="btn" onclick="openLogin()">I have an account</button>  
                    <a href="index.html"> <button type="submit" class="submit-btn">Go Home</button></a>
                </div>
                <div class="card-back">
                    <h2>LOGIN</h2>
                    <form>
                        <input type="number" class="input-box" placeholder="Your Mobile Number" required>
                        <input type="password" class="input-box" placeholder="Password"required>
                        <button type="submit" class="submit-btn">LogIn</button>
                        <input type="checkbox"><span>Remember Me</span>
                    </form>
                    <a href="index.html"> <button type="submit" class="submit-btn">Go Home</button></a>
                    <button type="button"class="btn"onclick="openRegister()">I'm New Here</button>
                    <a href="">Forget password?</a>  
                </div>
         </div>
    </div>
        
 </div>
     <script>
    var card = document.getElementById("card");
    function openRegister(){
        card.style.transform="rotateY(0deg)";
        }
    function openLogin(){
        card.style.transform="rotateY(180deg)";
        }

     </script>
    
    
</body>
</html>