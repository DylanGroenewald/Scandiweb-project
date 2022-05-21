<?php
include("con.php");
if(isset($_POST['save-btn'])){
  // Taking all values from the form data(input)
        $sku =  $_REQUEST['sku'];
        $name = $_REQUEST['name'];
        $price =  $_REQUEST['price'];
        $size = $_REQUEST['size'] . " MB";
        $weight = $_REQUEST['weight']. " KG";
        $dimension = "Dimension" . $_REQUEST['height'] . "x" . $_REQUEST['width'] . "x" . $_REQUEST['length'];
        $value = $_REQUEST['productType'];


        switch ($value) {
          case "DVD":
            // code...
            $sql = "INSERT INTO products (sku, name, price, size)
            VALUES ('$sku', '$name', '$price', '$size')";

            if ($con->query($sql) === TRUE) {
              header("location:index.php");
            }
          break;
          case "book":
            // code...
            $sql = "INSERT INTO products (sku, name, price, weight)
            VALUES ('$sku', '$name', '$price', '$weight')";

            if ($con->query($sql) === TRUE) {
              header("location:index.php");
            }
          break;
          case "furniture":
            // code...
            $sql = "INSERT INTO products (sku, name, price, dimension)
            VALUES ('$sku', '$name', '$price', '$dimension')";

            if ($con->query($sql) === TRUE) {
              header("location:index.php");
            }
          break;
          }
}
?>
