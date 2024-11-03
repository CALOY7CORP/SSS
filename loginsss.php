<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup</title>
    <link rel="stylesheet" href="loginsss.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <style>img {border-radius: 8px; position: absolute; left: 620px; top: 160px; opacity: 0.7;}</style>
    <style> div.cservice{ position: absolute;top: 860px;right: 1300px;  }</style>
    <style> div.US{ position: absolute;top: 860px;right: 1000px;  }</style>
    <style>a{text-decoration: none;} </style>
    <style> div.line{ position: absolute;top: 960px;left: 300px; }</style>
    <style> div.reserve{ position: absolute;top: 1000px;left: 420px;}</style>
    <style> div.logologin { position: absolute; top: 40px;left: 450px; } </style>
    <style>.minilogo{position: absolute; top: 30px;left: 300px; }</style>
    <style>div.name{position: relative; top: 180px; right:-270px;}</style>
</head>     



<body style="background-color:#B0E0E6; background-image: url('bg.jpg'); " >
<!--Logo-->
<img src="ps/logo.png"  width="1400" height="800">


<p ></p>
<div class="container">
<div class="form-container">
<h2>Login</h2>
<form id="login-form">
<input type="email" placeholder="Email" required>
<input type="password" placeholder="Password" required>
<button type="submit">Login</button>
</form>
<p>or</p>
<div class="g-signin2" data-onsuccess="onSignIn"></div>
<p>Don't have an account? <a href="#" onclick="toggleForms()">Signup</a></p>
</div>
        
<div class="form-container hidden">
<h2>Signup</h2>
<form id="signup-form">
<input type="email" placeholder="Email" required>
<input type="password" placeholder="Password" required>
<button type="submit">Signup</button>
</form>
<p>or</p>
<div class="g-signin2" data-onsuccess="onSignIn"></div>
<p>Already have an account? <a href="#" onclick="toggleForms()">Login</a></p>
</div>
</div>
<script src="loginsss.js"></script>

<div class="logologin" > <h1>SSS</h1></div>
<img src="ps/logo.png"  width="250" height="150" class="minilogo">




<!--Scan,Shop and skkip the line-->
<div class="name"><h1>Scan, Shop and Skip the Line</h1></div>


<!--info-->
<div class="cservice">
    <h3 > &nbsp; &nbsp;  Customer Service</h3>
<ul style="list-style-type: none;">
  <li><a href="#" style="color: #696969;">Service</a></li>
  <li><a href="#" style="color: #696969;">About Us</a></li>
</ul>  
</div>

<div class="US">
     <h3> &nbsp; &nbsp; &nbsp;Follow Us</h3>
<ul style="list-style-type: none;">
  <li><a href="#" style="color: #696969">Facebook</a></li>
  <li><a href="#" style="color: #696969;">Instagram</a></li>
</ul>  
</div>


<div class="line"><b style="color: #696969">
    __________________________________________________________________________________________________________________________________________________
</b></div>



<div class="reserve">
<P style="color: #696969">2024 CaloiCorp7. All Rights Reserved  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
Country and Region:Philippines 
     </P>

</div>


<!--picture sa gilid-->
<img src="ps/cart.png"  width="300" height="250" style="position: absolute; top: 540px; left:40px; transform: rotate(-20deg); ">
<img src="ps/bag na blue.png"  width="300" height="200" style="position: absolute; top: 170px; left:1500px; transform: rotate(40deg); ">













</body>
</html>

