<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./mvc/views/assets/css/style.css">
<style>
  input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
</style>
</head>
<body>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="http://localhost:8080/Project_php_26/Login/loginProcess" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" value="" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" value="" required>
        
      <button type="submit" name="login">Login</button>
      <div style="color: red; display: <?php if ($data['styleLogin'] == 1) {
        echo "none";
      } else {
        echo "block";
      }
      ?>;">Email hoặc mật khẩu sai </div>
      <span class="psw"><a href="http://localhost:8080/Project_php_26/Login/register">Đăng ký ?</a></span>
      <label>
        <input type="checkbox" checked="checked" name="remember" value="1"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>
</body>
</html>