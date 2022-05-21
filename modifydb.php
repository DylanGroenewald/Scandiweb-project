<?php
include("con.php");
if(isset($_POST['delete-btn'])){

  if(isset($_POST['checkbox'])){
    foreach($_POST['checkbox'] as $id){
      // $id = trim($sku,'/');
      $sql = "DELETE FROM products WHERE products.id =$id";
      // echo $sql;
      if ($con->query($sql) === TRUE) {
        header("location:index.php");
      }
    }
  } else {
    // code...
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Please select items to delete');
    window.location.href='index.php';
    </script>");
  }
}

// $check = isset($_POST['checkbox']) ? "checked" : "unchecked";
// echo $check;
?>
