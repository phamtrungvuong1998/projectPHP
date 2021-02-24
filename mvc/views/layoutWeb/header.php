  <!-- Header -->
<div class="header w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="http://localhost:8080/Project_php_26/" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BAND</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TOUR</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <div class="w3-dropdown-hover w3-hide-small">
        <?php if (isset($_SESSION['login'])) { ?>
          <button class="w3-padding-large w3-button" title="More"><?php echo $_SESSION['login']['name']; ?> <i class="fa fa-caret-down"></i></button>     
          <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <h5 class="w3-bar-item"><a href="http://localhost:8080/Project_php_26/Account/Home">Account</a></h5>
            <h5 class="w3-bar-item"><a href="http://localhost:8080/Project_php_26/LoginController/logout">Đăng xuất</a></h5>

        <?php }else{ ?>
          <button class="w3-padding-large w3-button" title="More">ĐĂNG NHẬP/ĐĂNG KÝ <i class="fa fa-caret-down"></i></button>     
          <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="http://localhost:8080/Project_php_26/LoginController/" class="w3-bar-item w3-button">Đăng nhập</a>
            <a href="http://localhost:8080/Project_php_26/Login/register" class="w3-bar-item w3-button">Đăng ký</a>
        <?php } ?>
      </div>
    </div>
    <form method="post" action="http://localhost:8080/Project_php_26/Web/search">
      <input type="search" placeholder="Search" name="search" style="float: right; margin-top: 20px;">
      <i style="float: right; margin-top: 20px;"></i>
    </form>
  </div>
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>PHẠM TRUNG VƯỢNG</b></h1>
  <p>Welcome to the blog of <span class="w3-tag">unknown</span></p>
</header>