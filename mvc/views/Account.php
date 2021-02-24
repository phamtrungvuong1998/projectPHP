  <!DOCTYPE html>
<html>
<title>Quản trị</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  input[type=email], input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
</style>
<?php require_once 'layout1/Link1.php'; ?> 
<body class="w3-light-grey">

<!-- Top container -->
  <?php require_once 'layout1/Container.php'; ?>

<!-- Sidebar/menu -->
  <?php require_once 'layout1/Sidebar.php';  ?>

<!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
      <h5><b><i class="fa fa-dashboard"></i> Account</b></h5>
    </header>
    <div class="container">
      <form action="http://localhost:8080/Project_php_26/UserController/editAccount" method="post">
        <div class="row">
        <?php $row = $data['result']->fetch_assoc(); ?>
        <label for="uname"><b>Email :</b></label>
        <input type="email" placeholder="Enter Email" name="email" value="<?php echo $row['email'];?>" required>
        <label for="uname"><b>Họ và tên :</b></label>
        <input type="text" placeholder="Enter Email" name="name" value="<?php echo $row['name'];?>" required>
        <label for="uname"><b>Mật khẩu :</b></label>
        <input type="password" placeholder="Enter Email" name="pass" value="<?php echo $row['password'];?>" required>
      </div>
      <center><button type="submit" class="btn btn-success">Thay đổi</button></center>
      </form>
    </div>

  <!-- Footer -->
    

  <!-- End page content -->
</div>
</body>
</html>