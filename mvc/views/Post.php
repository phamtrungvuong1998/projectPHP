<!DOCTYPE html>
<html>
<title>Quản trị</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
      <h5><b><i class="fa fa-dashboard"></i> Bài viết của bạn</b></h5>
    </header>

    <div class="w3-container">
      <div class="w3-row">
        <div class="w3-col m1">ID</div>
        <div class="w3-col m4">Tiêu đề</div>
        <div class="w3-col m2">Ngày tạo</div>
        <div class="w3-col m5">Action</div>
      </div>
      <div class="w3-row">
        <?php while ($row = $data['result']->fetch_assoc()) {?>
        <div class="w3-col m1" style="height: 50px;"><?php echo $row['id']; ?></div>
        <div class="w3-col m4" style="height: 50px;"><?php echo $row['title']; ?></div>
        <div class="w3-col m2" style="height: 50px;"><?php echo $row['created_at']; ?></div>
        <div class="w3-col m5" style="height: 50px;">
          <a href="http://localhost:8080/Project_php_26/PostManage/delete/<?php echo $row['id']; ?>" class="btn btn-danger">Xóa</a>
        </div>
      <?php }?>
      </div>
      <center><a href="http://localhost:8080/Project_php_26/Post/PostAdd" class="btn btn-success">Thêm bài viết</a></center>
    </div>
  <!-- Footer -->
    

  <!-- End page content -->
</div>
</body>
</html>