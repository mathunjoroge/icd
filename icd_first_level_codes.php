<!DOCTYPE html>
<html>
<title>first level codes</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  </header><?php include('connect.php'); ?>
  
  <div class="content-wrapper" style=" background-image: url('../images/doctor.jpg');">
      <p></p>
    
    <div class="container" style="background: white">
     <a href="icd_blocks.php?id=<?php echo $_GET['back']; ?>"><button class="btn btn-success">back</button></a>
      <div class="container" style="background: white">
<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left; width:60%;">
  <thead>
    <tr>
    <th width="13%">specific disease categories</th>
       </tr>
  </thead>
  <tbody>
       
      <?php  
      $id=$_GET['id'];   
        $result = $db->prepare("SELECT * FROM icd_first_level_codes WHERE icd_block_id=:a");
        $result->BindParam(':a', $id);
        $result->execute();
        for($i=0; $row = $result->fetch(); $i++){
      ?>
      <tr class="record">
      <td><a href="icd_second_level_codes.php?id=<?php echo $row['id']; ?>&back=<?php echo $_GET['id']; ?>&reload=<?php echo $_GET['back']; ?>"> <?php echo $row['title']; ?></a></td>
      </td>
      
      </tr>
      <?php
        }
      ?>
    
  </tbody>
  
      
</table>
</div>

</html>