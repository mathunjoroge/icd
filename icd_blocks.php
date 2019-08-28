<!DOCTYPE html>
<html>
<title>Disease Sub-Categories</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  </header><?php include('connect.php'); ?>
  
  <div class="content-wrapper" style=" background-image: url('../images/doctor.jpg');">

    <p></p>
    
    <div class="container" style="background: white">
      <a href="index.php"><button class="btn btn-success">back</button></a>
<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left; width:60%;">
  <thead>
    <tr>
    <th width="13%">disease sub-categories</th>
       </tr>
  </thead>
  <tbody>    
      <?php
      $id=$_GET['id'];
       $result = $db->prepare("SELECT * FROM icd_blocks WHERE icd_chapter_id=:a");
        $result->BindParam(':a', $id);        
        $result->execute();
        for($i=0; $row = $result->fetch(); $i++){
      ?>
      <tr class="record">
      <td><a href="icd_first_level_codes.php?id=<?php echo $row['id']; ?>&back=<?php echo $_GET['id']; ?>"> <?php echo $row['title']; ?></a></td>
      </td>
      
      </tr>
      <?php
        }
      ?>
    
  </tbody>
  
      
</table>
</div>

</html>