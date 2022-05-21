<?php
include("con.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Products List</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-light">
      <div class="container-fluid">
        <div class="float-left">
          <h3 class="text-uppercase">Products list</h3>
        </div>
        <div class="float-right">
          <button class="btn btn-primary" id="add-product-btn" type="button" onclick="window.location.href='add.html'" name="add-btn">ADD</button>
          <button form="product-list-form" class="btn btn-danger" id="delete-product-btn" type="submit" name="delete-btn">MASS DELETE</button>
        </div>
      </div>
    </nav>
    <hr class="m-0">
    <form class="product-list-form" id="product-list-form" action="modifydb.php" method="post">
      <div class="container-fluid d-flex" style="flex-wrap: wrap;">
        <?php
          $query = "SELECT * FROM products ORDER by id desc";
          $result = mysqli_query($con, $query);
          while($row = mysqli_fetch_array($result)) {
        ?>
            <div class="card m-1" style="width: 180px;">
              <div class="card-header">
                <input class="delete-checkbox" type="checkbox" name="checkbox[]" value="<?php echo $row['id']; ?>">
              </div>
              <div class="card-body text-center p-1">
                <p><?php echo $row['sku']; ?></p>
                <p><?php echo $row['name']; ?></p>
                <p><?php echo $row['price']; ?>$</p>
                <?php
                if ($row['size'] != '0'){
                  echo "<p>".$row['size'];"</p>";
                }
                if ($row['weight'] != '0'){
                  echo "<p>".$row['weight'];"</p>";
                }
                if ($row['dimension'] != '0'){
                  echo "<p>".$row['dimension'];"</p>";
                }
                ?>
              </div>
            </div>
        <?php } ?>
      </div>
    </form>
  </body>
</html>
<!-- <script>
$('#delete-product-btn').click(function() {
  if(!$("delete-checkbox").is(":checked")) {
    alert("Choose items");
    return false;
  } else {
    return true;
  }
});
</script> -->
