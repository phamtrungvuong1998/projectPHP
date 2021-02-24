<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
      <div class="w3-col s4">
        <img src="./mvc/views/assets/images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
      </div>
      <div class="w3-col s8 w3-bar">
        <span>Welcome, 
          <strong>
            <?php if (isset($_SESSION['login'])) {
                echo $_SESSION['login']['name'];
            } ?>
          </strong>
      </span>
      <br>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
      </div>
    </div>
    <hr>
    <div class="w3-container">
      <a href="http://localhost:8080/Project_php_26/Web"><h5>Trang chủ</h5></a>
    </div>
    <div class="w3-bar-block">
      <a href="" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
      <div class="w3-container">
          <div class="w3-dropdown-click">
            <a onclick="myFunction()" class="w3-bar-item w3-button w3-padding" style="display: <?php 
                if ($_SESSION['login']['level'] == 3) {
                  echo "block";
                }else{
                  echo "none";
                }
            ?>;"><i class="fa fa-bank fa-fw"></i>Quản lí</a>
            <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
              <a href="http://localhost:8080/Project_php_26/UserController/getList/2" class="w3-bar-item w3-button">Người dùng</a>
              <a href="http://localhost:8080/Project_php_26/PostController/getList/2" class="w3-bar-item w3-button">Bài viết</a>
            </div>
          </div>  
          <a href="http://localhost:8080/Project_php_26/UserController/getList/1" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Account</a>
          <a href="http://localhost:8080/Project_php_26/PostController/getList/1" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Bài viết của bạn</a>
          <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
      </div>

</nav>

<script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("Demo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
</script>

