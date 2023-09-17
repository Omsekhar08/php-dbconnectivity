<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Classic Login Form Example</title>
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet"><link rel="stylesheet" href="./style.css">
<style>
    body {
  background: #ABCDEF;
  font-family: Assistant, sans-serif;
  display: flex;
  min-height: 90vh;
}
.login {
    width: 20%;
  color: white;
  /* background: background: #136a8a; */
  background: 
    -webkit-linear-gradient(to right, #267871, #136a8a);
  background: 
    linear-gradient(to right, #267871, #136a8a);
  margin: auto;
  box-shadow: 
    0px 2px 10px rgba(0,0,0,0.2), 
    0px 10px 20px rgba(0,0,0,0.3), 
    0px 30px 60px 1px rgba(0,0,0,0.5);
  border-radius: 8px;
  padding: 50px;
}
.login .head {
  display: flex;
  align-items: center;
  justify-content: center;
}
.login .head .company {
  font-size: 2.2em;
}
.login .msg {
  text-align: center;
}
.login .form input[type=text].text {
  border: none;
  background: none;
  box-shadow: 0px 2px 0px 0px white;
  width: 100%;
  color: white;
  font-size: 1em;
  outline: none;
}
.login .form .text::placeholder {
  color: #D3D3D3;
}
.login .form input[type=password].password {
  border: none;
  background: none;
  box-shadow: 0px 2px 0px 0px white;
  width: 100%;
  color: white;
  font-size: 1em;
  outline: none;
  margin-bottom: 20px;
  margin-top: 20px;
}
.login .form .password::placeholder {
  color: #D3D3D3;
}
.login .form .btn-login {
  background: none;
  text-decoration: none;
  color: white;
  box-shadow: 0px 0px 0px 2px white;
  border-radius: 3px;
  padding: 5px 2em;
  transition: 0.5s;
}
.login .form .btn-login:hover {
  background: white;
  color: dimgray;
  transition: 0.5s;
}
.login .forgot {
  text-decoration: none;
  color: white;
  float: right;
}
.login  #account{
    margin-top: 40px;
    height: 20px;
    margin-top: 10px;
    border: 2px solid;
}
 
</style>
</head>
<body>
 
<section class='login' id='login'>
  <div class='head'>
  <h1 class='company'> Welcome</h1>
  </div>
  <p class='msg'>Welcome back Admin</p>
  <div class='form'>
    <form>
  <input type="text" placeholder='Admin Email' class='text' id='username' required><br>
  <input type="password" placeholder='••••••••••••••' class='password'><br>
  <a href="#" class='btn-login' id='do-login'>Login</a>
  <a href="#" class='forgot'>Forgot?</a>
</form>
<!-- <a href="#" class='account' id='account'>Create Account</a> -->

  </div>
</section>
<!-- <footer>
  <p>Made with <span class='heart'>&hearts;</span> by Bridges(<a href='https://github.com/pxntxs'>@pxntxs</a>)</p>
  <p>Gradient: <a href='https://uigradients.com/#Turquoiseflow'>https://uigradients.com/#Turquoiseflow</a></p>
</footer> -->
<!-- partial -->
  <script>
var btnLogin = document.getElementById('do-login');
var idLogin = document.getElementById('login');
var username = document.getElementById('username');
btnLogin.onclick = function(){
  idLogin.innerHTML = '<p>We\'re happy to see you again, </p><h1>' +username.value+ '</h1>';
}
  </script>

</body>
</html>