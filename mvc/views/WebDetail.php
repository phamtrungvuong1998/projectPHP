<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php require_once './mvc/views/layoutWeb/link.php'; ?>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<?php require_once './mvc/views/layoutWeb/header.php'; ?>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <?php while ($row = $data['result']->fetch_assoc()) { ?>
  <div class="w3-card-4 w3-margin w3-white">
    <img src="./mvc/views/assets/images/woods.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
      
      <h3><b><?php echo $row['title']; ?></b></h3>
      <h5><?php echo $row['description']; ?>, <span class="w3-opacity">April 7, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p><?php echo $row['content']; ?></p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><b></b></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
        </div>
      </div>
    </div>
  </div>
  <?php }?>
  <hr>
</div>

<!-- Introduction menu -->
<?php require_once './mvc/views/layoutWeb/Intro.php'; ?>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<?php require_once './mvc/views/layoutWeb/footer.php'; ?>

</body>
</html>
