<?php
//fetch.php
 $connect = mysqli_connect("localhost", "root", "", "newsportal");
 $output = '';
 $sql = "SELECT * FROM subcategory WHERE cat_id = '".$_POST["catid"]."' ORDER BY subcat";
 $result = mysqli_query($connect, $sql);
 $output .= '<option value="">--Select Subcategory--</option>';
 
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["subcat_id"].'">'.$row["subcat"].'</option>';
  }
 
 echo $output;

?>
